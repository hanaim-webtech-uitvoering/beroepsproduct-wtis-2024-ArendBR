<?php
require_once "db_connectie.php";
function createmenuoverzicht() {
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

        echo "

       <tr>
        <td> " . $result["name"] . " </td>
        <td>" . $result["price"] . "</td>
        <td>" . $result["type_id"] . "</td>
        <td> </td>
      </tr>
    ";
    } 
}
?>