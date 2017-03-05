<?php
session_start();
if (!$_SESSION["admin"])
	header("Location: index.php");
include("header.php");
?>
<main class="content">
<h1>ADMIN</h1>
<?php

if (file_exists("./private/user"))
{
	$tab = unserialize(file_get_contents("./private/user"));



	foreach ($tab as $user)
	{
		echo "<form action='moduser.php' method='POST'>";
		echo "<p><input type='number' name=".$user["id"]." value=".$user["id"]." readonly>";
		echo "<input type='email' name='email".$user["id"]."' value=".$user["email"].">";
		echo "<input type='text' name='fname".$user["id"]."' value=".$user["fname"].">";
		echo "<input type='text' name='lname".$user["id"]."' value=".$user["lname"].">";
		echo "<input type='checkbox' name='admin".$user["id"]."' value='admin'";
		if ($user["admin"])
			echo " checked";
		echo "><input type='submit' name='submit".$user["id"]."' value='apply'></form>";
	}
	// foreach ($tab as $user)
	// {
	// 	if ($_POST["submit".$user["id"]] === "apply")
	// 	{
	// 		$user["email"] = $_POST["email".$user["id"]];
	// 		$user["fname"] = $_POST["fname".$user["id"]];
	// 		$user["lname"] = $_POST["lname".$user["id"]];
	// 		// if (isset($_POST["admin".$user["id"]])
	// 		// 	$user["admin"] = 1;
	// 		// else
	// 		// 	$user["admin"] = 0;
	// 	}
	// }
	// file_put_contents("./private/user", serialize($tab));
}
?>
</main>
<?php include("footer.php"); ?>

