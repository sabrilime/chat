<?php
require_once 'authentication.php';
$signUp = new authentication();

$result = $signUp->userRegistration($_POST['first_name_S'],$_POST['last_name_S'],$_POST['surname_S'],$_POST['password_S'],$_POST['user_email_S']);
echo $result;