<?php 
    session_start();
    include_once('includes/checklogin.php');
    include("../includes/config.php");

    if(isset($_POST['add'])){
        $title = $_POST["title"];
    $author = $_POST["author"];

    // Upload cover image
    $coverPath = "uploads/covers/" . basename($_FILES["cover"]["name"]);
    move_uploaded_file($_FILES["cover"]["tmp_name"], $coverPath);

    // Upload PDF file
    $pdfPath = "uploads/pdfs/" . basename($_FILES["pdf"]["name"]);
    move_uploaded_file($_FILES["pdf"]["tmp_name"], $pdfPath);


     // Connect to the database
    // $conn = new PDO("mysql:host=localhost;dbname=farming", "root", "");

    // Check for errors in connection
    // if ($conn === false) {
        // die("Connection failed");
    // }

    // Insert data into the database
    $sql = "INSERT INTO books (title, author, cover, pdf) VALUES ('$title', '$author', '$coverPath', '$pdfPath')";

    $stmt = $conn->prepare($sql);

    if ($stmt->execute()) {
        echo "<script>alert('book added successful');</script>";
        header("refresh:0; url=manage_book.php");
        exit(); // Ensure no other output interferes with the redirect
    } else {
        $errorInfo = $stmt->errorInfo();
        echo "Error adding book: " . $errorInfo[2];
    }

    // Close the connection (if necessary)
    $conn = null;



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
                                        <a href="manage_book.php" class="px-3 pt-2 text-decoration-underline text-white">back</a>
                                    </div>
                                    <div class="card-body">
                                        <form method="post" class="form-horizontal" name="addPost" class="form-horizontal"  enctype="multipart/form-data">
                                            <div class="row form-group py-2 py-md-3">
                                                <label class="col-sm-3 control-label fw-bold text-sm-end "> title : </label>
                                                <div class="col-sm-7">
                                                <input type="text" name="title" id="name" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="row form-group py-2 py-md-3">
                                                <label class="col-sm-3 control-label fw-bold text-sm-end"> cover : </label>
                                                <div class="col-sm-7">
                                                <input type="file" name="cover" id="image" accept="image/*" class="form-control" required>
                                                </div>
                                            </div>
                                             <div class="row form-group py-2 py-md-3">
                                                <label class="col-sm-3 control-label fw-bold text-sm-end"> file : </label>
                                                <div class="col-sm-7">
                                                <input type="file" name="pdf" id="image" accept=".pdf" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="row form-group py-2 py-md-3">
                                                <label class="col-sm-3 control-label fw-bold text-sm-end"> author : </label>
                                                <div class="col-sm-7">
                                                <input type="text" name="author" id="infection" class="form-control" required>
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

    </body>
</html>
