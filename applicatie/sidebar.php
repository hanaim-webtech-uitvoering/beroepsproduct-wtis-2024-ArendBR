<?php
 require_once 'db_connectie.php';
function createSidebar() {
 // echo'<h1>' . $_SESSION["username"]. '</h1>';
 // echo'<h1>' . $_SESSION["role"]. '</h1>';
 // $role = $_SESSION['role'];
//echo' . $_SESSION['role'] .';
//echo' . $_SESSION['username'] .';
// echo'<h1>' . $_SESSION["role"]. '</h1>';
 //echo'<h1>' . $_SESSION["username"]. '</h1>';
//echo' $role';
/*  if (isset($_SESSION['username']))  {
    echo '
<div class="nav-left" id="sidebar">
      <ul>
        <li class="knop"><a href="index.php">Home</a></li>

        <li class="knop">
          <a href="menu.php">menu</a>
        </li>

        <li class="knop">
        <a href="profiel.php">profiel</a>
      </li>
      </ul>
    </div>
';
  } */
 //(isset($_SESSION['username']) &&
/* if  ($role === 'admin')  {
    echo '
<div class="nav-left" id="sidebar">
      <ul>
        <li class="knop"><a href="index.php">Home</a></li>

        <li class="knop">
          <a href="menu.php">menu</a>
        </li>

        <li class="knop">
        <a href="profiel.php">profiel</a>
      </li>
      <li class="knop">
        <a href="adminpagina.php">admin pagina</a>
      </li>
      </ul>
    </div>
';
} */ 
// else  
if (isset($_SESSION['username']))  {
    echo '
<div class="nav-left" id="sidebar">
      <ul>
        <li class="knop"><a href="index.php">Home</a></li>

        <li class="knop">
          <a href="menu.php">menu</a>
        </li>

        <li class="knop">
        <a href="profiel.php">profiel</a>
      </li>
      </ul>
    </div>
';
  } else {
    echo '
    <div class="nav-left" id="sidebar">
      <ul>
      <li class="knop"><a href="index.php">Home</a></li>

      <li class="knop">
      <a href="Menu.php">Menu</a>
    </li>
  </ul>
</div>
      ';
  } 
} 


function createFooter() {
  echo '
  <footer>
    <div class="footer">
      <li class="knop">
        <a href="privacyverklaring.php">privacyverklaring</a>
      </li>
    </div>
  </footer>
';
}
?>

