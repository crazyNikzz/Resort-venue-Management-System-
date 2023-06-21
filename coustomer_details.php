<?php
include "db.php";
include "home3.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Page</title>
	<style type="text/css">
		body {
            background-color: brown;
        }

		table {
			border-collapse: collapse;
			width: 100%;
		}
		th, td {
			text-align: left;
			padding: 8px;
			border-bottom: 1px solid #ddd;
		}
		th {
			background-color: #333;
			color: white;
		}
		tr:hover {
			background-color: #f5f5f5;
		}
	</style>
</head>
<body>
	<h1>User Details</h1>
	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Email</th>
				<!-- <th>Password</th> -->
				<th>Mobile</th>
			</tr>
		</thead>
		<tbody>
			<?php
			include "db.php";
			$q = "SELECT * FROM user1";
			$result = $mysqli->query($q);
			if($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					echo "<tr>";
					echo "<td>".$row["id"]."</td>";
					echo "<td>".$row["name"]."</td>";
					echo "<td>".$row["email"]."</td>";
					// echo "<td>".$row["password"]."</td>";
					echo "<td>".$row["mobile"]."</td>";
					echo "</tr>";
				}
			}
			?>
		</tbody>
	</table>
</body>
</html>
