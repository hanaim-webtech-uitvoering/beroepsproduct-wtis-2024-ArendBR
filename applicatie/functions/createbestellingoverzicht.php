<?php
require_once "db_connectie.php";
require_once "createmenu.php";

function createbestellingoverzicht() {
    $db = maakverbinding();

    $sql = "SELECT u.username, u.address, o.datetime, o.status, p.name, p.price, p.type_id
    FROM Product AS p, Pizza_Order AS o, User1 AS u
	 ORDER BY o.status;
    "
    ;
    
    $stmt = $db->query($sql);
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($results as $result ) {



    echo " <tr>";
    echo "   <td>" . $result["username"] . " </td>";
    echo "   <td>" . $result["address"] . " </td>";
    echo "   <td>" . $result["datetime"] . " </td>";
    echo "   <td>" . $result["status"] . " </td>";
    echo "    <td>" . $result["name"] . " </td>";
    echo "    <td>" . $result["price"] . "</td>";
    echo "    <td>" . $result["type_id"] . "</td>";
     echo" <td>";
     echo "<input type='submit' name='statusaanpassen' value=status aanpassen>";
     echo" </td>";
     echo" <td>";
     echo "<input type='submit' name='detailoverzicht' value=detailoverzicht>";
     echo" </td>";
     echo" </tr>";
    } 
}
?>