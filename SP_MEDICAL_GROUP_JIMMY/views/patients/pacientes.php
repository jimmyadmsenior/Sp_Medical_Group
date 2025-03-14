<!-- views/patients/pacientes.php -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pacientes Cadastrados</title>
</head>
<body>
    <h1>Pacientes Cadastrados</h1>

    <div>
        <ul>
            <?php
            include_once("../../includes/db.php");

            $query = "SELECT * FROM patients";
            $result = $db->query($query);

            while ($patient = $result->fetch_assoc()) {
                echo "<li>";
                echo $patient['name'] . " - " . $patient['specialty'];
                echo " <a href='edit.php?id=" . $patient['id'] . "'>Editar</a>";
                echo " <a href='delete.php?id=" . $patient['id'] . "' onclick=\"return confirm('Tem certeza que deseja excluir?')\">Excluir</a>";
                echo "</li>";
            }
            ?>
        </ul>
    </div>

    <p><a href="cadastro.php">Voltar para Cadastro de Pacientes</a></p>
</body>
</html>
            