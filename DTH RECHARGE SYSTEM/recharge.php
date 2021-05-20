<?php
	$RegisterPhoneNumber = $_POST['RegisterPhoneNumber'];
	$SelectOperator = $_POST['SelectOperator'];
	$SelectState= $_POST['SelectState'];
	$SmartCardNumber = $_POST['SmartCardNumber'];
    $EnterAmount = $_POST['EnterAmount'];
    
	// Database connection
	$conn = new mysqli('localhost','customer_details','customer_details','customer_details');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into customer_details(RegisterPhoneNumber, SelectOperator, SelectState, SmartCardNumber, EnterAmount) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("issii", $RegisterPhoneNumber, $SelectOperator, $SelectState, $SmartCardNumber, $EnterAmount);
		$execval = $stmt->execute();
		echo $execval;
		echo "Payment get way";
		$stmt->close();
		$conn->close();
	}
?>

<html>
    <a href="payment.html">Click me to redirect </a>
</html>