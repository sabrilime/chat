<?php
require_once '../models/chat.php';
$sendMessage = new chat();

$result = $signUp->setMessage($_SESSION['u_surname'],$_POST['message']);
echo $result;