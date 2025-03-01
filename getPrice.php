

<?php
	require_once("includes/config.php");
	session_start();

	// For paddy price
	if(!empty($_POST["pid"])){
		$pid= $_POST["pid"];
		$sql ="select * from paddyprice where paddy_id=:pid";
		$data =[
			'pid' => $pid
		];
		$statement = $conn->prepare($sql);
		$statement->execute($data);
		$result = $statement->fetchAll(PDO::FETCH_ASSOC);
		$arr = array_reverse($result);
		foreach($arr as $row){
			echo $row['price'];
			break;
		}
	}	

	// For bean price
	if(!empty($_POST["bid"])){
		$bid= $_POST["bid"];
		$sql ="select * from bean_price where bean_id=:bid";
		$data =[
			'bid' => $bid
		];
		$statement = $conn->prepare($sql);
		$statement->execute($data);
		$result = $statement->fetchAll(PDO::FETCH_ASSOC);
		$arr = array_reverse($result);
		foreach($arr as $row){
			echo $row['price'];
			break;
		}
	}	

	
?>