<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><link rel="stylesheet" href="style.css">
    <title>Aula Laravel</title>
    </head>
<body>
    <form action="{{ route('users.store') }}" method="POST">
        

        <h1>Cadastrar Usuários</h1>

        <!-- Campo: Nome -->
        <label for="name">Nome:</label>
        <input 
            type="text" 
            name="name" 
            id="name" 
            placeholder="Digite o seu nome" 
            required
        >

        <!-- Campo: Email -->
        <label for="email">Email:</label>
        <input 
            type="email" 
            name="email" 
            id="email" 
            placeholder="Digite o seu email"  
            required
        >

        <!-- Campo: Senha -->
        <label for="password">Senha:</label>
        <input 
            type="password" 
            name="password" 
            id="password" 
            placeholder="Digite sua senha" 
            required
        >

        <!-- Campo: Data de Nascimento -->
        <label for="date">Data de Nascimento:</label>
        <input 
            type="date" 
            name="date" 
            id="date" 
            required
        >
        
            <div class="error"></div>
        

        <!-- Botão de Enviar -->
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>