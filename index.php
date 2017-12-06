<?php
/**
 * Created by PhpStorm.
 * User: sabri
 * Date: 06/12/2017
 * Time: 14:24
 */

setlocale(LC_TIME, 'fr_FR.utf8','fra');
ini_set('session.gc_maxlifetime', 1440);
ini_set('session.gc_divisor', 1000);
ob_start();
session_start();
if(empty($_SESSION['uid']) || $_SESSION['uid']=="")
    if (isset($_GET['menu']) && $_GET['menu']== 'signup')
        require 'application/views/subscribe.php';
    else
        require 'application/views/login.php';
else require 'application/controllers/userController.php';