<?php 
    session_start();
    include_once('includes/checklogin.php');
    include_once('../includes/config.php');
    
    // Delete
    if(isset($_GET['did'])){
        $id= $_GET['did'];
        $sql = "update bean_diseases set status=:status where id=:id";
        $status = "Delete";
        $data = [
            'status' => $status,
            'id' => $id
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
                        <h1 class="mt-4">Diseases & Pests For Beans</h1>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item active">Diseases & Pests For Beans</li>
                        </ol>

                        <div class="d-flex justify-content-end mb-3 mx-3">
                            <button class="btn btn-success fw-bold py-2" type="button">
                                <a href="AddD&P_Beans.php" class="text-decoration-none text-white">Add</a>
                            </button>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Beans' Diseases & Pests' Details
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple" class="table-hover">
                                    <thead>
                                        <tr>
                                            <th>စဉ်</th>
                                            <th>ပုံ</th>
                                            <th>အမည်</th>
                                            <th>ရောဂါပိုးဖြစ်စေသောသက်ရှိ</th>
                                            <th>လက္ခဏာရပ်</th>
                                            <th>ကျရောက်ချိန်</th>
                                            <th>ကာကွယ်နှိမ်နှင်းနည်း</th>
                                            <th>အမျိုးအစား</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                        <?php 
                            $sql = "select * from bean_diseases where status='Active'";
                            $result = $conn->prepare($sql);
                            $result->execute();
                            $data = $result->fetchAll(PDO::FETCH_ASSOC);
                            $count = 1;
                            foreach ($data as $row){
                        ?>
                                <tr>
                                    <td><?php echo $count++;?></td>
                                    <td class="text-break">
                                        <img src="images/<?php echo $row['photo'];?>" alt="" width="100px" height="70px">
                                    </td>
                                    <td class="text-break text-truncate" style="max-width: 100px;"><?php echo $row['name'];?></td>
                                    <td class="text-break text-truncate" style="max-width: 100px;"><?php echo $row['infection'];?></td>
                                    <td class="text-break text-truncate" style="max-width: 150px;"><?php echo $row['characteristics'];?></td>
                                    <td class="text-break text-truncate" style="max-width: 150px;"><?php echo $row['cause_time'];?></td>
                                    <td class="text-break text-truncate" style="max-width: 150px;"><?php echo $row['prevention'];?></td>
                                    <td class="text-break text-truncate" style="max-width: 100px;"><?php echo $row['type'];?></td>

                                    <td>
                                        <a href="bean_disease_details.php?bdisease_id=<?php echo $row['id'];?>" class="px-1 text-decoration-none">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="bean_diseases.php?did=<?php echo $row['id'];?>" onClick="return confirm('Are you sure to delete');">
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