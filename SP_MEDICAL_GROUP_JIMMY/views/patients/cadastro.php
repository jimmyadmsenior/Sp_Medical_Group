<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Pacientes</title>
</head>
<body>
    <br>
    <h1>CADASTRO DE PACIENTES</h1>

    <form action="add.php" method="POST">
        <label for="name">Nome Completo:</label>
        <input type="text" id="name" name="name" required>
        
        <label for="dob">Data de Nascimento:</label>
        <input type="date" id="dob" name="dob" required>
        
        <label for="cpf">CPF:</label>
        <input type="text" id="cpf" name="cpf" required>
        
        <label for="address">Endereço:</label>
        <textarea id="address" name="address" required></textarea>
        
        <label for="phone">Telefone:</label>
        <input type="text" id="phone" name="phone" required>
        
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>
        
        <label for="specialty">Especialidade Atendida:</label>
        <select id="specialty" name="specialty" required>
            <option value="Pediatria">Pediatria</option>
            <option value="Odontologia">Odontologia</option>
            <option value="Gastroenterologia">Gastroenterologia</option>
        </select>
        
        <label for="history">Histórico de Consultas:</label>
        <textarea id="history" name="history" required></textarea>
        
        <button type="submit">Cadastrar</button>
    </form>

    <p><a href="pacientes.php">Ver Pacientes Cadastrados</a></p>
</body>
</html>
