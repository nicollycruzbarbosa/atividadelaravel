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
            placeholder="Digite sua senha/CPF" 
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
       <style>
  .campo-combinado {
    display: flex;
    align-items: stretch; /* deixa todos com a mesma altura */
    border: 1px solid #ccc;
    border-radius: 6px;
    overflow: hidden;
    max-width: 350px;
  }

  .campo-combinado select,
  .campo-combinado input {
    border: none;
    padding: 10px;
    font-size: 14px;
    outline: none;
  }

  .campo-combinado select {
    background: #f0f0f0;
    cursor: pointer;
  }

  .campo-combinado input {
    flex: 1; /* ocupa o espaço restante */
  }
</style>

<label for="tipoAtendimento">Tipo de atendimento:</label>
<div class="campo-combinado">
  <select id="tipoAtendimento">
    <option value="">Selecione:</option>
    <option value="Consulta">Consulta Presencial</option>
    <option value="Emergência">Emergência</option>
    <option value="Exame">Exame</option>
    <option value="Clínico Geral">Clínico Geral</option>
    <option value="Pediatria">Pediatria</option>
    <option value="Teleconsulta">TeleConsulta</option>
    <option value="Outro..">Outro...</option>

  </select>
  
</div>



      
        
        <div class="error"></div>
        <br>
    
        <!-- Botão de Enviar -->
        <a href="cadastro.php">Cadastrar</a>
    </form>
</body>
</html>