<?php
session_start();
include("header.php");
?>
<main class="content">
<?php
echo '<h1 class="page-title">Cart</h2>';
if (!file_exists("./private/item"))
{
	echo "<h2>Error: No Item Data!</h2>";
	exit();
}
else
{
	foreach ($_SESSION["cart"] as $item)
	{
		?>
		<div class="item">
			<h2 class="item-header"><?PHP echo $item["name"]; ?></h2>
			<form class="item-container" action="addtocart.php" method="POST">
				<h2 class="item-price">$<?PHP echo $item["price"]; ?></h2>
				<img src="
				<?php if (file_exists($item["path"]))
						echo $item["path"];
					else
						echo "images/metaguy.png";
				 ?>
				 "></img>
				 <p class='item-description'><?PHP echo $item["description"]; ?></p>
				 <input type="hidden" name="item" value="<?php echo $item["name"]; ?>">
			<p><input type="submit" name="submit" value="Add to cart"></p>
			</form>
		</div>
		<?php
	}
}

  include("footer.php");
  ?>
</main>
