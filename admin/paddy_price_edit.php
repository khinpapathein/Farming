<?php 
    session_start();
    include_once('includes/checklogin.php');
    include("../includes/config.php");

    if(isset($_POST['update'])){
        $id=$_GET['edit_pid'];
        $price = $_POST['price'];
        
        $sql3 = "update paddyprice set price=:price where id=:id";
        $data3 = [
            'price' => $price,
            'id' => $id
        ];
        $stmt3=$conn->prepare($sql3);
        $stmt3->execute($data3);
        
        if($stmt3->rowCount() > 0){
            echo "<script>alert('Update successful');</script>";
            echo "<script type='text/javascript'> document.location = 'paddy_price.php'; </script>";
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
                    <div class="container-fluid px-4 my-5">
    <?php 
        $id=$_GET['edit_pid'];
        $query = "select * from paddyprice where id=:id";
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

            
    ?>
                        <div class="card my-5  border-dark">
                            <div class="card-header" style="background-color: #35694a;">
                                <a href="paddy_price.php" class="px-3 pt-2 text-decoration-underline text-white">back</a>
                            </div>
                        
                            <div class="card-body">
                                <form method="post" name="addPost" class="form-horizontal"  enctype="multipart/form-data">
                                    <div class="row form-group py-2 py-md-3">
                                        <label class="col-sm-3 control-label fw-bold text-sm-end "> အမည် : </label>
                                        <div class="col-sm-7">
                                        <input type="text" name="name" id="name" class="form-control" value="<?php echo $data1['name'];?>" readonly>
                                        </div>
                                    </div>
                                    <div class="row form-group py-2 py-md-3">
                                        <label class="col-sm-3 control-label fw-bold text-sm-end"> အမျိုးအစား : </label>
                                        <div class="col-sm-8">
                                            <input type="number" name="price" value="<?php echo $result['price'];?>" placeholder="၁တင်းလျှင် -(ကျပ်)" class="form-control" required>
                                        </div>
                                    </div>                                    
                                    <div class="py-2 py-md-3 justify-content-center d-flex">
                                        <input type="submit" name="update" Value="Update" class="btn btn-success px-3 fw-bold fs-5 ">
                                    </div>
                                    
                                </form>
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
