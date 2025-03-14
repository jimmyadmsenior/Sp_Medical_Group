create database sp_medical_group_jimmy;

use sp_medical_group_jimmy;

CREATE TABLE patients (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    dob DATE NOT NULL,
    cpf VARCHAR(14) NOT NULL,
    address TEXT NOT NULL,
    phone VARCHAR(15) NOT NULL,
    email VARCHAR(255) NOT NULL,
    specialty VARCHAR(100) NOT NULL,
    history TEXT NOT NULL
);