<?php
class Patient {
    private $id;
    private $name;
    private $dob;
    private $cpf;
    private $address;
    private $phone;
    private $email;
    private $specialty;

    public function __construct($id, $name, $dob, $cpf, $address, $phone, $email, $specialty) {
        $this->id = $id;
        $this->name = $name;
        $this->dob = $dob;
        $this->cpf = $cpf;
        $this->address = $address;
        $this->phone = $phone;
        $this->email = $email;
        $this->specialty = $specialty;
    }

    public function getId() { return $this->id; }
    public function getName() { return $this->name; }
    public function getDob() { return $this->dob; }
    public function getCpf() { return $this->cpf; }
    public function getAddress() { return $this->address; }
    public function getPhone() { return $this->phone; }
    public function getEmail() { return $this->email; }
    public function getSpecialty() { return $this->specialty; }
}
?>
