<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Shopping Page</title>
</head>

<body>
<?php
	include("MainMenu.php");
?>
<?php
	include("Connect_Database.php");
?>
<?php
	$selectBooks = "select * from books;";
	$results = mysqli_query($connect, $selectBooks);
?>
<nav>
</nav>
	<table align="center" border="2" width=400>
	<tr>
		<th>
			Name
		</th>
		<th>
			Email
		</th>
		<th>
			Title
		</th>
		<th>
			Post Time
		</th>
		<th>
			Picture
		</th>
	</tr>
<?php
while($row = mysqli_fetch_assoc($results))
{
	print "<tr>";
	print "<td>";
	print ($row["name"]);
	print "</td>";
	print "<td>";
	print ($row["email"]);
	print "</td>";
	print "<td>";
	print ($row["title"]);
	print "</td>";
	print "<td>";
	print ($row["posttime"]);
	print "</td>";
	print "<td>";
	print "<img src ='";
	print $row["picpath"] . "' height = 50 width = 50>";
	print "</td>";
	print "</tr>";
}
?>

</table>
</body>
</html>