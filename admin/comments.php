<?php 
    session_start();
    include_once('includes/checklogin.php');
    include_once('../includes/config.php');
    
    // Delete
    if(isset($_GET['cid'])){
        $commentid= $_GET['cid'];
        $sql = "update comments set status=:status where id=:commentid";
        $status = "Delete";
        $data = [
            'status' => $status,
            'commentid' => $commentid
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
                        <h1 class="mt-4">Comments</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">comments</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Comments' Details
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple" class="table-hover">
                                    <thead>
                                        <tr>
                                            <th>စဉ်</th>
                                            <th>အကြောင်းအရာ</th>
                                            <th>မှတ်ချက်</th>
                                            <th>account name</th>
                                            <th>Post တင်သောရက်</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                        <?php 
                            $sql = "select * from comments where status='Active'";
                            $result = $conn->prepare($sql);
                            $result->execute();
                            $data = $result->fetchAll(PDO::FETCH_ASSOC);
                            $count = 1;
                            foreach ($data as $row){
                                $userid = $row['user_id'];
                                $sql1 = "select * from registration where id=:userid";
                                $inputdata = [
                                    'userid' => $userid
                                ];
                                $result1 = $conn->prepare($sql1);
                                $result1->execute($inputdata);
                                $data1 = $result1->fetch(PDO::FETCH_ASSOC);

                                $quesid = $row['ques_id'];
                                $sql2 = "select * from questions where id=:quesid";
                                $inputdata2 = [
                                    'quesid' => $quesid
                                ];
                                $result2 = $conn->prepare($sql2);
                                $result2->execute($inputdata2);
                                $data2 = $result2->fetch(PDO::FETCH_ASSOC);
                        ?>
                                <tr>
                                    <td><?php echo $count++;?></td>                                    
                                    <td class="text-break text-truncate" style="max-width: 250px;">
                                        <?php echo $data2['title'];?>
                                    </td>
                                    <td class="text-break text-truncate" style="max-width: 250px;"><?php echo $row['comment'];?></td>
                                    <td class="text-break"><?php echo $data1['name'];?></td>
                                    <td class="text-break"><?php echo $row['time'];?></td>
                                    <td>
                                        <a href="comment_details.php?commentid=<?php echo $row['id'];?>" class="px-1 text-decoration-none">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="comments.php?cid=<?php echo $row['id'];?>" onClick="return confirm('Are you sure to delete');">
                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                        </a>
                                    </td>
                                </tr>  
                        <?php
                            
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