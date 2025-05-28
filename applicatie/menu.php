<?php
// require_once "applicatie/header.php";
 require_once "sidebar.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <title>Airport</title>
</head>

<body>
  <main>

    <?php
  //  createHeader();
    ?>
    <?php
     createSidebar();
    ?>
 
    <div class="content-right">
      <h1 class="menu">Menu.</h1>
      <form action="menu.php" method="GET">
        <label for="zoek">zoeken:</label><br/>
        <input type="text" placeholder="menu" id="zoek" name="zoek"/>
        <input type="submit"/><br/>
        <div class=outer-wrapper>
          <div class=table-wrapper>
            <table>
              <th>Gerecht</th>
              <th>2</th>
              <th>3</th>
              <th>4</th>
              
              <?php
             // createvluchtlijst();
              ?>

            </table>
          </div>
        </div>
      </form>
    </div>
    <a href="winkelmand.php"><img src="winkelmand.jpg" alt="winkelmand" width="50" height="60"></a>
      <?php
     //         createmenu();
              ?>
  </main>

  <footer></footer>
</body>

</html>