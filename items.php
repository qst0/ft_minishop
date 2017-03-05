<div class="items">
<?php
if (!file_exists("./private/item"))
{
	echo "<h2>Error: No Item Data!</h2>";
	exit();
}
else
{
	$items = unserialize(file_get_contents("./private/item"));
			foreach ($items as $item)
			{
				?>
				<div class="item">
					<h2 class="item-header"><?PHP echo $item["name"]; ?></h2>
					<form class="item-container" action="addtocart.php" method="POST">
						<img src="
						<?php if (file_exists($item["path"]))
								echo $item["path"];
							else
								echo "images/metaguy.png";
						 ?>
						 "></img>
						 <input type="hidden" name="item" value="<?php echo $item["name"]; ?>">
				    <p><input type="submit" name="submit" value="Add to cart"></p>
					</form>
				</div>
				<?php
			}
}
?>
</div>
