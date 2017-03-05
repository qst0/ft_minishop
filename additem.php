<?php
session_start();
if (isset($_POST["submit"]))
{
	if ($_POST["name"] != "" && $_POST["path"] != "" && $_POST["quantity"] != "")
	{
		$item["name"] = $_POST["name"];
    $item["path"] = $_POST["path"];
    $item["quantity"] = $_POST["quantity"];

		if (!file_exists("./private"))
			mkdir("./private");
		if (file_exists("./private/item"))
		{
			$tab = unserialize(file_get_contents("./private/item"));
			foreach ($tab as $val)
			{
				if ($item["name"] === $val["name"])
				{
					header("Location: error.php");
					exit();
				}
			}
		}
		$tab[] = $item;
		file_put_contents("./private/item", serialize($tab));
		header("Location: index.php");
		exit();
	}
	header("Location: error.php");
	exit();
}
include("header.php");
?>
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
<?php include("footer.php"); ?>
