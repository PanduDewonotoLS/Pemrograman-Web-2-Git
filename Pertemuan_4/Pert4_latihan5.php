<?php

	$brush_price = 5;
	$counter = 10;

	echo "<table border=\"1\"align=\"center\">";
	echo "<tr><th>Quantity</th>";
	echo "<th>Price</th></tr>";
	while ($counter <= 100)
	{
		$hasil = $counter * $brush_price;
		echo "<tr><td>$counter</td><td>$hasil</td></tr>";
		$counter = $counter + 10;
	}
	echo "</table>";

	?>