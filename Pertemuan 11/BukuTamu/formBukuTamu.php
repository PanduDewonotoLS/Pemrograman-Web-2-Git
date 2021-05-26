<html>

	<style type="text/css">

		body{
			background-image: linear-gradient(lightblue,white,lightblue);
		}

		table{
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
			outline: none;
			font-family: times new roman;
			font-size:18px;
			border-color:navy;
			font-weight: bold;
			font-style: italic;
			background: navy;
			color:lightblue;
			width: 100%;
		}

		button:hover{
			color:red;
			transition: 0.5s;
		}

		a{
			margin:auto auto;
			font-style: italic;
			font-weight: bold;
			color:lightblue;
			text-decoration: none;
		}

		a:hover{
			color:red;
			transition: 0.5s;
		}

	</style>

	<body>
		<form action="insertTamu.php" method="post">
			<table border="1" center>
				<th colspan="2" style="font-size: 30px;">Wedding Guest Book</th><tr/>
				<th>Name</th><td><input required type="text" name="name"/></td><tr/>
				<th>Address</th><td><input required type="text" name="address"/></td><tr/>
				<th>Message</th><td><textarea required rows="8" cols="20" name="message"></textarea></td><tr/>
				<th>Action</th>
					<td>
						<button type="submit">Save!</button>
						<button type="reset">Reset!</button></form>
						<button><a href="guestList.php">Open Wedding Guest List!</a></button>
					</td><tr/>
				<th colspan="2" style="color:navy;">Created By Pandu Dewonoto Laut Santoso - 181011400505</th>
			</table>
	</body>
</html>