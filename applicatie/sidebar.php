<?php
function createSidebar()
 // {
 /* if (isset($_SESSION['naam']))  */{
    echo '
<div class="nav-left" id="sidebar">
      <ul>
        <li class="knop"><a href="index.php">Home</a></li>

        <li class="knop">
          <a href="menu.php">menu</a>
        </li>

        <li class="knop">
        <a href="loginregistratie.php">profiel</a>
      </li>
      </ul>
    </div>
';
  } /* elseif (isset($_SESSION['balienummer'])) {
    echo '
      <div class="nav-left" id="sidebar">
            <ul>
              <li class="knop"><a href="index.php">Home</a></li>

              <li class="knop">
              <a href="winkelmand.php">winkelmand</a>
            </li>

              <li class="knop">
                <a href="menu.php">menu</a>
              </li>
      
              <li class="knop">
                <a href="passagierInformatie.php">passagiersinformatie</a>
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
} */


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

