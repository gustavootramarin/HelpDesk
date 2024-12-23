<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Página de Login</title>
    


</head>
<body>
    
    <div class="container">
        <div class="boxlogin">
            <div class="user-icon">
                <img src="{{ asset('imagens/user-icon.png') }}" alt="Ícone do usuário">
            </div>
                <form>
                    <label for="username">Usuário</label>
                    <input type="text" id="username" name="email" placeholder="Nome de usuário ou E-mail">

                    <label for="password">Senha</label>
                    <input type="password" id="password" name="password" placeholder="Digite sua Senha">

                <button
                    type="submit">ENTRAR
                </button>

            </form>

            <div class="links">
                <a href="#">Esqueceu sua senha?</a>
                <a href="{{ route('cadastrar.view') }}">Cadastre-se</a>
            </div>
        </div>
    </div>
    
</body>
</html>