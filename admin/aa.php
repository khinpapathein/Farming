<?php 
    include_once('../includes/config.php');
    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>User Profile | Registration and Login System</title>
    </head>
    <body>
      
        <?php 
            $sql2 = "select * from paddy";
            $result2 = $conn->prepare($sql2);
            $result2->execute();
            $data2 = $result2->fetchAll(PDO::FETCH_ASSOC);
            $str = array_reverse($data2);
            foreach($str as $row){
                echo $row['name'];
                break;
            }
            // print_r($str);
        ?>
                        
    </body>
</html>
