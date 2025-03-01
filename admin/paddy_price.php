<?php 
    session_start();
    include_once('includes/checklogin.php');
    include_once('../includes/config.php');
    
    // Delete
    if(isset($_GET['pid'])){
        $id= $_GET['pid'];
        $sql = "delete from paddyprice where id=:id";
        $data = [
            'id' => $id
        ];
        $result = $conn->prepare($sql);
        $result->execute($data);
        $count = $result->rowCount();
        if($count > 0){
            echo "<script>alert('Deleted successful');</script>";
        }
    }
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
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Paddy Price</h1>
                        <div class="d-flex justify-content-end mb-3 mx-3">
                            <button class="btn btn-success fw-bold py-2" type="button">
                                <a href="add_paddy_price.php" class="text-decoration-none text-white">Add</a>
                            </button>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Price' Details
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple" class="table-hover">
                                    <thead>
                                        <tr>
                                            <th>စဉ်</th>
                                            <th>အမျိုးအမည်</th>
                                            <th>ယူနစ်</th>
                                            <th>ပေါက်ဈေး</th>
                                            <th>ရက်စွဲ</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                        <?php 
                            $sql = "select * from paddy";
                            $result = $conn->prepare($sql);
                            $result->execute();
                            $data = $result->fetchAll(PDO::FETCH_ASSOC);
                            $count = 1;
                            foreach ($data as $row){

                                // for paddy price
                                $pid = $row['id'];
                                $sql2 = "select * from paddyprice where paddy_id=:pid";
                                $inputData = [
                                    'pid' => $pid
                                ];
                                $result2 = $conn->prepare($sql2);
                                $result2->execute($inputData);
                                $data2 = $result2->fetchAll(PDO::FETCH_ASSOC);
                                $revArray = array_reverse($data2);
                                foreach($revArray as $output){
                        ?>
                                <tr>
                                    <td><?php echo $count++;?></td>
                                    <td class="text-break"><?php echo $row['name'];?></td>
                                    <td class="text-break">တင်းတစ်ရာ</td>
                                    <td class="text-break"><?php echo $output['price'];?> ကျပ်</td>
                                    <td class="text-break"><?php echo $output['ddate'];?></td>

                                    <td>
                                        <a href="paddy_price_detail.php?id=<?php echo $output['id'];?>" class="px-1 text-decoration-none">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="paddy_price.php?pid=<?php echo $output['id'];?>" onClick="return confirm('Are you sure to delete');">
                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                        </a>
                                    </td>
                                </tr>
                                
                        <?php
                                break;
                                }            
                            }
                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>