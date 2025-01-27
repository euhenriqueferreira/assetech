import $ from 'jquery';

const UFsSelectElement = $('#uf');
const CitySelectElement = $('#city');

$(window).on('load', function () {
    window.renderCitiesFromSelectedState = () => renderCitiesFromSelectedState();
});

// Render the UFs on select when the page has loaded
$(window).on('load', async () => {
    try {
        const data = await getUFsFromAPI();
        data.forEach(uf => {
            createOption(uf, UFsSelectElement);
        });

    } catch (error) {
        console.error("Erro ao buscar os dados da API:", error);
    }
});

// Get the UFs from API
async function getUFsFromAPI() {
    const url = "https://servicodados.ibge.gov.br/api/v1/localidades/estados?orderBy=nome";
    const response = await fetch(url);

    if (!response.ok) {
        throw new Error(`Erro na requisição: ${response.status}`);
    }

    return response.json();
}

// Get the Cities from API
async function getCitiesFromAPI(UFId) {
    const url = `https://servicodados.ibge.gov.br/api/v1/localidades/estados/${UFId}/municipios?orderBy=nome`;
    const response = await fetch(url);

    if (!response.ok) {
        throw new Error(`Erro na requisição: ${response.status}`);
    }

    return response.json();
}

// Create an option
function createOption(uf, select) {
    const option = document.createElement('option');
    option.setAttribute('value', uf.nome);
    option.setAttribute('data-id', uf.id);
    option.textContent = uf.nome;
    select.append(option);
}

// Get the Cities from API based on selected UF
async function renderCitiesFromSelectedState() {
    const selectedOption = UFsSelectElement.find('option:selected');
    const UFId = selectedOption.data('id');

    try {
        const data = await getCitiesFromAPI(UFId);
        data.forEach(uf => {
            createOption(uf, CitySelectElement);
        });

    } catch (error) {
        console.error("Erro ao buscar os dados da API:", error);
    }
}