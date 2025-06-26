<?php

function createdetailoverzicht() {
    $db = maakVerbinding(); 
    $product = $_POST['product'];
        $sql = "SELECT DISTINCT p.name AS product, i.ingredient_name
		FROM Product_Ingredient AS i
		JOIN Product AS p ON p.name = i.product_name
        WHERE p.name = ?;";
    $query = $db->prepare($sql);
    $query->execute([$product]);
    $results = $query->fetchAll(PDO::FETCH_ASSOC);
    
    if (!$results) {
        die('Dit product heeft geen speciaal benoemde ingredienten');
    }

    foreach ($results as $result ) {
        echo" 
        <tr>
        <td>" . htmlspecialchars($result['product']) . "</td>
        <td>" . htmlspecialchars($result["ingredient_name"]) . "</td>
        </tr>";
  }
}

?>