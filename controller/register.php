<?php 

require '../components/user.php';
require '../components/database.php';

$user = new User($_POST['email'], $_POST['password']);
$email = $user->getEmail();
$password = $user->getPassword();

$pdo = Connect();

Insert($email, $password, $pdo);

header('Location: https://google.com');

?>