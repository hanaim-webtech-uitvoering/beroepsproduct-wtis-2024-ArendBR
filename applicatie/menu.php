<?php
 require_once "header.php";
 require_once "functions/createmenu.php";
 require_once "sidebar.php";
 require_once "functions/createwinkelmand.php"; 
 require_once "functions/toevoegenwinkelmand.php";
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
    ?>
    <?php
     createSidebar();
    ?>
 
    <div class="content-right">
      <h1 class="menu">Menu.</h1>
       <form action="functions/toevoegenwinkelmand.php" method="POST"> 
        <label for="zoek">zoeken:</label><br/>
        <input type="text" placeholder="menu" id="zoek" name="zoek"/>
        <input type="submit"/><br/>
 <a href="winkelmand.php"><img src="winkelmand.jpg" alt="winkelmand" width="50" height="60"></a>
        <div class=outer-wrapper>
          <div class=table-wrapper>
            <table>
              <th>Gerecht</th>
              <th>Producttype</th>
              <th>Aantal</th>
              <th>Prijs</th>
              <th>Toevoegen aan winkelmand</th>
              <?php
              createmenuoverzicht();
              ?>
              <!-- <input type='hidden' name='name' value='<?php// require_once "functions/toevoegenwinkelmand.php"; $result["name"];  ?>'> -->

                <td> <input type='text' name='name' value='<?php $product ?>'> </td> 
               <input type='hidden' name='type_id' value='<?php $producttype ?>'>
               <input type='hidden' name='price' value='<?php $price ?>'>

              <!-- <input type='hidden' name='name' value='<?php //$result["name"]; ?>'>
               <input type='hidden' name='type_id' value='<?php //$result["type_id"]; ?>'>
               <input type='hidden' name='price' value='<?php //$result["price"]; ?>'> -->
            </table>
          </div>
        </div>
      </form>
    </div>

  </main>

<?php
  createFooter();
  ?>
</body>

</html>