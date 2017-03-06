<?php
session_start();
if (file_exists("./private/user"))
{
	$user = unserialize(file_get_contents("./private/user"));
	$i = -1;
	while (++$i < count($user))
	{
		if ($_POST["submit".$user[$i]["id"]] == "apply")
		{
			$user[$i]["email"] = $_POST["email".$user[$i]["id"]];
			$user[$i]["fname"] = $_POST["fname".$user[$i]["id"]];
			$user[$i]["lname"] = $_POST["lname".$user[$i]["id"]];
			if ($_POST["admin".$user[$i]["id"]] === "admin")
				$user[$i]["admin"] = 1;
			else
				$user[$i]["admin"] = 0;
			if ($_POST["banned".$user[$i]["id"]] === "banned")
				$user[$i]["banned"] = 1;
			else
				$user[$i]["banned"] = 0;
		}
		if ($_POST["delete".$user[$i]["id"]] === "delete")
		{
			unset($user[$i]);
			$user = array_values($user);
		}
	}
	file_put_contents("./private/user", serialize($user));


	// foreach ($tab as $user)
	// {
	// 	echo "<form action='admin.php' method='POST'>";
	// 	echo "<p><input type='number' name=".$user["id"]." value=".$user["id"]." readonly>";
	// 	echo "<input type='email' name='email".$user["id"]."' value=".$user["email"].">";
	// 	echo "<input type='text' name='fname".$user["id"]."' value=".$user["fname"].">";
	// 	echo "<input type='text' name='lname".$user["id"]."' value=".$user["lname"].">";
	// 	echo "<input type='checkbox' name='admin".$user["id"]."'";
	// 	if ($user["admin"])
	// 		echo " checked";
	// 	echo "><input type='submit' name='submit".$user["id"]."' value='apply'></form>";
	// }
}
header("Location: admin.php");
?>