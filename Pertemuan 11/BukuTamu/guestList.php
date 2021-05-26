<?php

	include "koneksiBukuTamu.php";

	?>

<html>

	<style type="text/css">

		body{
			background-image: linear-gradient(lightblue,white,lightblue);
		}

		table{
			text-align: center;
			border:5px dotted navy;
			font-style: italic;
			background: lightblue;
			color:navy;
			margin:0 auto;
			width: 100%;
		}

		input{
			width: 100%;
		}

		textarea{
			width: 100%;
		}

		button{
			font-size:18px;
			font-weight: bold;
			font-style: italic;
			width: 100%;
			background: navy;
			color:lightblue;
		}

		button:hover{
			color:red;
			transition: 0.5s;
		}

		a{
			font-size:18px;
			color:lightblue;
			font-style: italic;
			font-weight: bold;
			text-decoration: none;
		}

		a:hover{
			color:red;
			transition: 0.5s;
		}

	</style>

	<body>
		<form action="" method="post">
			<table border="1" center>
				<thead>

						<?php
							$result = mysqli_query($link, "SELECT * FROM table_bukutamu");
							$count = mysqli_num_rows($result);
						?>

					<th colspan="5" style="font-size: 30px;">Wedding Guest Book</th><tr/>
					<th colspan="5" style="font-size:20px;">Total Tamu : <?php echo $count?></th><tr/>
					<th>No.</th>
					<th>Name</th>
					<th>Address</th>
					<th>Message</th>
					<th>Date & Time</th>
				</thead>
				<?php
					@$addOffset = $_POST['addOffset'];
					$offset = 0;
					$totalOffset = $offset + $addOffset;
					$nmr=1;
					$select = "SELECT * FROM table_bukutamu LIMIT $totalOffset,5";
		            $getData = mysqli_query($link,$select); /* Mengambil Data Dari Database Menggunakan PHP */
		            while($a = mysqli_fetch_array($getData))
	              	{
				?>
				<tbody>
					<td><?php echo $nmr?></td>
					<td><?php echo $a['name'];?></td>
					<td><?php echo $a['address'];?></td>
					<td><textarea disabled rows="8" cols="20" name="message"><?php echo $a['message'];?></textarea></td>
					<td><?php echo $a['waktu'];?></td>
				</tbody>
				<?php
					$nmr++;
					}
					?>
					<th colspan="5"><button><input name="addOffset" type="hidden" value="5"/>Next Page</button></th><tr/>
					<th colspan="5" style="background: navy;"><a href="formBukuTamu.php">Fill Wedding Guest Book!</a></th><tr/>
					<th colspan="5" style="color:navy;">Created By Pandu Dewonoto Laut Santoso - 181011400505</th>
			</table>
		</form>
	</body>
</html>