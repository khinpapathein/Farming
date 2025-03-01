<?php session_start();
    include_once('includes/checklogin.php');
    include_once('../includes/config.php');
    //Code for Updation 
    if(isset($_POST['update'])){
        $name=$_POST['name'];
        $address=$_POST['address'];
        // $phno=$_POST['phno'];
        $userid=$_GET['uid'];
        $sql = "update registration set name=:name, address=:address where id=:userid";
        $data = [
            'name' => $name,
            'address' => $address,
            'userid' => $userid
        ];
        $stmt = $conn->prepare($sql);
        $stmt->execute($data);
        $count = $stmt->rowCount();

        if($count > 0){
            echo "<script>alert('Profile updated successfully');</script>";
            echo "<script type='text/javascript'> document.location = 'users.php'; </script>";
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
                        
    <?php 
    $userid=$_GET['uid'];
    $query = "select * from registration where id=:userid";
    $data = [
        'userid' => $userid
    ];
    $stmt = $conn->prepare($query);
    $stmt->execute($data);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    ?>
                        <h1 class="mt-5"><?php echo $result['name'];?>'s Profile</h1>
                        <div class="card mb-4">
                     <form method="post">
                            <div class="card-body">
                            <a href="user_profile.php?uid=<?php echo $result['id'];?>" class="mx-3 pb-2" style="color: #88B44E;">back</a>
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <th>အမည်</th>
                                            <td><input class="form-control" id="name" name="name" type="text" value="<?php echo $result['name'];?>" required /></td>
                                        </tr>
                                        <tr>
                                            <th>နေရပ်လိပ်စာ</th>
                                            <td><textarea class="form-control" id="address" name="address" cols="30" rows="5" required ><?php echo $result['address'];?></textarea>
                                        </tr>
                                        <tr>
                                            <th>ဖုန်းနံပါတ်</th>
                                            <td colspan="3"><input class="form-control" id="phno" name="phno" type="text" value="<?php echo $result['phno'];?>" readonly/></td>
                                        </tr>                                        
                                        <tr>
                                            <th>accountစတင်သောရက်</th>
                                            <td colspan="3"><?php echo $result['startDate'];?></td>
                                        </tr>
                                        <tr>
                                            <td colspan="4" style="text-align:center ;"><button type="submit" class="btn btn-primary btn-block" name="update">Update</button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            </form>
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
