<?php
 require_once "header.php";
 require_once "functions/createmenu.php";
 require_once "sidebar.php";
 require_once "db_connectie.php";
 //require_once "functions/createwinkelmand.php"; 
 //require_once "functions/toevoegenwinkelmand.php";
 require_once "functions/zoekfunctie.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <title>Pizzeria</title>
</head>

<body>
  <main>

    <?php
    createHeader();
    createSidebar();
    ?>
  <?php  
  //if   
  $db = maakVerbinding(); 
    $sql = "SELECT name, type_id, Pizza_Order_Product.quantity, price
            FROM Product
            INNER JOIN Pizza_Order_Product ON Product.name = Pizza_Order_Product.product_name;";
//$sql = "SELECT * FROM Product, User1, Pizza_Order_Product;";
   // $query = $db->prepare($sql);
   $query = $db -> query($sql);
   // $results = $query->fetchAll(PDO::FETCH_ASSOC);
   $results = $query->fetchAll(PDO::FETCH_ASSOC);
   //if (isset($results)) {
   //  echo "$results[]";
  //}  else{
    
  //  echo "geen resultaat";
   // }
    //$query -> execute();
   //echo $query["price"]; 
  // while ($results = $query->fetchAll(PDO::FETCH_ASSOC)) {
   // echo $results["price"];
  // echo $results["name"], $results["type_id"], $results["quantity"], $results["price"] ;
  //  foreach ($results as $result) {
 ?>
    <div class="content-right">
      <h1 class="menu">Menu.</h1>
       <form action="" method="POST"> 
        <label for="zoek">zoeken:</label><br/>
        <input type="text" placeholder="menu" id="zoek" name="zoek"/>
        <input type="submit"/><br/>
        <?php zoekFunctie(); ?>
 <a href="winkelmand.php"><img src="winkelmand.jpg" alt="winkelmand" width="50" height="60"></a>
        <div class=outer-wrapper>
          <div class=table-wrapper>
            <table>
              <th>Gerecht</th>
              <th>Producttype</th>
              <th>Aantal</th>
              <th>Prijs</th>
              <th>Toevoegen aan winkelmand</th>
<?php createmenuoverzicht(); ?>
            
<tr>  
             <td> <input type='text' name='product' value='<?php $_SESSION["product"] ?>' readonly> </td>
    <!--             <td> <input type='text' name='producttype' value='<?php// $results["type_id"] ?>'> </td> -->
                <td> <input type='number' min='1'  name='quantity' value=1> </td>
        <!--        <td> <input type='text' name='price' value='<?php //$results["price"] ?>'> </td> 
                <td> <input type='submit' name='toevoegen' value=toevoegen> </td> -->
              </tr>

            </table>
          </div>
        </div>
      </form>
    </div>
<?php 
  //  }
  //}
   ?>
  </main>

<?php
  createFooter();
  ?>
</body>

</html>

   <?php

              // createmenuoverzicht();
              ?>
          <!--     <div class="producttype">
           <td> <?php// $results["type_id"] ?>  </td> 
             <td> <?php //$_SESSION["type_id"] ?>  </td> 
              </div> -->
              <!-- <input type='hidden' name='name' value='<?php// require_once "functions/toevoegenwinkelmand.php"; $result["name"];  ?>'> -->

 <!--   <td> <input type='hidden' name='name' value='<?php //$product ?>'> </td> 
               <input type='hidden' name='type_id' value='<?php //$result["type_id"] ?>'>
               <input type='hidden' name='price' value='<?php //$price ?>'> -->

              <!-- <input type='hidden' name='name' value='<?php //$result["name"]; ?>'>
               <input type='hidden' name='type_id' value='<?php //$result["type_id"]; ?>'>
               <input type='hidden' name='price' value='<?php //$result["price"]; ?>'> -->

