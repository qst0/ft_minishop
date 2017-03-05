<?php
session_start();
include("header.php");
?>
<div class="login">
	<div class="login-triangle"></div>
	<h2 class="login-header">CREATE ACCOUNT</h2>
	<form class="login-container">
		<p><input type="text" placeholder="First Name"></p>
		<p><input type="text" placeholder="Last Name"></p>
		<p><input type="email" placeholder="Email"></p>
		<p><input type="password" placeholder="Password"></p>
		<p><input type="submit" value="CREATE AN ACCOUNT"></p>
	</form>
</div>
<?php include("footer.php"); ?>
