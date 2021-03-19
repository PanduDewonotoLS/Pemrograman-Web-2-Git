<?php

	$i = 0;
	echo "This Code Wil Run At Least Once Because I Default Value Is 0.<br><br>";
	do
	{
		echo "i Value Is " . $i . ", So Code Block Will Run.<br>";
		++$i;
	}
	while ( $i <= 10);

	?>