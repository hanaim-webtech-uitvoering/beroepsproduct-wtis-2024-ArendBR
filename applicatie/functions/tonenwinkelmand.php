<?php
function tonenwinkelmand() {
    if (isset($_SESSION['username'])) {
       
        // Check of winkelmand bestaat en een array is
    if (!isset($_SESSION['winkelmand']) || !is_array($_SESSION['winkelmand']) || count($_SESSION['winkelmand']) === 0) {
        echo "<tr><td colspan='6'>Je winkelmand is leeg.</td></tr>";
        return;
    }

    $totaal = 0;
    foreach ($_SESSION['winkelmand'] as $winkelmand => $item) {
        $subtotaal = $item['prijs'] * $item['aantal'];
        $totaal += $subtotaal;

        echo "<tr>
            <td>{$item['product']}</td>
            <td>{$item['producttype']}</td>
            <td>
                <form method='POST'>
                    <input type='number' name='aantal' value='{$item['aantal']}' min='1'>
                    <input type='hidden' name='winkelmand' value='{$winkelmand}'>
                    <input type='submit' name='update' value='Update'>
                </form>
            </td>
            <td>€ {$subtotaal}</td>
            <td>
                <form method='POST'>
                    <input type='hidden' name='winkelmand' value='{$winkelmand}'>
                    <input type='submit' name='verwijderen' value='Verwijderen'>
                </form>
            </td>
           
        </tr>";
    }
    echo "<tr><td><strong>Totaal: € $totaal</strong></td>
     <td>
                <form action='../betaalpagina.php' method='POST'>
                    <input type='hidden' name='totaal' value='{$totaal}'>
                    <input type='submit' name='betalen' value='Betalen'>
                </form>
            </td>
            </tr>";
} else 
echo' U moet ingelogd zijn om bij de inhoud van de winkelmand te kunnen komen';
}
?>