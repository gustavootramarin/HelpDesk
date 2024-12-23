<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="boxlogin">
            <div class="add-user-icon">
                <img src="imagens/adicionar-usuario.png" alt="Ícone do usuário">
            </div>
                <form action="{{ route('cadastrar') }}" method="post">
                @csrf
                    <label for="name">Nome Completo</label>
                    <input type="text" id="nome" placeholder="Insira seu Nome Completo">

                    <label for="email">Email</label>
                    <input type="email" id="email" placeholder="Insira seu endereço de Email">

                    <label for="tel">Telefone</label>
                    <input type="tel" id="telefone" placeholder="Insira seu número de telefone">

                    <label for="password">Senha</label>
                    <input type="password" id="senha" placeholder="Insira sua senha">

                    <label for="password">Confirme sua senha</label>
                    <input type="password" id="confirma-senha" placeholder="Insira novamente sua senha">

                <button
                    type="submit">Registrar</button>
                </button>

                </form>
        </div>
    </div>
</body>
</html>