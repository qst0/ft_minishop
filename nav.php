<?php
if ($_SESSION["loggued_on_user"] == "")
{ // If there is no user logged in, show these options
?>
<a href="login.php"><li>LOG IN</li></a>
<a href="register.php"><li>REGISTER</li></a>
<?php
}
else
{
  if ($_SESSION["admin"])
  { // For admin users show the admin nav items
?>
    <a href="admin.php"><li>ADMIN</li></a>
    <a href="additem.php"><li>ADD ITEM</li></a>
<?php
  } // Show Logged in global navigation
?>
  <a href="logout.php"><li class="fa fa-sign-out" aria-hidden="true"></li></a>
  <a href="myacc.php"><li class="fa fa-shopping-cart" aria-hidden="true"></li></a>
<?php
}
?>
