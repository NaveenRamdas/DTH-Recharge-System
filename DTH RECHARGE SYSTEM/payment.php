<?php
	$NameOnCard = $_POST['NameOnCard'];
	$CreditorDebitcardnumber = $_POST['CreditorDebitcardnumber'];
	$ExpMonth= $_POST['ExpMonth'];
	$ExpYear = $_POST['ExpYear'];
    $CVV = $_POST['CVV'];
    
	// Database connection
	$conn = new mysqli('localhost','pay','pays','payment');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into payment(NameOnCard, CreditorDebitcardnumber, ExpMonth, ExpYear, CVV) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("sisii", $NameOnCard, $CreditorDebitcardnumber, $ExpMonth, $ExpYear, $CVV);
		$execval = $stmt->execute();
		echo $execval;
		echo "Your Reacharge Successfully Placed !!!";
		$stmt->close();
		$conn->close();
	}
?>

<html>
    <a href="success.html">Click here to Check Your Recharge Status </a>
</html>