<?php
//require_once "../db_connectie.php";
// require_once "createmenu.php";
require_once "toevoegenwinkelmand.php";
/* function createwinkelmand() {
    $db = maakverbinding();

    $sql = "SELECT u.usernam, o.address, p.name, p.price, p.type_id
    FROM Product AS p, Pizza_Order AS o
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
//} */

 function createwinkelmand() {
    $product = $_SESSION["product"];
    echo "$product";
 //  $product = $_POST['name'];
//$producttype = $_POST['type_id'];
//$quantity = $_POST['quantity'];
//$price = $_POST['price'];
    $db = maakVerbinding(); 
    $sql = "SELECT name, type_id, Pizza_Order_Product.quantity, price
            FROM Product
            INNER JOIN Pizza_Order_Product ON Product.name = Pizza_Order_Product.product_name;";
     //       WHERE name = '$product';";
    $query = $db->prepare($sql);
    $results = $query->fetchAll(PDO::FETCH_ASSOC);
    

  //  if (!$results) {
  //      die('Invalid query' . $db->error);
    //}

    foreach ($results as $result ) {
        echo" <tr>";
        echo" <td>" . $result["name"] . "</td>";
        echo" <td>" . $result["type_id"] . "</td>";
        echo" <td>" . $result["quantity"] . "</td>";
        echo" <td>" . $result["price"] . "</td>";
    //    echo "$product";
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
