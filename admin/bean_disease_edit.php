<?php 
    session_start();
    include_once('includes/checklogin.php');
    include("../includes/config.php");

    if(isset($_POST['update'])){
        $disease_id=$_GET['edit_did'];
        $name = $_POST['name'];
        $infection = $_POST['infection'];
        $characteristics = $_POST['characteristics'];
        $prevention = $_POST['prevention'];
        $type = $_POST['type'];

        if($type == 'ရောဂါ'){
            $cause_time = $_POST['cause_time'];
            $sql = "update bean_diseases set name=:name,type=:type, infection=:infection, characteristics=:characteristics, cause_time=:cause_time, prevention=:prevention where id=:id";
            $data = [
                'name' => $name,
                'type' => $type,
                'infection' => $infection,
                'characteristics' => $characteristics,
                'cause_time' => $cause_time,
                'prevention' => $prevention,
                'id' => $disease_id
            ];
        }
        else{
            $sql = "update bean_diseases set name=:name,type=:type, infection=:infection, characteristics=:characteristics, prevention=:prevention where id=:id";
            $data = [
                'name' => $name,
                'type' => $type,
                'infection' => $infection,
                'characteristics' => $characteristics,
                'cause_time' => $cause_time,
                'prevention' => $prevention,
                'id' => $disease_id
            ];
        }
        
        $stmt=$conn->prepare($sql);
        $stmt->execute($data);
        
        echo "<script>alert('Update successful');</script>";
        echo "<script type='text/javascript'> document.location = 'bean_diseases.php'; </script>";
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
                    <div class="container-fluid px-4 my-5">
    <?php 
    $disease_id=$_GET['edit_did'];
    $query = "select * from bean_diseases where id=:disease_id";
    $data = [
        'disease_id' => $disease_id
    ];
    $stmt = $conn->prepare($query);
    $stmt->execute($data);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    ?>
                        <div class="card my-5  border-dark">
                            <div class="card-header" style="background-color: #35694a;">
                                <a href="bean_diseases.php" class="px-3 pt-2 text-decoration-underline text-white">back</a>
                            </div>
                        
                            <div class="card-body">
                                        <form method="post" class="form-horizontal" name="addPost" class="form-horizontal"  enctype="multipart/form-data">
                                            <div class="row form-group py-2 py-md-3">
                                                <label class="col-sm-3 control-label fw-bold text-sm-end "> အမည် : </label>
                                                <div class="col-sm-7">
                                                <input type="text" name="name" id="name" class="form-control" value="<?php echo $result['name'];?>" required>
                                                </div>
                                            </div>
                                            <div class="row form-group py-2 py-md-3">
                                                <label class="col-sm-3 control-label fw-bold text-sm-end"> ပုံ : </label>
                                                <div class="col-sm-7">
                                                <img src="images/<?php echo $result['photo'];?>" alt="" width="100%" height="100%">
                                                </div>
                                            </div>
                                            <div class="row form-group py-2 py-md-3">
                                                <label class="col-sm-3 control-label fw-bold text-sm-end"> ရောဂါပိုးဖြစ်စေသောသက်ရှိ : </label>
                                                <div class="col-sm-7">
                                                <input type="text" name="infection" id="infection" class="form-control" value="<?php echo $result['infection'];?>" required>
                                                </div>
                                            </div>
                                            <div class="row form-group py-2 py-md-3">
                                                <label class="col-sm-3 control-label fw-bold text-sm-end"> လက္ခဏာရပ် : </label>
                                                <div class="col-sm-7">
                                                    <textarea name="characteristics" class="form-control" id="" cols="30" rows="4" required><?php echo $result['characteristics'];?></textarea>
                                                </div>
                                            </div>
                                    
                                            <div class="row form-group py-2 py-md-3" id="cause_time">
                                                <label class="col-sm-3 control-label fw-bold text-sm-end"> ကျရောက်ချိန် : </label>
                                                <div class="col-sm-7">
                                                    <textarea name="cause_time" class="form-control" id="" cols="30" rows="4" required><?php echo $result['cause_time'];?></textarea>
                                                </div>
                                            </div>

                                            <div class="row form-group py-2 py-md-3">
                                                <label class="col-sm-3 control-label fw-bold text-sm-end"> ကာကွယ်နှိမ်နှင်းနည်း : </label>
                                                <div class="col-sm-7">
                                                    <textarea name="prevention" class="form-control" id="" cols="30" rows="4" required><?php echo $result['prevention'];?></textarea>
                                                </div>
                                            </div>
                                            <div class="row form-group py-2 py-md-3">
                                                <label class="col-sm-3 control-label fw-bold text-sm-end"> အမျိုးအစား : </label>
                                                <div class="col-sm-8">
                                                    <select name="type" id="diseases_type" class="form-control" required>
                                                        <?php
                                                        if($result['type'] == 'ပိုးမွှား'){
                                                        ?>
                                                            <option value="ပိုးမွှား" selected>ပိုးမွှား</option>
                                                            <option value="ရောဂါ">ရောဂါ</option>
                                                        <?php
                                                        }else{
                                                        ?>
                                                            <option value="ပိုးမွှား">ပိုးမွှား</option>
                                                            <option value="ရောဂါ" selected>ရောဂါ</option>
                                                        <?php
                                                        }
                                                       ?> 
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="py-2 py-md-3 justify-content-center d-flex">
                                                <input type="submit" name="update" Value="Update" class="btn btn-success px-3 fw-bold fs-5 ">
                                            </div>
                                            
                                        </form>
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script>
            $(document).ready(function (){
                if($('#diseases_type').val() == 'ရောဂါ'){                    
                    $("#cause_time").show();
                }
                if($('#diseases_type').val() == 'ပိုးမွှား'){                    
                    $("#cause_time").hide();
                }
                $('#diseases_type').on('change', function (){
                    var $diseases_type = $("#diseases_type").val();
                    if($diseases_type == 'ရောဂါ'){
                        $("#cause_time").show();
                    }
                    if($diseases_type == 'ပိုးမွှား'){
                        $("#cause_time").hide();
                    }
                });                
            });            
        </script>
    </body>
</html>
