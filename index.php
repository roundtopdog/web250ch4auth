<?php

require_once 'database.php';
    
if(empty($_POST['email'])){
    echo 'enter an email';
} else {
    include 'function.php';
    echo theUserLevel($_POST['email']);
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Authentication</title>
    </head>
    <body>
      
      
        <form action="index.php" method="post">
            <label> Email</label>
            <input type="text" name="email">
            <input type="submit" value="submit">
        </form>
       
    </body>
</html>
