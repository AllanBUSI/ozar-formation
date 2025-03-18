<?php 
session_start();

require '../components/user.php';
require '../components/database.php';

$pdo = Connect();

// tous les utilisateurs qu'on le meme email, que on le premier et que on compare le mot de passe

$value = FindBy2($pdo, $_POST['email'], 'email', 'user', '*');

if (count($value) == 0) {
    header("Location: http://localhost:3000/login.php?error=cette utilisateur n'existe pas");
} else {
    if (User::verifyPassword($value[0]['password'], $_POST['password'])) {
        $_SESSION["email"] = $value[0]['email'];
        header("Location: http://localhost:3000/");
    } else {
        header("Location: http://localhost:3000/login.php?error=Le mot de passe est incorrete");
    }
}

?>