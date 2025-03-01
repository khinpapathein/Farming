<?php 
    session_start();
    include_once('includes/checklogin.php');
    include("../includes/config.php");

    if(isset($_POST['add'])){
        $question = $_POST['question'];
        $answer = $_POST['answer'];
        $status = 'Active';

        $sql = "insert into faq(question, answer, status) values (:question, :answer, :status)";
        
        $data = [
            'question' => $question,
            'answer' => $answer,
            'status' => $status
        ];     
        $stmt=$conn->prepare($sql);
        $stmt->execute($data);

        echo "<script>alert('Add successful');</script>";
        echo "<script type='text/javascript'> document.location = 'faq.php'; </script>";
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
                                        <a href="faq.php" class="px-3 pt-2 text-decoration-underline text-white">back</a>
                                    </div>
                                    <div class="card-body">
                                        <form method="post" class="form-horizontal" name="addFAQ" class="form-horizontal"  enctype="multipart/form-data">
                                            <div class="row form-group py-2 py-md-3">
                                                <label class="col-sm-3 control-label fw-bold text-sm-end "> အမေး : </label>
                                                <div class="col-sm-7">
                                                <input type="text" name="question" id="question" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="row form-group py-2 py-md-3">
                                                <label class="col-sm-3 control-label fw-bold text-sm-end"> အဖြေ : </label>
                                                <div class="col-sm-7">
                                                    <textarea name="answer" class="form-control" id="answer" cols="30" rows="4" required></textarea>
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
