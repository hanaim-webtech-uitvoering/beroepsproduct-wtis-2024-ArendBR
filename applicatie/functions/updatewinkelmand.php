<?php
function updatewinkelmand() {
$product = $_POST['product'];
$producttype = $_POST['producttype'];
$aantal = $_POST['aantal'];
$prijs = $_POST['prijs'];
$totaleprijs = $prijs * $aantal;
echo " $product, $producttype, $aantal, $prijs, $totaleprijs ";

echo"
<tr>
<td>" . $product . "</td>
<td>" . $producttype . "</td>
<td> <input type='number' min='1' name='aantal' value='$aantal'><input type='submit' name='update' value='update'> </td>
<td>" . $prijs ."</td>
<td> <input type='submit' name='verwijderen' value='verwijderen'> </td>
</tr>
<tr>
<td> <a href='betaalpagina.php' class='button'><input type='submit' name='betalen' value='betalen'> </a> </td>
<td> totaal $" . $totaleprijs . " </td>
</tr>
";
}
?>