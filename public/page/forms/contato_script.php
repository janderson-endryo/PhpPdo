<?php 

require_once "../../../utilizando_função.php";



$validate = validate([
    'password' => 's',
    'email' => 'e',
]);

dd($validate -> password);
?>