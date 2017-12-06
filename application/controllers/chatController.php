<?php
/**
 * Created by PhpStorm.
 * User: sabri
 * Date: 06/12/2017
 * Time: 17:26
 */

require '../models/chat.php';

try {
    if (isset($_GET['id'])) {
        $conversations = getMessages($_GET['id']);
    }
    else
        throw new Exception("Error URL");
}
catch (Exception $e) {
    $msgErreur = $e->getMessage();
}

require '../views/conversation.php';