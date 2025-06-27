<?php
 require_once "functions/header.php";
 require_once "functions/createmenu.php";
 require_once "functions/sidebar.php";
 require_once "db_connectie.php"; 
 require_once "functions/toevoegenwinkelmand.php";
 require_once "functions/updatewinkelmand.php";
 require_once "functions/verwijderenwinkelmand.php";
 require_once "functions/tonenwinkelmand.php";
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
    <div class="content-right">
      <h1 class="menu">Menu.</h1>
        <div class=outer-wrapper>
          <div class=table-wrapper>
            <table>
              <th>Gerecht</th>
              <th>Producttype</th>
              <th>Aantal </th>
              <th>Prijs</th>
              <th>Toevoegen aan winkelmand</th> 
              <?php createmenuoverzicht(); ?>
            </table>
          </div>
        </div>

        <h1> Winkelmand </h1>
          <div class=outer-wrapper>
            <div class=table-wrapper>
              <table>
                <th>  Product </th>
                <th>  Producttype </th>
                <th> Aantal </th>
                <th> prijs </th> 
                <th> verwijderen uit winkelmand </th>
                <?php if (isset($_POST["toevoegen"])) { 
                       toevoegenwinkelmand(); 
                      } 
                      if (isset($_POST["update"])) { 
                        updatewinkelmand();   
                      }
                      if (isset($_POST["verwijderen"])) {
                        verwijderenwinkelmand();
                      }
                      if (isset($_POST["betalen"])) {
                        verwijderenwinkelmand();
                      }
                      tonenwinkelmand();
                    ?>
              </table>
            </div>
          </div>
        </div>
    </main>
<?php
  createFooter();
  ?>
</body>
</html>