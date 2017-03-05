<?php
session_start();
include("header.php");
?>
<div class="login">
	<div class="login-triangle"></div>
	<h2 class="login-header">Log in</h2>
	<form class="login-container">
		<p><input type="email" placeholder="Email"></p>
		<p><input type="password" placeholder="Password"></p>
		<p><input type="submit" value="LOG IN"></p>
	</form>
</div>
<?php include("footer.php"); ?>