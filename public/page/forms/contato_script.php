<?php 

require_once "../../../utilizando_função.php";
// verificando o envior de dados post ou get
// dd($_SERVER['REQUEST_METHOD']);

$validate = validate([
    'password' => 's',
    'email' => 'e',
    //'termo' => 'on'
]);

dd($validate -> email);
?>