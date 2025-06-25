<?php  
function toevoegenwinkelmand() {
//if (isset($_POST["toevoegen"])) {
//require_once "../db_connectie.php";
//$product = $_POST['name'];
//$product = $_SESSION["product"];
//session_start();
$product = $_POST['product'];
$producttype = $_POST['producttype'];
$prijs = $_POST['prijs'];
echo " $product, $producttype, $prijs ";

echo"
<tr>
<td>" . $product . "</td>
<td>" . $producttype . "</td>
<td> <input type='number' min='1' name='aantal' value='1'> </td>
<td>" . $prijs ."</td>
</tr> ";
//if ((!empty($product)) && (!empty($producttype)) &&  (!empty($prijs))) {
//header("Location: ../menu.php");
//} else {
//      echo "Toevoegen aan winkelmand mislukt";
//        header("Location: ../menu.php");  

//}
//}

  /*  $db = maakVerbinding(); 
  //  $sql = "SELECT name, type_id, Pizza_Order_Product.quantity, price
 //           FROM Product
 //           INNER JOIN Pizza_Order_Product ON Product.name = Pizza_Order_Product.product_name
 //           WHERE name = '$product';";
 //   $query = $db->prepare($sql);
 //   $results = $query->fetchAll(PDO::FETCH_ASSOC);

    if ($quantity > 0) {
    //if (mysqli_num_rows($query) > 0) {
   //   $message[] = 'Product staat al in de winkelmand';
   // } else {
      $sql2 = "SELECT max(order_id)
                FROM Pizza_Order_Product;";
      $query2 = $db->prepare($sql2);
  $results2 = $query2->fetchAll(PDO::FETCH_ASSOC);
    $order_id = array_sum($results2);
     // $order_id = rand(1,1000000);


     $sql3 = "INSERT INTO Pizza_Order_Product
             VALUES ($order_id, $product, $quantity);";
     $query3 = $db->prepare($sql3);
        $query3->execute(
        [ 
            $order_id,
            $product,
            $quantity
    ]
    );
     $sql = "SELECT name, type_id, Pizza_Order_Product.quantity, price
           FROM Product
          INNER JOIN Pizza_Order_Product ON Product.name = Pizza_Order_Product.product_name
           WHERE name = '$product';";
   $query = $db->prepare($sql);
    $results = $query->fetchAll(PDO::FETCH_ASSOC);

    foreach ($results as $result ) {
      echo" <tr>";
        echo" <td>" . $result["name"] . "</td>";
        echo" <td>" . $result["type_id"] . "</td>";
        echo" <td>" . $result["quantity"] . "</td>";
        echo" <td>" . $result["price"] . "</td>";
        echo" <td>";
        echo "<input type='submit' name='verwijderen' value='verwijderen'>";
        echo" </td>";     
        echo" <td>";
        echo "<input type='submit' name='aanpassen' value='aanpassen'>";
        echo" </td>";
        echo" </tr>";
     }
     session_start();
     //$_SESSION["product"] = $product;
     $_SESSION["product"] = $result["name"];
     echo " <p> ".  $_SESSION["product"] . "</P> ";
     header("Location: ../winkelmand.php");
    }
   // echo $query;
    //$row = $query -> fetch_assoc();
    //$row = mysqli_fetch_assoc($query);
    //printf ("%s %s %s %s", $row["order_id"], $row["product_name"], $row["quantity"], $row["price"]);
   // $query -> free_result();
    /* require_once "../db_connectie.php";
    $db = maakVerbinding(); 
    $sql = "INSERT INTO Product (name, price, type_id) 
    VALUES (?, ?, ?)";
    $query = $db->prepare($sql);

    $query->execute(
        [ 
            ($_POST['name']),
            ($_POST['price']),
            ($_POST['type_id'])
    ]
    ); 
   header("Location: ../winkelmand.php"); */
   //header("Location: ../winkelmand.php"); */
}
?>