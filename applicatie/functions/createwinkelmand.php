<?php
//require_once "../db_connectie.php";
// require_once "createmenu.php";

function createwinkelmand() {
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


        echo" <tr>";
        echo" <td>" . $result["name"] . "</td>";
        echo" <td>" . $result["price"] . "</td>";
        echo" <td>" . $result["type_id"] . "</td>";
        echo" <td>";
        echo "<input type='submit' name='verwijderen' value='verwijderen'>";
        echo" </td>";     
        echo" <td>";
        echo "<input type='submit' name='aanpassen' value='aanpassen'>";
        echo" </td>";
        echo" </tr>";
    } 
}
//}
?>