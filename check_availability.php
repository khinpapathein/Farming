<?php 
	session_start();
	require_once("includes/config.php");
	// For Phone Number
	if(!empty($_POST["phno"])){
		// echo "Hello";
		$phno= $_POST["phno"];
		$sql ="select * from registration where phno=:phno";
		$data =[
			'phno' => $phno
		];
		$statement = $conn->prepare($sql);
		$statement->execute($data);

		// $result = $statement->fetchAll(PDO::FETCH_ASSOC);
		$count = $statement->rowCount();
		if($count>0){
			echo "<span style='color:red'> Phone number already exist. Please try again.</span>";
		}
	}	

	// Code for Request of OTP
	if(!empty($_POST["phnoForOtp"])){
		$phno= $_POST["phnoForOtp"];
		$sql ="SELECT * FROM registration WHERE phno=:phno";
		$statement = $conn->prepare($sql);
		$data =[
			'phno' => $phno
		];
		$statement->execute($data);
		$result = $statement->fetch(PDO::FETCH_ASSOC);
		
		$count = $statement->rowCount();
		if($count > 0){
			$otp = sprintf('%06d', mt_rand(0, 999999));
			$sql = "update registration set otp = :otp, otp_expires_at = DATE_ADD(NOW(), INTERVAL 1 MINUTE) WHERE phno=:phno";
			$data =[
				'otp' => $otp,
				'phno' => $phno
			];
			$stmt = $conn->prepare($sql);
    		$stmt->execute($data);

			echo "Your otp is <span style='color: red;'>$otp</span>";
			$_SESSION['phno'] = $phno;
		}
		else{
			echo "<span style='color:red;'> Invalid Phone Number !!!</span>";
		}
	}	

?>