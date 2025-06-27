<?php 
function createafrekenform() {
$user = $_SESSION['username'];
$db = maakverbinding();

// Totaal berekenen uit winkelmand
    $totaleprijs = 0;
    if (isset($_SESSION['winkelmand'])) {
        foreach ($_SESSION['winkelmand'] as $item) {
            $totaleprijs += $item['prijs'] * $item['aantal'];
        }
    }
// adres ophalen dat gekoppeld is aan de gebruiker    
$sql ="	SELECT username, address
		FROM [User]
		WHERE username = ?;";
$query = $db->prepare($sql);
$query->execute([$user]);
$results = $query->fetch(PDO::FETCH_ASSOC); 

 echo"
    <h2> Bestelling plaatsen</h2>
        <form method='POST'> 
            <label>Adres:</label>
           <p> {$results['address']} </p>

            <label>Bezorgadres (indien Adres niet het bezorgadres is):</label>
            <input type='text' name='bezorgadres'>

            <label>Bedrag (€):</label>
            <p> €{$totaleprijs} </p>
            <input type='hidden' name='totaal' value='{$totaleprijs}'>

            <label>Betaalmethode:</label>
            <select name='methode' required>
                <option value='ideal'>iDEAL</option>
                <option value='creditcard'>Creditcard</option>
                <option value='paypal'>PayPal</option>
            </select>
            <button type='submit' name='afrekenen'class='betaal-button'>Afrekenen</button>
        </form>";
} 
?>