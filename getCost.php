<?php 
    include_once('includes/config.php');
    $districtId = $_POST['districtId'];
    // echo $id; die();
    $sql = "select * from paddyCost where district_id=:districtId";
    $data = [
        'districtId' => $districtId
    ];
    $result = $conn->prepare($sql);
    $result->execute($data);
    $rows = $result->fetch(PDO::FETCH_ASSOC);
    $arr = array();
    array_push($arr,$rows);
    echo json_encode($arr);

?>