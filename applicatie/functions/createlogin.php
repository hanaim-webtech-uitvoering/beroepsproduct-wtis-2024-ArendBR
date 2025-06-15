<?php
   
if (isset($_POST['inloggen'])) {
    $username = htmlspecialchars($_POST['username']) ;
    $password = htmlspecialchars($_POST['password']) ;
    $hash = password_hash(($_POST['password']), PASSWORD_DEFAULT);
 require_once "../db_connectie.php";
    $db = maakVerbinding(); 

    $sql = "SELECT username, password
        from User1
        where username = :username and password = :password";
 
    $query = $db->prepare($sql);
    $query->execute(
        [
            htmlspecialchars($_POST['username']),
            password_hash(htmlspecialchars($_POST['password']), PASSWORD_DEFAULT)
        ]
    );

if (password_verify(($_POST['username']), $hash)) {
   echo 'password is valid';
     session_start();
   $_SESSION["username"] = $_POST["username"];
        header("Location: ../index.php");
    } else {
        header("Location: ../loginregistratie.php?msg");
}
    } 
?>
