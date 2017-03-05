<?php
session_start();
include("header.php");
?>
<main class="content">
<?php
echo '<h2>'.$_SESSION["fname"].' '.$_SESSION["lname"].'</h2>';
?>
</main>
<?php include("footer.php"); ?>
