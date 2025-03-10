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
                     
                            <div class="card-body">
                                <a href="users.php" class="pb-2" style="color: #88B44E;">back</a>
                                <a href="edit_profile.php?uid=<?php echo $result['id'];?>" class="mx-3 pb-2" style="color: #88B44E;">Edit</a>
                                <table class="table table-bordered">
                                    <tr>
                                        <th>အမည်</th>
                                        <td><?php echo $result['name'];?></td>
                                    </tr>
                                   
                                    <tr>
                                        <th>ဖုန်းနံပါတ်</th>
                                        <td colspan="3"><?php echo $result['phno'];?></td>
                                    </tr> 
                                    <tr>
                                        <th>နေရပ်လိပ်စာ</th>
                                        <td colspan="3"><?php echo $result['address'];?></td>
                                    </tr>                                    
                                    <tr>
                                        <th>accountစတင်သောရက်</th>
                                        <td colspan="3"><?php echo $result['startDate'];?></td>
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
