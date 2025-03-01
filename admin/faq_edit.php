<?php 
    session_start();
    include_once('includes/checklogin.php');
    include("../includes/config.php");

    if(isset($_POST['update'])){
        $question = $_POST['question'];
        $answer = $_POST['answer'];
        $id=$_GET['edit_id'];
        
        $sql = "update faq set question=:question, answer=:answer where id=:id";
        $data = [
            'question' => $question,
            'answer' => $answer,
            'id' => $id
        ];        
        $stmt=$conn->prepare($sql);
        $stmt->execute($data);
        
        echo "<script>alert('Update successful');</script>";
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
    </head>
    <body class="sb-nav-fixed">
      <?php include_once('includes/navbar.php');?>
        <div id="layoutSidenav">
          <?php include_once('includes/sidebar.php');?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4 my-5">
    <?php 
    $id=$_GET['edit_id'];
    $query = "select * from faq where id=:id";
    $data = [
        'id' => $id
    ];
    $stmt = $conn->prepare($query);
    $stmt->execute($data);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    ?>
                        <div class="card my-5  border-dark">
                            <div class="card-header" style="background-color: #35694a;">
                                <a href="faq_details.php?id=<?php echo $result['id'];?>" class="px-3 pt-2 text-decoration-underline text-white">back</a>
                            </div>
                        
                            <div class="card-body">
                                <form method="post" class="form-horizontal" name="addPost" class="form-horizontal"  enctype="multipart/form-data">
                                    <div class="row form-group py-2 py-md-3">
                                        <label class="col-sm-3 control-label fw-bold text-sm-end"> အမေး : </label>
                                        <div class="col-sm-7">
                                            <textarea name="question" class="form-control" id="" cols="30" rows="4" required><?php echo $result['question'];?></textarea>
                                        </div>
                                    </div>
                            
                                    <div class="row form-group py-2 py-md-3" id="cause_time">
                                        <label class="col-sm-3 control-label fw-bold text-sm-end"> အဖြေ : </label>
                                        <div class="col-sm-7">
                                            <textarea name="answer" class="form-control" id="" cols="30" rows="9" required><?php echo $result['answer'];?></textarea>
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
        
    </body>
</html>
