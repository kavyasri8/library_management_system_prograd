<?php
	$username = $_POST['username'];
	$password = $_POST['password'];

	// Database connection
	$conn = new mysqli('localhost','root','','library');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(username,password) values(?, ?)");
		$stmt->bind_param("ss", $username,$password);
		$stmt->execute();
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}

    $name = $_POST['name'];
    $email=$_POST['email'];
    $phoneno=$_POST['phoneno'];
	$review = $_POST['review'];

	// Database connection
	$conn = new mysqli('localhost','root','','library');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(name,email,phoneno,review) values(?,?,?,?)");
		$stmt->bind_param("ssis", $name,$email,$phoneno,$review);
		$stmt->execute();
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>