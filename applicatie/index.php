
<?php
  require_once "functions/header.php";
  require_once "functions/sidebar.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <title>Sole Machina</title>
</head>
<body>
  <main>
    <?php
    createHeader();
    createSidebar();
    ?>
    <div class="content-right">
      <div class="startpaginatext">
        <h1>Welkom bij Sole Machina</h1>
      </div>
    </div>
  </main>
  <?php
  createFooter();
  ?>
</body>
</html>