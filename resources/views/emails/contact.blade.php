<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mensagem de Usuário - Site Assetech</title>
</head>
<body>
    <header>
        <h1>Mensagem de usuário recebida!</h1>
    </header>
     <ul>
        <li>
            Nome: {{ $data['name'] }}
        </li>
        <li>
            E-mail: {{ $data['email'] }}
        </li>
        <li>
            Telefone: {{ $data['phone'] }}
        </li>
        <li>
            Estado: {{ $data['uf'] }}
        </li>
        <li>
            Cidade: {{ $data['city'] }}
        </li>
        <li>
            Mensagem: {{ $data['message'] }}
        </li>
    </ul>
</body>
</html>


