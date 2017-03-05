<?php
session_start();
function auth($email, $passwd)
{
	if (file_exists("./private/user"))
	{
		$passwd = hash("whirlpool", $passwd);
		$tab = unserialize(file_get_contents("./private/user"));
		foreach ($tab as $user)
			if ($email === $user["email"] && $passwd === $user["passwd"])
				return (TRUE);
	}
	return (FALSE);
}

if (isset($_GET["submit"]))
{
	if ($_GET["email"] != "" && $_GET["passwd"] != "")
	{
		$_SESSION["loggued_on_user"] = "";
		if (auth($_GET["email"], $_GET["passwd"]))
		{
			$_SESSION["loggued_on_user"] = $_GET["email"];
			header("Location: index.php");
			exit();
		}
	}
	header("Location: error.php");
	exit();
}


include("header.php");
?>
<div class="login">
	<div class="login-triangle"></div>
	<h2 class="login-header">Log in</h2>
	<form class="login-container" action="login.php" method="GET">
		<p><input type="email" placeholder="Email" name="email" value=""></p>
		<p><input type="password" placeholder="Password" name="passwd" value=""></p>
		<p><input type="submit" name="submit" value="log in"></p>
	</form>
</div>
<?php include("footer.php"); ?>