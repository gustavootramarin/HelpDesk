<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Página de Login</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">


</head>
<body>
    
    <div class="container">
        <div class="boxlogin">
            <div class="user-icon">
                <img src="{{ asset('imagens/adicionar-usuario.png') }}" alt="Ícone do usuário">
            </div>
                <form>
                    <label for="username">Usuário</label>
                    <input type="text" id="username" placeholder="Nome de usuário ou E-mail">

                    <label for="password">Senha</label>
                    <input type="password" id="password" placeholder="Digite sua Senha">

                <button
                    type="submit">ENTRAR
                </button>

            </form>

            <div class="links">
                <a href="#">Esqueceu sua senha?</a>
                <a href="cadastro.html">Cadastre-se</a>
            </div>
        </div>
    </div>
    
</body>
</html>