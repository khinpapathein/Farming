<?php session_start();
    include_once('includes/config.php');
    if(isset($_POST['update'])){
        $name = $_POST['name'];
        $address = $_POST['address'];
        $userid = $_SESSION['userId'];

        $sql = "update registration set name=:name, address=:address where id=:userid";
        $data = [
            'name' => $name,
            'address' => $address,
            'userid' => $userid
        ];
        $stmt = $conn->prepare($sql);
        $stmt->execute($data);
        $count = $stmt->rowCount();
        if($count > 0){
            echo "<script>alert('သင့်၏ အကောင့်အချက်အလက်များ အောင်မြင်စွာပြင်ဆင်ပြီး ဖြစ်ပါသည်။');</script>";
            echo "<script type='text/javascript'> document.location = 'profile.php'; </script>";
        }
    }
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
        @media only screen and (min-width: 300px) {
            .myBody{
                font-size: 14px;
            }
            .mypf{
                padding: 0px 30px 50px 30px;
            }
            .myhr{
                display: none;
            }
            .mynav{
                margin-top: 30px;
            }
            .rightSide{
                max-height: calc(100vh - 170px);
                overflow-y: auto;
                padding: 5px;
            }
            td:nth-child(odd) {
                width: 100px;
            }
            table,tr,td{
                border: 1px solid black;
                border-collapse: collapse;
                padding: 10px 10px;
            }
            table{
                margin-top: 10px;
                width: 100%;
            }
            .back{
                text-decoration: underline;
                font-size: 17px;
            }
        }
        @media only screen and (min-width: 500px) {
            .myBody{
                font-size: 15px;
            }
            .rightSide{
                max-height: calc(100vh - 170px);
                overflow-y: auto;
                padding: 5px;
            }
            .myhr{
                display: block;
            }
            td:nth-child(odd) {
                width: 100px;
            }
            table,tr,td{
                border: 1px solid black;
                border-collapse: collapse;
                padding: 10px 10px;
            }
            table{
                width: 100%;
            }
        }
        @media only screen and (min-width: 1000px) {
            .myprofile{
                min-width: 110px;
            }
            .rightSide{
                max-height: calc(100vh - 170px);
                overflow-y: auto;
                padding: 5px;
            }
            td:nth-child(odd) {
                width: 200px;
            }
            table,tr,td{
                border: 1px solid black;
                border-collapse: collapse;
                padding: 10px 10px;
            }
            table{
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->

    
    <!-- Navbar Start -->
    <div class="bg-white sticky-top" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
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
                            <a href="#" class="nav-link dropdown-toggle px-2 mx-0" data-bs-toggle="dropdown">ဆောင်းပါးနှင့်စာအုပ်စာစောင်များ</a>
                            <div class="dropdown-menu bg-light rounded-0 m-0">
                                <a href="article1.php" class="dropdown-item">ဆောင်းပါး</a>
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
                            <a href="#" class="nav-link active dropdown-toggle px-2 mx-0 myprofile" data-bs-toggle="dropdown"><?php echo $result['name'];?></a>
                            <div class="dropdown-menu bg-light rounded-0 m-0" style="min-width: 7rem!important;">
                                <a href="profile.php" class="dropdown-item active">ပရိုဖိုင်</a>
                                <a href="logout.php" class="dropdown-item" onClick="return confirm('Are you sure to logout!');">logout ထွက်ပါ</a>
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

    <!-- Body Start -->
    <?php
        $userid = $_SESSION['userId'];
        $sql = "select * from registration where id=:userid";
        $input =[
            'userid' => $userid
        ];
        $stmt = $conn->prepare($sql);
        $stmt->execute($input);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        // for pending post count
        $sql_pending = "select * from questions where status=:status && user_id=:userid";
        $pendingStatus = "Pending";
        $input_pending =[
            'status' => $pendingStatus,
            'userid' => $userid
        ];
        $stmt_pending = $conn->prepare($sql_pending);
        $stmt_pending->execute($input_pending);
        $count_pending = $stmt_pending->rowCount();

    // for accepted post count
        $sql_accepted = "select * from questions where status=:status && user_id=:userid";
        $acceptedStatus = "Active";

        $input_accepted =[
            'status' => $acceptedStatus,
            'userid' => $userid
        ];
        $stmt_accepted = $conn->prepare($sql_accepted);
        $stmt_accepted->execute($input_accepted);
        $count_accepted = $stmt_accepted->rowCount();

    // for comments count
        $commentStatus = "Active";
        $sql_comments = "select * from comments where status=:status && user_id=:userid";
        $input_comments =[
            'status' => $commentStatus,
            'userid' => $userid
        ];
        $stmt_comments = $conn->prepare($sql_comments);
        $stmt_comments->execute($input_comments);
        $count_comments = $stmt_comments->rowCount();

    ?>
    <div class="container-fluid myBody" style="margin-top: 5rem; margin-bottom: 6rem;">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 col-lg-3 mypf">
                    <div class="d-flex justify-content-center">
                        <img src="img/profile.png" alt="" width="170px;">
                    </div>
                    <h5 class="text-center"><?php echo $result['name'];?></h5>                    
                    <div class="mt-md-5 mx-md-2 mynav">
                        <hr class="my-2"><a href="profile.php" class="fw-bold">သင့်၏အကောင့်</a>
                        <hr class="my-2"><a href="myAcc_pending.php" class="text-dark">တောင်းဆိုထားသောပို့စ်များ <span style="font-size: 15pt; font-weight: 600; color: red;"><?php echo $count_pending;?></a>
                        <hr class="my-2"><a href="myAcc_accepted.php" class="text-dark">လက်ခံထားသောပို့စ်များ <span style="font-size: 15pt; font-weight: 600; color: red;"><?php echo $count_accepted;?></span> ခု</a>
                        <hr class="my-2"><a href="comments.php" class="text-dark">မှတ်ချက်များ <span style="font-size: 15pt; font-weight: 600; color: red;"><?php echo $count_comments;?></span> ခု</a>
                    </div>
                </div>
                <div class="col-md-1 col-lg-1 p-0 myhr" style="margin-top: rem;">
                    <hr style="width: 5px; height: 400px;">
                </div>
                <div class="col-12 col-md-7 col-lg-8 p-0 rightSide">
                    <a href="profile.php" class="back">back</a>
                    <form method="post" name="update">
                        <table class="mt-md-3">
                            <tr>
                                <td>အမည်</td>
                                <td><input type="text" class="form-control" name="name" id="" value="<?php echo $result['name'];?>"></td>
                            </tr>
                            <tr>
                                <td>ဖုန်းနံပါတ်</td>
                                <td><input type="text" class="form-control" name="phno" id="" value="<?php echo $result['phno'];?>" readonly></td>
                            </tr>
                            <tr>
                                <td>နေရပ်လိပ်စာ</td>
                                <td><input type="text" class="form-control" name="address" id="" value="<?php echo $result['address'];?>"></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <button type="submit" name="update" class="btn btn-success">Update</button>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Body End -->


    
    <!-- Copyright Start -->
    <!-- <div class="container-fluid copyright py-4 copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="fw-medium" href="#">Your Site Name</a>, All Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end"> -->
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    <!-- Designed By <a class="fw-medium" href="https://htmlcodex.com">HTML Codex</a> Distributed By <a class="fw-medium" href="https://themewagon.com">ThemeWagon</a>
                </div>
            </div>
        </div>
    </div> -->
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
    <script src="js/main.js"></script>
</body>

</html>