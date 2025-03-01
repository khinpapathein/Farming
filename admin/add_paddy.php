<?php 
    session_start();
    include_once('includes/checklogin.php');
    include("../includes/config.php");

    if(isset($_POST['add'])){
        $name = $_POST['name'];
        $type = $_POST['type'];

        $sql = "select * from paddy";
        $result = $conn->prepare($sql);
        $result->execute();
        $data = $result->fetchAll(PDO::FETCH_ASSOC);

        $status = 0;
        foreach ($data as $row) {
            if($name == $row['name']){
                $status = 1;
                $_SESSION['pid'] = $row['id'];
            }
        }
        if($status == 0){
            $sql2 = "insert into paddy(name) values (:name)";
            $data2 = [
                'name' => $name
            ];
            $stmt2=$conn->prepare($sql2);
            $stmt2->execute($data2);
            $newpid = $conn->lastInsertId();
            // echo "$db->lastInsertId()";

            $sql3 = "insert into paddy_type(paddy_id, type_id) values (:pid, :typeid)";
            $data3 = [
                'pid' => $newpid,
                'typeid' => $type
            ];
            $stmt3=$conn->prepare($sql3);
            $stmt3->execute($data3);
            
            if($stmt3->rowCount() > 0){
                echo "<script>alert('Add successful');</script>";
                echo "<script type='text/javascript'> document.location = 'paddy_types.php'; </script>";
            }  
        }
        if($status == 1){
            $pid = $_SESSION['pid'];
            $sql3 = "insert into paddy_type(paddy_id, type_id) values (:pid, :typeid)";
            $data3 = [
                'pid' => $pid,
                'typeid' => $type
            ];
            $stmt3=$conn->prepare($sql3);
            $stmt3->execute($data3);  

            if($stmt3->rowCount() > 0){
                echo "<script>alert('Add successful');</script>";
                echo "<script type='text/javascript'> document.location = 'paddy_types.php'; </script>";
            }  
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
                                        <a href="paddy_types.php" class="px-3 pt-2 text-decoration-underline text-white">back</a>
                                    </div>
                                    <div class="card-body mt-5">
                                        <form method="post" class="form-horizontal" name="addPost" class="form-horizontal"  enctype="multipart/form-data">                                            
                                            <div class="row form-group py-2 py-md-3">
                                                <label class="col-sm-3 control-label fw-bold text-sm-end"> အမျိုးအစား : </label>
                                                <div class="col-sm-8">
                                                    <select name="type" id="" class="form-control" required>
                                                        <option selected disabled>select type</option>
                                                        <option value="1">နွေစပါး</option>
                                                        <option value="2">မိုးစပါး</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row form-group py-2 py-md-3">
                                                <label class="col-sm-3 control-label fw-bold text-sm-end "> အမည် : </label>
                                                <div class="col-sm-7">
                                                <input type="text" name="name" id="name" class="form-control" required>
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
