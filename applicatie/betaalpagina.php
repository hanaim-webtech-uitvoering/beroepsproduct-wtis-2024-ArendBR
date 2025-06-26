 <?php 
 require_once "functions/header.php";
 require_once "functions/sidebar.php";
  require_once "functions/toevoegenwinkelmand.php";
 require_once "functions/updatewinkelmand.php";
 ?>
 <!DOCTYPE html>
<html lang="nl">
<head>
    <<meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <title>Betaalpagina</title>
</head>

<?php
    createHeader();
    createSidebar();
    $totaleprijs = 1;
    ?>
<body>
    <main>
    <div class="betaal-container">
        <h2>Bestelling plaatsen</h2>
        <form action="" method="POST">
            <label>Adres</label>
            <input type="text" name="GeregistreerdAdres"  readonly>

            <label>Tweede lever adres</label>
            <input type="text" name="Adres" >

            <label>Bedrag (€):</label>
            <input type="number" name="bedrag" min="1" readonly value=<?php echo". $totaleprijs . "?>>

            <label>Betaalmethode:</label>
            <select name="methode" required>
                <option value="ideal">iDEAL</option>
                <option value="creditcard">Creditcard</option>
                <option value="paypal">PayPal</option>
            </select>
            <button type="submit" class="betaal-button">Afrekenen</button>
        </form>
    </div>
</main>
<?php
  createFooter();
  ?>
</body>
</html> 