<div class="remove-item">
<?php

if ($_GET['item'] != "" && file_exists("./private/item"))
{
  $tab = unserialize(file_get_contents("./private/item"));
  for($i = 0; $i < count($tab); $i++)
  {
    if ($_GET['item'] == $tab[$i]["name"])
    {
      unset($tab[$i]);
    }
  }
  file_put_contents("./private/item", serialize($tab));
}

if (!file_exists("./private/item"))
{
	echo "<h2>No Item Data! <a href='additem.php'>Add items</a></h2>";
	exit();
}
else
{
	$items = unserialize(file_get_contents("./private/item"));
			foreach ($items as $item)
			{
        ?>
        <h2>
          <form action='removeitem.php' method='GET'>
            <?php if (isset($item["name"]))
                    echo $item["name"]; ?>
            <input type='submit' value="remove">
            <input type="hidden" name="item" value="<?php if (isset($item["name"])) echo $item["name"]; ?>">
          </form>
        </h2>
        <?php
			}

}
?>
<h2><a href='additem.php'>Add items</a></h2>
</div>
