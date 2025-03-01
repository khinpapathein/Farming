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
    $commentid=$_GET['commentid'];
    $query = "select * from comments where id=:commentid";
    $data = [
        'commentid' => $commentid
    ];
    $stmt = $conn->prepare($query);
    $stmt->execute($data);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    $userid = $result['user_id'];
    $query1= "select * from registration where id=:userid";
    $data1 = [
        'userid' => $userid
    ];
    $stmt1 = $conn->prepare($query1);
    $stmt1->execute($data1);
    $result1 = $stmt1->fetch(PDO::FETCH_ASSOC);

    $quesid = $result['ques_id'];
    $query2= "select * from questions where id=:quesid";
    $data2 = [
        'quesid' => $quesid
    ];
    $stmt2 = $conn->prepare($query2);
    $stmt2->execute($data2);
    $result2 = $stmt2->fetch(PDO::FETCH_ASSOC);
    ?>
                        <div class="card my-5">
                        <a href="comments.php" class="px-3 pt-2" style="color: #88B44E;">back</a>
                            <div class="card-body">
                                <table class="table table-bordered">
                                   <tr>
                                        <th class="p-4">အကြောင်းအရာ</th>
                                       <td class="p-4"><?php echo $result2['title'];?></td>
                                   </tr>
                                   <tr>
                                       <th class="p-4">မှတ်ချက်</th>
                                       <td class="p-4"><?php echo $result['comment'];?></td>
                                   </tr>
                                   <tr>
                                       <th class="p-4">Account name</th>
                                       <td class="p-4" colspan="3"><?php echo $result1['name'];?></td>
                                   </tr>
                                     <tr>
                                       <th class="p-4">post တင်သောရက်</th>
                                       <td class="p-4" colspan="3"><?php echo $result['time'];?></td>
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
