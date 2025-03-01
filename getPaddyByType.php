<?php 
    include_once('includes/config.php');
    $typeid = $_POST['typeid'];
    // echo $id; die();
    $sql = "select * from paddy_type where type_id=:typeid";
    $data = [
        'typeid' => $typeid
    ];
    $result = $conn->prepare($sql);
    $result->execute($data);
    $rows = $result->fetchAll(PDO::FETCH_ASSOC);
    $arr = array();
    foreach($rows as $row){
        $sql1 = "select * from paddy where id=:id";
        $data1 = [
            'id' => $row['paddy_id'],
        ];
        $result1 = $conn->prepare($sql1);
        $result1->execute($data1);
        $rows1 = $result1->fetch(PDO::FETCH_ASSOC);
        array_push($arr,$rows1);
    }
    echo json_encode($arr);

?>