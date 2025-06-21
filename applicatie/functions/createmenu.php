<?php

function createmenuoverzicht() {
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

    foreach ($results as $result ) {
//$readonly = (!empty($result["name"]) && strlen(trim($result["name"])) == 0) ? null : 'readonly';
//$readonly = (strlen(trim($result["name"])) == 0) ? null : 'readonly';

      echo '<tr>';  
       // echo' <td>' . $result["name"] . '</td>';
        echo" <td>";
        echo "<input type='text' name='product' value= ". $result["name"] .">";
        echo" </td>";
        echo" <td>" . $result["type_id"] .  "</td>";
        echo" <td>";
        echo "<input type='number' min='1'  name='quantity' value=1>";
        echo" </td>";
       echo" <td>" . $result["price"] . "</td>";
       echo" <td>";
     echo "<input type='submit' name='toevoegen' value=toevoegen>";
     echo" </td>";
      echo"</tr> ";
  //    session_start();
    $_SESSION["product"] = $result["name"];
    $_SESSION["type_id"] = $result["type_id"];
    $_SESSION["price"] = $result["price"];
}
    } 
   // session_start();
   // $_SESSION["product"] = $results["name"];
   // $_SESSION["type_id"] = $results["type_id"];
  //  $_SESSION["price"] = $results["price"];
//}
?>
