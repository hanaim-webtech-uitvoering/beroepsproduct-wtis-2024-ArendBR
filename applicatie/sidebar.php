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
        <a href="profiel.php">profiel</a>
      </li>
      
        <li class="knop">
          <a href="privacyverklaring.php">privacyverklaring</a>
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
      
              <li class="knop">
                <a href="privacyVerklaring.php">privacyverklaring</a>
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
      <li class="knop">
      <a href="privacyVerklaring.php">privacyverklaring</a>
    </li>
  </ul>
</div>
      ';
  } 
} */
?>