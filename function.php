<?php
require_once 'database.php';

      
function theUserLevel($email){
    global $db;
    $query = "Select userLevel From admin where email = :email";
    $statement1 = $db->prepare($query);
    $statement1->bindValue(':email', $email);
    $statement1->execute();
    $admins1 = $statement1->fetch();
    $statement1->closeCursor();
    if(($admins1) == 0){
        echo 'error';
    } else {
    echo   $admins1[0];
    }
}

?>