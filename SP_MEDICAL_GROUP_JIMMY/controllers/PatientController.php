<?php
include_once(dirname(__FILE__) . '/../models/Patient.php');

class PatientController {
    private $db;
    private $patients = [];

    public function __construct($db) {
        $this->db = $db;
    }

    public function listPatients() {
        $query = "SELECT * FROM patients";
        $result = $this->db->query($query);
        
        while ($row = $result->fetch_assoc()) {
            $this->patients[] = new Patient(
                $row['id'], 
                $row['name'], 
                $row['dob'], 
                $row['cpf'], 
                $row['address'], 
                $row['phone'], 
                $row['email'], 
                $row['specialty']
            );
        }

        return $this->patients;
    }

    public function handleCreatePatient() {
        if (isset($_POST['name'])) {
            $name = $_POST['name'];
            $dob = $_POST['dob'];
            $cpf = $_POST['cpf'];
            $address = $_POST['address'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $specialty = $_POST['specialty'];

            $query = "INSERT INTO patients (name, dob, cpf, address, phone, email, specialty) 
                      VALUES ('$name', '$dob', '$cpf', '$address', '$phone', '$email', '$specialty')";
            $this->db->query($query);
        }
    }
}
?>
