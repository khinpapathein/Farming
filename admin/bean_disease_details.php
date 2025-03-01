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
    $disease_id=$_GET['bdisease_id'];
    $query = "select * from bean_diseases where id=:disease_id";
    $data = [
        'disease_id' => $disease_id
    ];
    $stmt = $conn->prepare($query);
    $stmt->execute($data);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    ?>
                        <div class="card my-5 border-dark">
                            <div class="card-header" style="background-color: #35694a;">
                                <a href="bean_diseases.php" class="px-3 pt-2 text-decoration-underline text-white">back</a>
                                <a href="bean_disease_edit.php?edit_did=<?php echo $result['id'];?>" class="px-3 pt-2 text-white">Edit</a>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <tr>
                                       <th class="p-4">ဓာတ်ပုံ</th>
                                       <td class="p-4" style="max-width:500px;"><img src="images/<?php echo $result['photo'];?>" alt="" width="100%" height="100%" style=" max-height: 500px;"></td>
                                   </tr>
                                   <tr>
                                        <th class="p-4">အမည်</th>
                                       <td class="p-4"><?php echo $result['name'];?></td>
                                   </tr>
                                   
                                   <tr>
                                       <th class="p-4">ရောဂါပိုးဖြစ်စေသောသက်ရှိ</th>
                                       <td class="p-4" colspan="3"><?php echo $result['infection'];?></td>
                                   </tr>
                                    <tr>
                                       <th class="p-4">လက္ခဏာရပ်</th>
                                       <td class="p-4" colspan="3"><?php echo $result['characteristics'];?></td>
                                   </tr>
                                <?php
                                    if($result['type'] == 'ရောဂါ'){
                                ?>
                                        <tr>
                                            <th class="p-4">ကျရောက်ချိန်</th>
                                            <td class="p-4" colspan="3"><?php echo $result['cause_time'];?></td>
                                        </tr>
                                <?php
                                    }
                                ?>
                                   
                                   <tr>
                                       <th class="p-4">ကာကွယ်နှိမ်နှင်းနည်း</th>
                                       <td class="p-4" colspan="3"><?php echo $result['prevention'];?></td>
                                   </tr>
                                   <tr>
                                       <th class="p-4">အမျိုးအစား</th>
                                       <td class="p-4" colspan="3"><?php echo $result['type'];?></td>
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
