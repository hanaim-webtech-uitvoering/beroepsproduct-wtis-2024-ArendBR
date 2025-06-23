<?php

function zoekFunctie() {
    //require_once "../db_connectie.php";
    $db = maakverbinding();
    if(empty($_GET['zoek'])|| !isset($_GET['zoek'])) {
    $sql = "SELECT name, type_id, Pizza_Order_Product.quantity, price
            FROM Product
            INNER JOIN Pizza_Order_Product ON Product.name = Pizza_Order_Product.product_name
            ORDER BY type_id;"
    ;
  
    $query = $db->query($sql);
    $results = $query->fetchAll(PDO::FETCH_ASSOC);
   // $_SESSION["type_id"] = $results["type_id"];
    }

    else if(isset($_GET['zoek'])){
        $zoek = htmlspecialchars($_GET['zoek']);
        $sql = "SELECT name, type_id, Pizza_Order_Product.quantity, price
                FROM Product
                INNER JOIN Pizza_Order_Product ON Product.name = Pizza_Order_Product.product_name
                WHERE name like '%$zoek%' 
                ORDER BY type_id";
        $query = $db->query($sql);
        $results = $query->fetchAll(PDO::FETCH_ASSOC);
        
    }

    if (!$results) {

        die('Invalid query' . $db->error);
    }
}
?>