<html>
<head></head>

<body>

<table>
	<tr><td>Title</td><td>Category</td><td>Price</td></tr>
	<?php 

		foreach ($menus as $title => $menu)
		{
			echo '<tr><td><a href="index.php?menu='.$menu->title.'">'.$menu->title.'</a></td><td>'.$menu->author.'</td><td>'.$menu->description.'</td></tr>';
		}

	?>
</table>

</body>
</html>