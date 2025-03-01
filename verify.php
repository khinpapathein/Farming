<?php 
	session_start();
    include_once('includes/config.php');
    $otpCode = $_POST['otpCode'];
    $phno = $_SESSION['phno'];

    if(strlen($otpCode) == 6){
        $sql = "select * from registration WHERE phno=:phno AND otp=:otp AND otp_expires_at > NOW()";
        $data = [
            'phno' => $phno,
            'otp' => $otpCode
        ];
        $stmt = $conn->prepare($sql);
        $stmt->execute($data);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $count = $stmt->rowCount();
        if ($stmt->rowCount() > 0) {
            $sql1 = "update registration set otp_expires_at = NULL WHERE phno=:phno";
            $data1 = [
                'phno' => $phno
            ];
            $stmt1 = $conn->prepare($sql1);
            $stmt1->execute($data1);
            echo "$count";
            $_SESSION['userId'] = $result['id'];
            $_SESSION['name'] = $result['name'];
            exit();
                    
        }
        else{
            $sql1 = "select * from registration WHERE phno=:phno AND otp=:otp";
            $data1 = [
                'phno' => $phno,
                'otp' => $otpCode
            ];
            $stmt1 = $conn->prepare($sql1);
            $stmt1->execute($data1);
            $count1 = $stmt1->rowCount();
            if($count1 == 0){
                echo "0";
            }
            else{
                echo "2";
            }
        }
    }
    else{
        echo "3";
    }
    
    

?>