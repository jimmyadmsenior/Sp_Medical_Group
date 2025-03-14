<?php
include_once("../../includes/db.php");

if (isset($_GET['id'])) {
    $patient_id = $_GET['id'];

    $query = "DELETE FROM patients WHERE id = $patient_id";

    if ($db->query($query) === TRUE) {
        header("Location: pacientes.php");
        exit();
    } else {
        echo "Erro ao excluir o paciente: " . $db->error;
    }
} else {
    echo "ID não especificado!";
}
?>
