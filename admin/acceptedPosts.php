<?php 
    session_start();
    include_once('includes/checklogin.php');
    include_once('../includes/config.php');
    
    // Delete
    if(isset($_GET['pid'])){
        $quesid= $_GET['pid'];
        $conn->beginTransaction();

        $sql = "update questions set status=:status where id=:quesid";
        $status = "Delete";
        $data = [
            'status' => $status,
            'quesid' => $quesid
        ];
        $result = $conn->prepare($sql);
        $result->execute($data);

        $sql1 = "update comments set status=:status where ques_id=:quesid";
        $status1 = "Delete";
        $data1 = [
            'status' => $status,
            'quesid' => $quesid
        ];
        $result1 = $conn->prepare($sql1);
        $result1->execute($data1);
        $conn->commit();

        $count = $result->rowCount();
        if($count > 0){
            echo "<script>alert('Deleted successful');</script>";
            echo "<script type='text/javascript'> document.location = 'acceptedPosts.php'; </script>";
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
                        <h1 class="mt-4">Accepted Posts</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Accepted</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Posts' Details
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple" class="table-hover">
                                    <thead>
                                        <tr>
                                            <th>စဉ်</th>
                                            <th>ပုံ</th>
                                            <th>အကြောင်းအရာ</th>
                                            <th>account name</th>
                                            <th>Post တင်သောရက်</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                        <?php 
                            $sql = "select * from questions where status='Active'";
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
                        ?>
                                <tr>
                                    <td><?php echo $count++;?></td>
                                    <td class="text-break">
                                        <img src="../images/<?php echo $row['photo'];?>" alt="" width="110px" height="70px">
                                    </td>
                                    <td class="text-break text-truncate" style="max-width: 250px;"><?php echo $row['title'];?></td>
                                    <td class="text-break"><?php echo $data1['name'];?></td>
                                    <td class="text-break"><?php echo $row['time'];?></td>
                                    <td>
                                        <a href="accepted_details.php?acceptedid=<?php echo $row['id'];?>" class="px-1 text-decoration-none">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="acceptedPosts.php?pid=<?php echo $row['id'];?>" onclick="return confirm('Are you sure to delete');">
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