<?php
include_once("../../includes/db.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $dob = $_POST['dob'];
    $cpf = $_POST['cpf'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $specialty = $_POST['specialty'];
    $history = $_POST['history'];

    $query = "INSERT INTO patients (name, dob, cpf, address, phone, email, specialty, history) 
              VALUES ('$name', '$dob', '$cpf', '$address', '$phone', '$email', '$specialty', '$history')";

    if ($db->query($query) === TRUE) {
        header("Location: pacientes.php");
        exit();
    } else {
        echo "Erro: " . $query . "<br>" . $db->error;
    }
}
?>
