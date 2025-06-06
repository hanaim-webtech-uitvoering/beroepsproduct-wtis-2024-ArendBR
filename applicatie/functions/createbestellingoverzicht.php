<?php
require_once "db_connectie.php";
require_once "createmenu.php";

function createbestellingoverzicht() {
    $db = maakverbinding();

    $sql = "SELECT u.username, o.address, p.name, p.price, p.type_id
    FROM Product AS p, Pizza_Order AS o, User1 AS u
	 ORDER BY type_id;
    "
    ;
    
    $stmt = $db->query($sql);
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    

    if (!$results) {

        die('Invalid query' . $db->error);
    }

    foreach ($results as $result ) {

        echo "

       <tr>
       <td>" . $result["username"] . " </td>
       <td>" . $result["address"] . " </td>
        <td>" . $result["name"] . " </td>
        <td>" . $result["price"] . "</td>
        <td>" . $result["type_id"] . "</td>
      </tr>
    ";
    } 
}
?>