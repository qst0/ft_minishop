<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Store</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header class="main-header">
<a href="index.php"><h1>Store</h1></a>
<nav>
<ul>
<?php
	if ($_SESSION["loggued_on_user"] == "")
	{
		echo '<a href="login.php"><li>LOG IN</li></a>';
		echo '<a href="register.php"><li>REGISTER</li></a>';
	}
	else
	{
		if ($_SESSION["admin"])
		{
			echo '<a href="admin.php"><li>ADMIN</li></a>';
			echo '<a href="additem.php"><li>ADD ITEM</li></a>';
		}
		echo '<a href="logout.php"><li>LOG OUT</li></a>';
		echo '<a href="myacc.php"><li>MY ACCOUNT</li></a>';
	}
?>
</ul>
</nav>
</header>