<?php
session_start();
 require_once 'db_connectie.php';
function createHeader()
{
     if (isset($_SESSION['username'])) {
//   if (isset($_SESSION['username']) && ($_SESSION["role"] == 'personnel')) {
    echo '    
    <nav class="topnav">
    <ul class="flex-menu">
      <li>
        <a href="index.php" class="logo">
          <img src="Pizzalogo.png" alt="" class="logo"/>
        </a>
      </li>  
      <li>
      <li>
        <a href="bestellingoverzicht.php" class="button">bestellingoverzicht</a>
      </li>  
      <li>                  
    <a href="uitloggen.php" class="button">Uitloggen</a>
    </li>
  </ul>
  </nav>';
  } elseif (isset($_SESSION['username'])) {
    echo '    
    <nav class="topnav">
    <ul class="flex-menu">
      <li>
        <a href="index.php" class="logo">
          <img src="Pizzalogo.png" alt="" class="logo"/>
        </a>
      </li>  
      <li>                  
    <a href="uitloggen.php" class="button">Uitloggen</a>
    </li>
  </ul>
  </nav>';
   }  else {
    echo '
  <nav class="topnav">
  <ul class="flex-menu">
    <li>
      <a href="index.php" class="logo">
        <img src="afbeeldingen/Pizzalogo.png" alt="" />
      </a>
    </li>
  <li>
    <a href="loginregistratie.php" class="button">Login</a>
  </li>
</ul>
</nav>';
  }
  ;

}

?>