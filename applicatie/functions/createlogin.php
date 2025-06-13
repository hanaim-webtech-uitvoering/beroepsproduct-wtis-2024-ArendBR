<?php
   

if (isset($_POST['inloggen'])) {
// echo "Inloggen gelukt"; }
    $username = htmlspecialchars($_POST['username']) ;
    $password = htmlspecialchars($_POST['password']) ;
 require_once "../db_connectie.php";
    $db = maakVerbinding(); 

    $sql = "SELECT username, password
        from User1
        where username = :username and password = :password";
    $query = $db->prepare($sql);
    $query->execute();
    $resultaat = $query->fetchAll();

    if (isset($resultaat[0]['username']) && (isset($resultaat[0]['password']))) {
        session_start();
        $_SESSION["username"] = $_POST["username"];
        $message = "ingelogd";
        header("Location: ../index.php?username=$username");
    } else {
        echo "wachtwoord of gebruikersnaam is onjuist";
        header("Location: ../loginregistratie.php");
}
    } 
?>