<?php
/**
 * Created by PhpStorm.
 * User: sabri
 * Date: 06/12/2017
 * Time: 17:04
 */

require '/application/models/users.php';

$members = getMembers();

require '/application/views/home.php';