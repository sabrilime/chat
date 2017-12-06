<?php
require_once 'authentication.php';
$signUp = new authentication();
$result = $signUp->userLogin($_REQUEST['user_email'],$_REQUEST['password']);
echo $result;