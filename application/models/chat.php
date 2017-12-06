<?php
/**
 * Created by PhpStorm.
 * User: sabri
 * Date: 06/12/2017
 * Time: 16:52
 */


//Get messages from a conversation between 2 members
function getMessages($memberID) {
    include("config.php");
    $db = getDB();
    $messages = $db->query('select m_contenu, u_surname, c_id FROM conversation c JOIN messages m ON (c.c_id = m.c_id) JOIN users u ON (m.u_id = u.u_id) WHERE m.u_id=$memberID');
    if($messages->rowCount()>0)
        $_SESSION['c_id']= $messages['c_id'];
    return $messages;
}

//Save message
function setMessage($pseudo, $message) {
    try {
        if(!isset($_SESSION['c_id']))
            setConversation($memberID);
        $stmt = $db->prepare("INSERT INTO messages(m_id,c_id,u_id,m_date,m_contenu) VALUES (:m_id,:c_id,:u_id,:m_date,:m_contenu)");
        $stmt->bindParam("first_name_S", $first_name_S,PDO::PARAM_STR) ;
        $stmt->bindParam("last_name_S", $last_name_S,PDO::PARAM_STR) ;
        $stmt->bindParam("surname_S", $surname_S,PDO::PARAM_STR) ;
        $hash_password= hash('sha256', $password_S);
        $stmt->bindParam("hash_password", $hash_password,PDO::PARAM_STR) ;
        $stmt->bindParam("email", $user_email_S,PDO::PARAM_STR) ;
        $stmt->execute();
        $uid=$db->lastInsertId(); // Last inserted row id
        $db = null;
        $_SESSION['uid']=$uid;
        return true;
    }
    catch(PDOException $e) {
        echo '{"error":{"text":'. $e->getMessage() .'}}';
    }
}

//create conversation between 2 members
function setConversation($memberID) {
    try {
        $stmt = $db->prepare("INSERT INTO conversation(user1_id, user2_id) VALUES (:u1,:u2)");
        $stmt->bindParam("u1", $memberID,PDO::PARAM_STR) ;
        $stmt->bindParam("u2", $_GET['id'],PDO::PARAM_STR) ;
        return true;
    }
    catch(PDOException $e) {
        echo '{"error":{"text":'. $e->getMessage() .'}}';
    }
}