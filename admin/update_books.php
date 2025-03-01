<?php 
    session_start();
    include_once('includes/checklogin.php');
    include("../includes/config.php");

    if(isset($_POST['update'])){
        $eid=$_GET['eid'];
         $title = $_POST["title"];
    $author = $_POST["author"];
       
        
        $sql = "update books set title=:title,author=:author where id=:id";
        $data = [
            'title' => $title,
            'author' => $author,
            'id' => $eid
        ];
        $stmt=$conn->prepare($sql);
        $stmt->execute($data);



         // Handle cover update
        if (isset($_FILES["cover"]) && $_FILES["cover"]["size"] > 0) {
            $coverPath = "uploads/covers/" . basename($_FILES["cover"]["name"]);
            move_uploaded_file($_FILES["cover"]["tmp_name"], $coverPath);
            // Update cover path in the database
             $sql = "update books set cover=:cover where id=:id";
        $data = [
            'cover' => $coverPath,
            'id' => $eid
        ];
        $stmt=$conn->prepare($sql);
        $stmt->execute($data);

            }
        

        // Handle PDF update
        if (isset($_FILES["pdf"]) && $_FILES["pdf"]["size"] > 0) {
            $pdfPath = "uploads/pdfs/" . basename($_FILES["pdf"]["name"]);
            move_uploaded_file($_FILES["pdf"]["tmp_name"], $pdfPath);
            // Update PDF path in the database

               $sql = "update books set pdf=:pdf where id=:id";
        $data = [
            'pdf' => $pdfPath,
            'id' => $eid
        ];
            
        }
        
        echo "<script>alert('Update successful');</script>";
        echo "<script type='text/javascript'> document.location = 'book_details.php?pid=$eid'; </script>";  
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
    $eid=$_GET['eid'];
    $query = "select * from books where id=:id";
    $data = [
        'id' => $eid
    ];
    $stmt = $conn->prepare($query);
    $stmt->execute($data);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    ?>
                        <div class="card my-5  border-dark">
                            <div class="card-header" style="background-color: #35694a;">
                                <a href="book_details.php?pid=<?php echo $eid; ?>" class="px-3 pt-2 text-decoration-underline text-white">back</a>
                            </div>
                        
                            <div class="card-body">
                                        <form method="post" class="form-horizontal" name="addPost" class="form-horizontal"  enctype="multipart/form-data">
                                            <div class="row form-group py-2 py-md-3">
                                                <label class="col-sm-3 control-label fw-bold text-sm-end "> title : </label>
                                                <div class="col-sm-7">
                                                <input type="text" name="title" id="name" class="form-control" value="<?php echo $result['title'];?>" required>
                                                </div>
                                            </div>
                                            <div class="row form-group py-2 py-md-3">
                                                <label class="col-sm-3 control-label fw-bold text-sm-end"> cover : </label>
                                                <div class="col-sm-7">
                                                <input type="file" name="cover" id="image" accept="image/*" class="form-control" >
                                                </div>
                                            </div>
                                            <div class="row form-group py-2 py-md-3">
                                                <label class="col-sm-3 control-label fw-bold text-sm-end"> pdf : </label>
                                                <div class="col-sm-7">
                                                <input type="file" name="pdf" id="image" accept=".pdf" class="form-control" >
                                                </div>
                                            </div>
                                             <div class="row form-group py-2 py-md-3">
                                                <label class="col-sm-3 control-label fw-bold text-sm-end "> author : </label>
                                                <div class="col-sm-7">
                                                <input type="text" name="author" id="name" class="form-control" value="<?php echo $result['author'];?>" required>
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
    </body>
</html>
