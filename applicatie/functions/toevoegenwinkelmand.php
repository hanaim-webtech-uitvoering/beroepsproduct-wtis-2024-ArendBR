<?php  
//require_once "createmenu.php";
if (isset($_POST["toevoegen"])) {
require_once "../db_connectie.php";
$product = $_POST['name'];
$producttype = $_POST['type_id'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];
    $db = maakVerbinding(); 
    $sql = "SELECT name, type_id, Pizza_Order_Product.quantity, price
            FROM Product
            INNER JOIN Pizza_Order_Product ON Product.name = Pizza_Order_Product.product_name
            WHERE name = '$product';";
    $query = $db->prepare($sql);

    if (mysqli_num_rows($query) > 0) {
      $message[] = 'Product staat al in de winkelmand';
    } else {
      $sql = "INSERT INTO 
              VALUES "
    }
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
   //header("Location: ../winkelmand.php");
}
?>