<?php 

require '../components/user.php';
require '../components/database.php';

$user = new User($_POST['email'], $_POST['password']);
$email = $user->getEmail();
$password = $user->getPassword();

$pdo = Connect();

Insert($email, $user->hashPassword($password), $pdo);

$error = $user->getError();


if (count($error) >= 1) {
    header("Location: http://localhost:3000/register.php?error=".$error[0]);
} else {

    header('Location: http://localhost:3000');
}


?>