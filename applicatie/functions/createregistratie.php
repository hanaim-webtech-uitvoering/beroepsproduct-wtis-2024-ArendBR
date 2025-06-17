<?php
if (isset($_POST['registratie'])) {
     require_once "../db_connectie.php";
    $db = maakVerbinding(); 
    $sql = "INSERT INTO User1 (username, password, address, first_name, last_name, role) 
    VALUES (?, ?, ?, ?, ?, ?)";
    $query = $db->prepare($sql);

    $query->execute(
        [ 
            htmlspecialchars($_POST['username']),
            password_hash(htmlspecialchars($_POST['password']), PASSWORD_DEFAULT),
            htmlspecialchars($_POST['address']),
            htmlspecialchars($_POST['first_name']),
            htmlspecialchars($_POST['last_name']),
            htmlspecialchars($_POST['role'])
    ]
    );
   
   session_start();
   $_SESSION["username"] = $_POST["username"];
   $_SESSION["role"] = $_POST["role"];
    
        $message = "Geregistreerd.";
        header("Location: ../index.php");
    } 
?>