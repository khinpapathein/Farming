<?php 
    session_start();
    include_once('includes/checklogin.php');
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
        <title>Ayeyar Farmer Hub || Admin</title>
            
        <!-- Favicon -->
        <link rel="icon" type="image/x-icon" href="../img/title_logo.png">

        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
      <?php include_once('includes/navbar.php');?>
        <div id="layoutSidenav">
          <?php include_once('includes/sidebar.php');?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4 my-5">
    <?php 
        $id=$_GET['typeid'];
        $query = "select * from paddy_type where id=:id";
        $data = [
            'id' => $id
        ];
        $stmt = $conn->prepare($query);
        $stmt->execute($data);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        // for paddy name
        $pid = $result['paddy_id'];
        $sql1 = "select * from paddy where id=:pid";
        $inputData1 = [
            'pid' => $pid
        ];
        $result1 = $conn->prepare($sql1);
        $result1->execute($inputData1);
        $data1 = $result1->fetch(PDO::FETCH_ASSOC);

        // for paddy type name
        $typeid = $result['type_id'];
        $sql2 = "select * from type where id=:typeid";
        $inputData2 = [
            'typeid' => $typeid
        ];
        $result2 = $conn->prepare($sql2);
        $result2->execute($inputData2);
        $data2 = $result2->fetch(PDO::FETCH_ASSOC);
    ?>
                        <div class="card my-5 border-dark">
                            <div class="card-header" style="background-color: #35694a;">
                                <a href="paddy_types.php" class="px-3 pt-2 text-decoration-underline text-white">back</a>
                                <a href="paddy_type_edit.php?edit_tid=<?php echo $result['id'];?>" class="px-3 pt-2 text-white">Edit</a>
                            </div>
                        
                            <div class="card-body">
                                <table class="table table-bordered">
                                   <tr>
                                        <th class="p-4" style="width : 200px;">အမည်</th>
                                       <td class="p-4"><?php echo $data1['name'];?></td>
                                   </tr>
                                   
                                   <tr>
                                       <th class="p-4" style="width : 200px;">အမျိုးအစား</th>
                                       <td class="p-4" colspan="3"><?php echo $data2['name'];?></td>
                                   </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
