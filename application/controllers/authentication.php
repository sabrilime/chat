<?php
class authentication
{
    /* User Login */
    function userLogin($user_email,$password)
    {
        try{
            include("config.php");
            $db = getDB();
            $hash_password= hash('sha256', $password); //Password encryption
            $stmt = $db->prepare("SELECT u_id, u_surname FROM users WHERE u_mail=:usernameEmail AND u_password=:hash_password");
            $stmt->bindParam("usernameEmail", $user_email,PDO::PARAM_STR) ;
            $stmt->bindParam("hash_password", $hash_password,PDO::PARAM_STR) ;
            $stmt->execute();
            $count=$stmt->rowCount();
            $data=$stmt->fetch(PDO::FETCH_OBJ);
            $db = null;
            if($count)
            {
                $_SESSION['uid']=$data->u_id;
                $_SESSION['username']=$data->u_surname;
                return true;
            }
            else
            {
                return false;
            }
        }
        catch(PDOException $e) {
            echo '{"error":{"text":'. $e->getMessage() .'}}';
        }

    }

    /* User Registration */
    function userRegistration($first_name_S,$last_name_S,$surname_S,$password_S,$user_email_S)
    {
        try{
            include("config.php");
            $db = getDB();
            $st = $db->prepare("SELECT u_id FROM users WHERE u_surname=:u_surname OR u_mail=:u_mail");
            $st->bindParam(":u_surname", $surname_S,PDO::PARAM_STR);
            $st->bindParam(":u_mail", $user_email_S,PDO::PARAM_STR);
            $st->execute();
            $count=$st->rowCount();
            if($count<1)
            {
                $stmt = $db->prepare("INSERT INTO users(u_firstname,u_lastname,u_surname,u_password,u_mail) VALUES (:first_name_S,:last_name_S,:surname_S,:hash_password,:email)");
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
            else
            {
                $db = null;
                return false;
            }

        }
        catch(PDOException $e) {
            echo '{"error":{"text":'. $e->getMessage() .'}}';
        }
    }
}