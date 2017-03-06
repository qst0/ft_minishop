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
		echo "><input type='checkbox' name='banned".$user["id"]."' value='banned'";
		if ($user["banned"])
			echo " checked";
		echo "><input type='submit' name='submit".$user["id"]."' value='apply'>";
		echo "<input type='submit' name='delete".$user["id"]."' value='delete'></form>";
	}
	foreach ($tab as $user)
	{
		if ($user["orders"])
		{
			?>
			<h2>User <?php echo $user["email"]?> orders</h2>
			<?php
			foreach ($user["orders"] as $order) {
				?>
				<form action="delorder.php" method="post">
				<table>
				<tr>
					<th scope="col">Product</th>
					<th scope="col">Quantity</th>
					<th scope="col">Price</th>
				</tr>
				<?php
				foreach ($order as $item) {
					if ($item["name"])
					{
					?>
					<tr>
						<td><?PHP echo $item["name"]; ?></td>
						<td><input type="text" value="1" class="qty" /></td>
						<td><?PHP echo $item["price"]; ?> USD</td>
					</tr>
					<?php
					}
				}
				?>
				<tr><th>Subtotal: <?php echo $order["subtotal"]." USD"; ?></th><?php  ?></tr>
				</table>
				<!-- <input type="submit" value="delete" name="delete" /> -->
				</form>
				<?php
			}
		}
	}
}
?>


</main>
<?php include("footer.php"); ?>

