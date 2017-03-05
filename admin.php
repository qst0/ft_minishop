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
	echo "<form action='admin.php' method='POST'>";
	foreach ($tab as $user)
	{
		echo "<p><input type='number' name='id' value=".$user["id"].">";
		echo "<input type='text' name='fname' value=".$user["fname"].">";
		echo "<input type='text' name='lname' value=".$user["lname"].">";
		echo "<input type='checkbox' name='admin'";
		if ($user["admin"])
			echo " checked";
		echo "><input type='submit' name='submit' value='apply'>";
	}
}
?>
</main>
<?php include("footer.php"); ?>

