<?php
// Een personeelsaccount kan niet aangemaakt worden, aangezien er geen admin account is. 
// Om in te loggen op een personeels account gebruik: Gebruikersnaam: medewerker1 en Wachtwoord: medewerker1   
if (isset($_POST['inloggen'])) {
    $username = htmlspecialchars($_POST['username']) ;
    $password = htmlspecialchars($_POST['password']) ;
 require_once "../db_connectie.php";
    $db = maakVerbinding(); 

    $sql = "SELECT username, password, role
        from User1
        where username = ?;";
    $query = $db->prepare($sql);
    $query->execute(
        [
            htmlspecialchars($_POST['username']),
        ]
    );
$user = $query->fetch(PDO::FETCH_ASSOC);
if ($user && password_verify($password, $user['password'])) {    
   echo 'password is valid';
     session_start();
   $_SESSION["username"] = $_POST["username"];
    $_SESSION["role"] = $user['role'];
        header("Location: ../index.php");
    } else {
        header("Location: ../loginregistratie.php?msg");
}
    } 
?>
