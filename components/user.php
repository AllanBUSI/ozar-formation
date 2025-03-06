<?php 

class User {

    private $email;
    private $password;
    private $error = [];

    public function __construct($email, $password) {
        $this->setEmail($email);
        $this->setPassword($password);
        return;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setEmail($email) {
        $verif = $this->validateEmail($email);

        $emailSQL = $this->verifyEmail($email);

        if ($emailSQL == true) {
            return $this->setError("L'email existe déjà");
        }

        if ($verif == false) {
            return $this->setError("L'email est invalide");
        }

        $this->email = $email;
        return $this->email;
    }

    public function verifyEmail($email) {
        $pdo = Connect();
        $value = FindBy2($pdo, $email, "email", "user", "*");

        if (count($value) >= 1) {
            return true;
        } else {
            return false;
        }
    }


    public function setPassword($password) {
        if (strlen($password) <= 8) {
            return $this->setError("Le mot de passe est trop petit");
        }
        $this->password = $password;
        return $this->password;
    }

    public function getError() {
        return $this->error;
    }

    public function setError($error) {
        return array_push($this->error,$error);
    }

    public function hashPassword($password) {
        return password_hash($password, PASSWORD_ARGON2ID);
    }

    private function validateEmail($email) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        } else {
            return false;
        }
    }
}