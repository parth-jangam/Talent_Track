<?php
    $fullName = $_POST['fullName']
    $empCode = $_POST['empCode']
    $salary = $_POST['salary']
    $city = $_POST['city']

   
    // Database connection
	$conn = new mysqli('localhost','root','','covid');
	if($conn->connect_edrror){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into covid19(fullName, empCode, salary, city) values(?, ?, ?, ?)");
		$stmt->bind_param("sssssi", $fullName, $empCode, $salary, $city);
		$execval = $stmt->execute();
		echo $execval;
		echo "save successfully...";
		$stmt->close();
		$conn->close();
	}
?>