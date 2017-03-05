<?php
if (file_exists("./private/item"))
{
	$items = unserialize(file_get_contents("./private/item"));
			foreach ($items as $item)
			{
				echo "<h2>" . $item["name"] . "</h2>";
			}
}
else
{
	header("Location: error.php");
	exit();
}
?>
<!--
<div class="form">
	<h2 class="form-header">New Item</h2>
	<form id="newitem" class="form-container" action="additem.php" method="POST">
		<p><input type="text" placeholder="Name" name="name" value=""></p>
    <p><input type="text" placeholder="picture/path/to/file" name="path" value=""></p>
    <p><input type="number" min="1" max="42" placeholder="quantity in stock" name="quantity" value=""></p>
    <p><textarea cols="55" rows="5" name="description" placeholder="Enter a description here..."></textarea></p>
    <p><input type="submit" name="submit" value="Create"></p>
	</form>
</div>
-->
