<?php
function createdetailoverzicht() {
    $db = maakVerbinding(); 
    $sql = "SELECT *
            FROM Product_Ingredient;";
    $query = $db->prepare($sql);
    $results = $query->fetchAll(PDO::FETCH_ASSOC);
    

    if (!$results) {
        die('Invalid query' . $db->error);
    }

    foreach ($results as $result ) {
        echo" <tr>";
        echo" <td>" . $result["product_name"] . "</td>";
        echo" <td>" . $result["ingredient_name"] . "</td>";
        echo" </tr>";
    } 
}
//} 
?>