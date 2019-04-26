<?php

	include "mysqlconnect.php";

	$input1 = $_POST['Username'];
	$input2 = $_POST['Password'];
	$input3 = $_POST['Email'];
	$input4 = $_POST['Fullname'];
	$input5 = $_POST['Mobile'];

	$query1 = "SELECT * FROM demo WHERE username='".$input1."' or  email ='".$input3."' ";
	$task1 = mysqli_query($conn, $query1);

	if(mysqli_num_rows($task1) > 0){
	echo "<h1>Usermame or Email is already exists.</h1>";
	echo "<a href='index.php'><h1>Home</h1></a>";
	}else{

	$task = "INSERT INTO demo(USERNAME,password,email,full_name,mob_num) VALUES('".$input1. "', '".$input2."', '".$input3."', '".$input4."', '".$input5."')";
	$result = mysqli_query($conn, $task);
	
	if (mysqli_query($conn,$result)) {
		echo "<h1>Details Has Been Inserted...... </h1>";
		echo "<a href='index.php'><h1>Home</h1></a>";
	}else{
		echo "Error: " . $task . "<br>" . mysqli_error($conn);
	}
	
	

}
mysqli_close($conn);
?>