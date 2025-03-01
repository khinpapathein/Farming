<?php session_start();
    include_once('includes/config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Ayeyar Farmer Hub</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="img/title_logo.png">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Playfair+Display:wght@700;900&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">


     <style>        
        .details{
            max-height: calc(100vh - 100px);
            overflow-y: auto;
        }
        /* Modal Styles */
        @media only screen and (min-width: 300px) {
            .myBody{
                font-size: 13px;
            }
            .mybody{
                font-size: 13px;
            }
            /* header */
            .headerFont{
                font-size: 15px!important;
            }

            /* modal */
            .modal {
                display: none;
                position: fixed;
                top: 3%;
                left: 3%;
                width: 94%;
                height: auto;
                background-color: rgba(0, 0, 0, 0.5);
                align-items: center;
                justify-content: center;
                box-shadow: rgb(0, 51, 0) 0px 20px 30px -10px;
            }
            .modal-body img{
                width: 230px;
                height: auto;
            }

            /* article */
            .mydiv{
                box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
            }
            .mydiv p{
                margin: 0;
                font-size: 15px;
            }
            .row{
                margin-bottom: 15px;
            }
            .product-item img {
                max-width: 330px; /* Adjust this value to change image width */            
                height: 160px; /* Maintain aspect ratio */
                display: block;
                margin: 0 auto;
            }
            .product-description {
                height: 120px; /* Set a fixed height for the product description */
                overflow: hidden; /* Hide overflowing content */
                display: flex; /* Use flexbox */
                justify-content: center; /* Center horizontally */
                align-items: center; /* Center vertically */
                text-align: center; /* Align text in the center */
            }
            .artiTitle{
                font-size: 11pt;
                font-weight: 600;
                color: #88b44e!important;
            }

            .myimg{
                width: 100%;
            }
        }
        @media only screen and (min-width: 370px) {
            .modal-body img{
                width: 270px;
                height: auto;
            }
        }
        @media only screen and (min-width: 400px) {
            /* article */
            .mydiv{
                box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
            }
            .mydiv p{
                margin: 0;
                font-size: 15px;
            }
            .row{
                margin-bottom: 15px;
            }
            .product-item img {
                max-width: 400px; /* Adjust this value to change image width */            
                height: 160px; /* Maintain aspect ratio */
                display: block;
                margin: 0 auto;
            }
            .product-description {
                height: 120px; /* Set a fixed height for the product description */
                overflow: hidden; /* Hide overflowing content */
                display: flex; /* Use flexbox */
                justify-content: center; /* Center horizontally */
                align-items: center; /* Center vertically */
                text-align: center; /* Align text in the center */
            }
        }
        @media only screen and (min-width: 420px) {
            .modal-body img{
                width: 320px;
                height: auto;
            }
            .container p, .container button{
                font-size: 14px;
            }
            
        }
        @media only screen and (min-width: 500px) {

            /* header */
            .headerFont{
                font-size: 18px!important;
            }

            /* styles for browsers larger than 1440px; */
            .container p, .container button{
                font-size: 15px;
            }
            .more{
                top: 10%;
                left: 10%!important;
                width: 80%!important;
            }
            .modal {
                display: none;
                position: fixed;
                top: 10%;
                left: 15%;
                width: 70%;
                height: auto;
                background-color: rgba(0, 0, 0, 0.5);
                align-items: center;
                justify-content: center;
            }
            .modal-body img{
                width: 500px;
                height: auto;
            }            
        }
        @media only screen and (min-width: 700px) {
            /* font size */
            .myBody{
                font-size: 15px;
            }

            /* article */
            .mydiv{
                box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
            }
            .mydiv p{
                margin: 0;
                font-size: 15px;
            }
            .row{
                margin-bottom: 15px;
            }
            .product-item img {
                max-width: 305px; /* Adjust this value to change image width */            
                height: 160px; /* Maintain aspect ratio */
                display: block;
                margin: 0 auto;
            }
            .product-description {
                height: 120px; /* Set a fixed height for the product description */
                overflow: hidden; /* Hide overflowing content */
                display: flex; /* Use flexbox */
                justify-content: center; /* Center horizontally */
                align-items: center; /* Center vertically */
                text-align: center; /* Align text in the center */
            }
            .artiTitle{
                font-size: 12pt;
            }

            .mytitle{
                width: 93%;
            }
        }
        @media only screen and (min-width: 850px) {
            /* styles for browsers larger than 1440px; */
            .morecomments{
                top: 10%;
                left: 10%!important;
                width: 80%!important;
            }
            .modal {
                display: none;
                position: fixed;
                top: 10%;
                left: 20%;
                width: 60%;
                height: auto;
                background-color: rgba(0, 0, 0, 0.5);
                align-items: center;
                justify-content: center;
            }
            .modal-body img{
                width: 500px;
                height: auto;
            }
        }
        @media only screen and (min-width: 1000px) {
            .myprofile{
                min-width: 108px;
            }
             /* article */
             .mydiv{
                box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
            }
            .mydiv p{
                margin: 0;
                font-size: 15px;
            }
            .row{
                margin-bottom: 15px;
            }
            .product-item img {
                max-width: 305px; /* Adjust this value to change image width */            
                height: 160px; /* Maintain aspect ratio */
                display: block;
                margin: 0 auto;
            }
            .product-description {
                height: 120px; /* Set a fixed height for the product description */
                overflow: hidden; /* Hide overflowing content */
                display: flex; /* Use flexbox */
                justify-content: center; /* Center horizontally */
                align-items: center; /* Center vertically */
                text-align: center; /* Align text in the center */
            }
            .artiTitle{
                font-size: 11pt;
            }
            
            .mytitle{
                width: 85%;
            }
            .mybody{
                font-size: 14px;
            }
        }
        @media only screen and (min-width: 1025px) {
            /* styles for browsers larger than 1440px; */
            .more{
                top: 10%;
                left: 10%!important;
                width: 80%!important;
            }
            .modal {
                display: none;
                position: fixed;
                top: 5%;
                left: 10%;
                width: auto;
                height: auto;
                background-color: rgba(0, 0, 0, 0.5);
                align-items: center;
                justify-content: center;
            }
            
            .mytitle{
                width: 87%;
            }
        }
        .details p{
            text-align: left;
        }
        .modal-content {
        background-color: #fff;
        padding: 10px;
        border-radius: 8px;
        text-align: center;
        }

        .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
        cursor: pointer;
        }
        
    </style>
</head>

<body >
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->

    
    <!-- Navbar Start -->
    <div class="bg-white sticky-top">
        <div class="mx-5 mx-md-3 mx-lg-4">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-2 py-lg-0">
                <a href="index.php" class="navbar-brand">
                    <img class="img-fluid" src="img/logoo.png" alt="Logo">
                </a>
                <button type="button" class="navbar-toggler ms-auto me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="index.php" class="nav-item nav-link px-2 mx-0">မူလစာမျက်နှာ</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle active px-2 mx-0" data-bs-toggle="dropdown">ဆောင်းပါးနှင့်စာအုပ်စာစောင်များ</a>
                            <div class="dropdown-menu bg-light rounded-0 m-0">
                                <a href="article1.php" class="dropdown-item active">ဆောင်းပါး</a>
                                <a href="book.php" class="dropdown-item">စာအုပ်စာစောင်</a>                                
                            </div>
                        </div>
                        <a href="discussion.php" class="nav-item nav-link px-2 mx-0">အမေးအဖြေ</a>
                        <a href="price.php" class="nav-item nav-link px-2 mx-0">ဈေးနှုန်းပေါက်ဈေး</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle px-2 mx-0" data-bs-toggle="dropdown">ခန့်မှန်းကုန်ကျငွေ တွက်မည်</a>
                            <div class="dropdown-menu bg-light rounded-0 m-0">
                                <a href="paddyCost.php" class="dropdown-item">စပါး</a>
                                <a href="beanCost.php" class="dropdown-item">ပဲ</a>
                            </div>
                        </div>
                <?php 
                    if(isset($_SESSION['userId'])){
                        $userid = $_SESSION['userId'];
                        $sql = "select * from registration where id=:userid";
                        $input =[
                            'userid' => $userid
                        ];
                        $stmt = $conn->prepare($sql);
                        $stmt->execute($input);
                        $result = $stmt->fetch(PDO::FETCH_ASSOC);
                ?>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle px-2 mx-0 myprofile" data-bs-toggle="dropdown"><?php echo $result['name'];?></a>
                            <div class="dropdown-menu bg-light rounded-0 m-0" style="min-width: 7rem!important;">
                                <a href="profile.php" class="dropdown-item">ပရိုဖိုင်</a>
                                <a href="logout.php" class="dropdown-item" onclick="return confirm('Are you sure to logout!!');">logout ထွက်ပါ</a>
                            </div>
                        </div>
                <?php
                    }
                    else{
                ?>
                    <a href="login.php" class="nav-item nav-link px-2 mx-0">login ဝင်ပါ</a>
                <?php
                    }
                ?>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-2 text-dark mb-2 mb-md-4 animated slideInDown">ဆောင်းပါး</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item p-0"><a href="index.php" class="headerFont">မူလစာမျက်နှာ</a></li>
                    <li class="breadcrumb-item text-dark headerFont p-0" aria-current="page">ဆောင်းပါးနှင့်စာအုပ်စာစောင်များ</li>
                    <li class="breadcrumb-item text-dark headerFont p-0" aria-current="page">ဆောင်းပါး</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Body Start -->
   <div class="container-fluid product myBody py-5 my-5">
        <div class="container py-5">
            
            <div class="owl-carousel product-carousel wow fadeInUp mb-5 pb-md-5" data-wow-delay="0.5s">

                <?php 
    //  $conn = new PDO("mysql:host=localhost;id21758579_farm", "id21758579_root", "Mcsc1@kaung");

    // Check for errors in connection
    // if ($conn === false) {
        // die("Connection failed");
    // }
    $sqlArticle = "SELECT * FROM articles";
    $resultArticle = $conn->prepare($sqlArticle);
    $resultArticle->execute();
    $articleData = $resultArticle->fetchAll(PDO::FETCH_ASSOC);
    foreach ($articleData as $articles) {
    ?>
                <a href="article_detail.php?pid=<?php echo $articles['id']; ?>" class="d-block product-item rounded m-0 ">
                    <img src="admin/<?php echo $articles['image'];?>" alt="">
                    <div class="product-description bg-white shadow-sm text-center p-2 position-relative mt-n3 mx-3 mx-md-4 mx-lg-3">
                        <span class="text-body p-0 m-0 artiTitle"><?php echo $articles['title'];?></span>
                    </div>
                </a>
               <?php 
    }
            ?>
            </div>
            <div class="row g-5">
    <?php 
        foreach ($articleData as $articles) {
    ?>
            <div class="col-12 col-md-4 col-lg-3">
                <a href="article_detail.php?pid=<?php echo $articles['id']; ?>" class="d-block product-item rounded m-0 ">
                    <img src="admin/<?php echo $articles['image'];?>" class="mx-0 mx-md-3 mx-lg-0 myimg" alt="">
                    <div class="product-description bg-white shadow-sm text-center p-2 position-relative mt-n3 mx-0 mx-md-4 mx-lg-3 mytitle">
                        <span class="text-body p-0 m-0 artiTitle"><?php echo $articles['title'];?></span>
                    </div>
                </a>
            </div>
    <?php
        }
    ?>
        
        </div>

        </div>
    </div>


    <!-- Body End -->


    
    <!-- Copyright Start -->
    <div class="container-fluid copyright mybody py-3 py-md-4">
        <div class="container">
            <div class="row m-0">
                <div class="col-md-6 text-center text-md-start m-0 mb-md-0">COPYRIGHT &copy; <span style="font-size: 12px;">2024</span>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <a class="fw-medium" href="index.php">Ayeyar Farmer Hub</a>, All Right Reserved.
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <!-- Template Javascript -->
    <script src="js/main_article.js"></script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</body>

</html>