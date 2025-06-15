<?php

function createmenuoverzicht() {
    //require_once "../db_connectie.php";
    $db = maakverbinding();
    if(empty($_GET['zoek'])|| !isset($_GET['zoek'])) {
    $sql = "SELECT name, price, type_id
    FROM Product
    ORDER BY type_id"
    ;
  
    $stmt = $db->query($sql);
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    else if(isset($_GET['zoek'])){
        $zoek = htmlspecialchars($_GET['zoek']);
        $sql = "SELECT name, price, type_id
        FROM Product
        WHERE name like '%$zoek%' 
        ORDER BY type_id";
        $stmt = $db->query($sql);
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
    }

    if (!$results) {

        die('Invalid query' . $db->error);
    }

    foreach ($results as $result ) {


      echo "<tr>";  
       echo" <td>" . $result["name"] . "</td>";
       echo" <td>" . $result["price"] . "</td>";
       echo" <td>" . $result["type_id"] .  "</td>";
       echo" <td>";
     echo "<input type='submit' name='toevoegen' value=toevoegen>";
     echo" </td>";
      echo"</tr> ";
    } 
   $_SESSION["name"] = $result["name"];
   $_SESSION["price"] = $result["price"];
   $_SESSION["type_id"] = $result["type_id"];
}
?>
