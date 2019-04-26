<?php

	include 'mysqlconnect.php';

	
?>
    
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Admin</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	</head>
	<body>
		<div class="container">
			<h2>Admin Panel</h2>
			<ul class="nav nav-tabs">
				<li><a data-toggle="tab" href="#product">Menu 1</a></li>

			</ul>

		</div>
		<div class="container" > 
			<div class="tab-content">
				
				<div id="product" class="tab-pane fade">	

					<table class="table table-border table-hover">
						<thead>
							<tr>
								<th>id</th>
								<th>username</th>
								<th>email</th>
								<th>full_name</th>
								<th>mob_num</th>
								<th>Delete <a href="deleteall.php" onClick="return confirm('Are you sure you want to delete All Details?')" > |  Delete ALL</a></th>

							</tr>
						</thead>

						<?php
							$sql = "SELECT * FROM demo";
							

							if($result = mysqli_query($conn, $sql)){
								if(mysqli_num_rows($result) > 0){
									while($row = mysqli_fetch_array($result)){
											echo "<tr>";
											echo "<td>" . $row['id'] . "</td>";
											echo "<td>" . $row['username'] . "</td>";
											echo "<td>" . $row['email'] . "</td>";
											echo "<td>" . $row['full_name'] . "</td>";
											echo "<td>" . $row['mob_num'] . "</td>";
											echo "<td><a href=\"edit.php?id=$row[id]\">Edit</a> | <a href=\"delete.php?id=$row[id]\" onClick=\"return confirm('Are you sure you want to delete?')\" >Delete</a></td>";
											echo "</tr>";
											$data[] = $row;
										}


										echo "</table>";
										mysqli_free_result($result);
									} else{
								}
							} else{
							echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
							} 
						?>	
					</table>
				</div>
		         <div id="menu2" class="tab-pane fade">

				</div>
	        </div>
        </div>
        <script type="text/javascript" src="script.js"></script>
	</body>
</html>

