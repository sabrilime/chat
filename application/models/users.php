<?php
/**
 * Created by PhpStorm.
 * User: sabri
 * Date: 06/12/2017
 * Time: 16:55
 */

//Get members with their status
function getMembers() {
    include("config.php");
    $db = getDB();
    $members = $db->query('select u_id, u_surname, statut FROM users');
    return $members;
}