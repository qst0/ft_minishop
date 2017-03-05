<?php
session_start();
include("header.php");
?>
<main class="content">
  <?php
  if($_SESSION["loggued_on_user"] !== "")
  {
    echo '<h1 class="page-title">'.$_SESSION["fname"].' '.$_SESSION["lname"].'</h2>';
  }
  include("items.php");
  include("footer.php");
  ?>
</main>
