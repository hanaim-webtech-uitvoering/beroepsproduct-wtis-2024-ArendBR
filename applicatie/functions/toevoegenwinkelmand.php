<?php  
require_once "createmenu.php";
if (isset($_POST["toevoegen"])) {
  require_once "../db_connectie.php";
    $db = maakVerbinding(); 
    $sql = "INSERT INTO Product (name, price, type_id) 
    VALUES (?, ?, ?)";
    $query = $db->prepare($sql);

    $query->execute(
        [ 
            ($_POST['name']),
            ($_POST['price']),
            ($_POST['type_id'])
    ]
    );
   header("Location: ../winkelmand.php");
}
?>