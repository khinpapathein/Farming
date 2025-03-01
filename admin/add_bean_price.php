<?php 
    session_start();
    include_once('includes/checklogin.php');
    include("../includes/config.php");

    if(isset($_POST['add'])){
        $id = $_POST['bean'];
        $price = $_POST['price'];        
        
        $sql = "insert into bean_price(bean_id, price) values (:bean_id, :price)";
        $data = [
            'bean_id' => $id,
            'price' => $price
        ];
        $stmt=$conn->prepare($sql);
        $stmt->execute($data);
        if($stmt->rowCount() > 0){
            echo "<script>alert('Add successful');</script>";
            echo "<script type='text/javascript'> document.location = 'bean_price.php'; </script>";
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
        <!-- <link rel="stylesheet" href="mycss/bootstrap.min.css"> -->
    </head>
    <body class="d-flex flex-column h-100">
    <?php include_once('includes/navbar.php');?>
        <div id="layoutSidenav">
        <?php include_once('includes/sidebar.php');?>
        <div id="layoutSidenav_content">
            <main class="flex-shrink-0 my-5">
                <div class="container px-5">
                    
                        <div class="card border border-dark">
                                    <div class="card-header" style="background-color: #35694a;">
                                        <a href="bean_price.php" class="px-3 pt-2 text-decoration-underline text-white">back</a>
                                    </div>
                                    <div class="card-body mt-4">
                                        <form method="post" class="form-horizontal" name="addPost" class="form-horizontal"  enctype="multipart/form-data">
                                            <div class="row form-group py-2 py-md-3">
                                                <label class="col-sm-3 control-label fw-bold text-sm-end "> အမျိုးအမည် : </label>
                                                <div class="col-sm-7">
                                                    <select name="bean" id="" class="form-control" required>
                                    <?php 
                                        $sql = "select * from beans_type";
                                        $result = $conn->prepare($sql);
                                        $result->execute();
                                        $data = $result->fetchAll(PDO::FETCH_ASSOC);
                                        $count = 1;
                                        foreach ($data as $row){
                                    ?>
                                                        <option value="<?php echo $row['id'];?>"><?php echo $row['name'];?></option>
                                    <?php
                                        }
                                    ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row form-group py-2 py-md-3">
                                                <label class="col-sm-3 control-label fw-bold text-sm-end">ပေါက်စေ◌ျး  : </label>
                                                <div class="col-sm-7">
                                                <input type="number" name="price" placeholder="၁တင်းလျှင် -(ကျပ်)" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="py-2 py-md-3 justify-content-center d-flex">
                                                <input type="submit" name="add" Value="Add" class="btn btn-success px-3 fw-bold fs-5 ">
                                            </div>
                                            
                                        </form>
                                    </div>
                                </div>
                </div>
            </main>
        </div>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>

    </body>
</html>
