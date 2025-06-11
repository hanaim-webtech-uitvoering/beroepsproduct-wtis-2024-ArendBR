<?php
  // require_once "./db_connectie.php"; 

if (isset($_POST['registratie'])) {
// echo "registratie voltooid"; }
    $username = htmlspecialchars($_POST['username']) ;
    $password = htmlspecialchars($_POST['password']) ;
    $address = htmlspecialchars($_POST['address']) ;
    // require_once "./db_connectie.php";
    require_once "db_connectie.php";
    $db = maakVerbinding(); 

    $sql = "INSERT INTO User1 (username, password, address) 
    VALUES (?, ?, ?)";
    $query = $db->prepare($sql);
    $query -> bindparam('username',$username);
    $query -> bindparam('password',$password);
    $query -> bindparam('address',$address);
    $query->execute();
    $resultaat = $query->fetchAll();

    if (isset($resultaat[0]['username']) && (isset($resultaat[0]['password']) && (isset($address[0]['address'])))) {
        session_start();
        $_SESSION["username"] = $username;
        $_SESSION['password'] = $resultaat[0]['password'];
        $_SESSION['address'] = $address;
        $message = "Geregistreerd.";
        header("Location: ../index.php?username=$username");
    } else {
        echo "Registratie mislukt";
        header("Location: ../registratie.php");
}
    } 
?>