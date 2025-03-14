<?php
include_once("../../includes/db.php");

if (isset($_GET['id'])) {
    $patient_id = $_GET['id'];

    $query = "SELECT * FROM patients WHERE id = $patient_id";
    $result = $db->query($query);
    $patient = $result->fetch_assoc();

    if (!$patient) {
        echo "Paciente não encontrado!";
        exit();
    }
} else {
    echo "ID não especificado!";
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $dob = $_POST['dob'];
    $cpf = $_POST['cpf'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $specialty = $_POST['specialty'];

    $update_query = "UPDATE patients SET name = '$name', dob = '$dob', cpf = '$cpf', address = '$address', phone = '$phone', email = '$email', specialty = '$specialty' WHERE id = $patient_id";
    
    if ($db->query($update_query) === TRUE) {
        header("Location: pacientes.php");
        exit();
    } else {
        echo "Erro ao atualizar os dados: " . $db->error;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Paciente</title>
    <link rel="stylesheet" href="../../public/assets/css/style.css">
</head>
<body>
    <h1>Editar Paciente</h1>

    <form action="" method="POST">
        <label for="name">Nome Completo:</label>
        <input type="text" name="name" id="name" value="<?php echo $patient['name']; ?>" required><br><br>

        <label for="dob">Data de Nascimento:</label>
        <input type="date" name="dob" id="dob" value="<?php echo $patient['dob']; ?>" required><br><br>

        <label for="cpf">CPF:</label>
        <input type="text" name="cpf" id="cpf" value="<?php echo $patient['cpf']; ?>" required><br><br>

        <label for="address">Endereço:</label>
        <input type="text" name="address" id="address" value="<?php echo $patient['address']; ?>" required><br><br>

        <label for="phone">Telefone:</label>
        <input type="text" name="phone" id="phone" value="<?php echo $patient['phone']; ?>" required><br><br>

        <label for="email">E-mail:</label>
        <input type="email" name="email" id="email" value="<?php echo $patient['email']; ?>" required><br><br>

        <label for="specialty">Especialidade Atendida:</label>
        <input type="text" name="specialty" id="specialty" value="<?php echo $patient['specialty']; ?>" required><br><br>

        <button type="submit">Salvar Alterações</button>
    </form>

    <p><a href="pacientes.php">Voltar para a lista de pacientes</a></p>
</body>
</html>
