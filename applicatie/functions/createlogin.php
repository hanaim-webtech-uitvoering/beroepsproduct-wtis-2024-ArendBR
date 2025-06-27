<?php
// Een personeelsaccount moet normaal alleen met admin aangemaakt kunnen worden, maar heb geen adminaccount gemaakt. Dit is nu even de oplossing voor de demo. 
if (isset($_POST['inloggen'])) {
    $username = htmlspecialchars($_POST['username']) ;
    $password = htmlspecialchars($_POST['password']) ;
 require_once "../db_connectie.php";
    $db = maakVerbinding(); 

    $sql = "SELECT username, password, role
        from [User]
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
