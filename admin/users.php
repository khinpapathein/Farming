<?php 
    session_start();
    include_once('includes/checklogin.php');
    include_once('../includes/config.php');
    
    
    // Delete
    if(isset($_GET['id'])){
        $userid= $_GET['id'];

        $conn->beginTransaction();

        $sql = "delete from registration where id=:userid";
        $data = [
            'userid' => $userid
        ];
        $result = $conn->prepare($sql);
        $result->execute($data);

        $sql1 = "update comments set status=:status where user_id=:userid";
        $data1 = [
            'status' => 'Delete',
            'userid' => $userid
        ];
        $result1 = $conn->prepare($sql1);
        $result1->execute($data1);


        $sql2 = "update questions set status=:status where user_id=:userid";
        $data2 = [
            'status' => 'Delete',
            'userid' => $userid
        ];
        $result2 = $conn->prepare($sql2);
        $result2->execute($data2);
        $conn->commit();

        echo "<script>alert('deleted successful');</script>";
        echo "<script type='text/javascript'> document.location = 'users.php'; </script>";
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
                        <h1 class="mt-4">Users</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">users</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Users' Details
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>စဉ်</th>
                                            <th>အမည်</th>
                                            <th>လိပ်စာ</th>
                                            <th>ဖုန်းနံပါတ်</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                        <?php 
                            $sql = "select * from registration";
                            $result = $conn->prepare($sql);
                            $result->execute();
                            $data = $result->fetchAll(PDO::FETCH_ASSOC);
                            $count = 1;
                            foreach ($data as $row){
                        ?>
                                <tr>
                                    <td><?php echo $count++;?></td>
                                    <td class="text-break"><?php echo $row['name'];?></td>
                                    <td class="text-break"><?php echo $row['address'];?></td>
                                    <td class="text-break"><?php echo $row['phno'];?></td>
                                    <td>
                                        <a href="user_profile.php?uid=<?php echo $row['id'];?>" class="px-1 text-decoration-none">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="users.php?id=<?php echo $row['id'];?>" onClick="return confirm('Are you sure to delete');">
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