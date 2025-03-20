<?php 

var_dump($_FILES['file']['name']);


$origine = $_FILES['file']['tmp_name'];

$destination = 'file/'.$_FILES['file']['name'];

move_uploaded_file($origine,$destination);

?>