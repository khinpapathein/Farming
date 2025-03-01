<?php 
    session_start();
    include_once('includes/checklogin.php');
    include("../includes/config.php");

    if(isset($_POST['add'])){
        $name = $_POST['name'];
        $infection = $_POST['infection'];
        $characteristics = $_POST['characteristics'];
        $prevention = $_POST['prevention'];
        $type = $_POST['type'];
        $image_status = $_FILES['image'];
        $filename = $_FILES['image']['name'];
        $tempname = $_FILES['image']['tmp_name'];
        $folder ="images/".$filename;
        $status = "Active";
        $cause_time = $_POST['cause_time'];
       
        
        $allowedExts=array("jpg","jpeg","gif","png","jfif");
        $extension=end(explode(".", $_FILES["image"]["name"]));
        if((($_FILES["image"]["type"] == "image/gif")||($_FILES["image"]["type"] == "image/jpeg")||
        ($_FILES["image"]["type"]=="image/png")||($_FILES["image"]["type"] == "image/pjpeg")||($_FILES["image"]["type"] == "image/jfif")) && in_array($extension,$allowedExts)){ 
            if($_FILES["image"]["error"] > 0){
                echo "<script type='text/javascript'>";
                echo "alert('Error image upload file')";
                echo "</script>";
            }
            else{
                $sql = "insert into paddy_diseases(name, photo, type, infection, characteristics, cause_time, prevention, status) values (:name, :photo, :type, :infection, :characteristics, :cause_time, :prevention, :status)";
                if($type == 'ပိုးမွှား'){
                    $cause_time = '-';
                }
                    $data = [
                        'name' => $name,
                        'photo' => $filename,
                        'type' => $type,
                        'infection' => $infection,
                        'characteristics' => $characteristics,
                        'cause_time' => $cause_time,
                        'prevention' => $prevention,
                        'status' => $status
                    ];          
                $stmt=$conn->prepare($sql);
                $stmt->execute($data);

                if(!file_exists($folder)){
                    move_uploaded_file($tempname, $folder);
                }
                echo "<script>alert('Add successful');</script>";
                echo "<script type='text/javascript'> document.location = 'paddy_diseases.php'; </script>";
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
                                        <a href="paddy_diseases.php" class="px-3 pt-2 text-decoration-underline text-white">back</a>
                                    </div>
                                    <div class="card-body">
                                        <form method="post" class="form-horizontal" name="addPost" class="form-horizontal"  enctype="multipart/form-data">
                                            <div class="row form-group py-2 py-md-3">
                                                <label class="col-sm-3 control-label fw-bold text-sm-end "> အမည် : </label>
                                                <div class="col-sm-7">
                                                <input type="text" name="name" id="name" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="row form-group py-2 py-md-3">
                                                <label class="col-sm-3 control-label fw-bold text-sm-end"> အမျိုးအစား : </label>
                                                <div class="col-sm-8">
                                                    <select name="type" id="type" class="form-control" required="required">
                                                        <option value="ပိုးမွှား">ပိုးမွှား</option>
                                                        <option value="ရောဂါ">ရောဂါ</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row form-group py-2 py-md-3">
                                                <label class="col-sm-3 control-label fw-bold text-sm-end"> ပုံ : </label>
                                                <div class="col-sm-7">
                                                <input type="file" name="image" id="image" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="row form-group py-2 py-md-3">
                                                <label class="col-sm-3 control-label fw-bold text-sm-end"> ရောဂါပိုးဖြစ်စေသောသက်ရှိ : </label>
                                                <div class="col-sm-7">
                                                <input type="text" name="infection" id="infection" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="row form-group py-2 py-md-3" id="cause_time">
                                                <label class="col-sm-3 control-label fw-bold text-sm-end"> ကျရောက်ချိန် : </label>
                                                <div class="col-sm-7">
                                                    <textarea name="cause_time" class="form-control" cols="30" rows="4" required> </textarea>
                                                </div>
                                            </div>
                                            <div class="row form-group py-2 py-md-3">
                                                <label class="col-sm-3 control-label fw-bold text-sm-end"> လက္ခဏာရပ် : </label>
                                                <div class="col-sm-7">
                                                    <textarea name="characteristics" class="form-control" id="" cols="30" rows="4" required></textarea>
                                                </div>
                                            </div>
                                            <div class="row form-group py-2 py-md-3">
                                                <label class="col-sm-3 control-label fw-bold text-sm-end"> ကာကွယ်နှိမ်နှင်းနည်း : </label>
                                                <div class="col-sm-7">
                                                    <textarea name="prevention" class="form-control" id="" cols="30" rows="4" required></textarea>
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script>
            $(document).ready(function (){
                $("#cause_time").hide();
                $('#type').on('change', function (){
                    var $diseases_type = $("#type").val();
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
