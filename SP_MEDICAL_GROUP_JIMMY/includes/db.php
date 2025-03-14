<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sp_medical_group_jimmy";

$db = new mysqli($servername, $username, $password, $dbname);

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>