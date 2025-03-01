<?php session_start();
    include_once('includes/config.php');

    // Delete
    if(isset($_GET['deleteId'])){
        $quesid= $_GET['deleteId'];
        $conn->beginTransaction();

        $sql = "update questions set status=:status where id=:quesid";
        $status = "Delete";
        $data = [
            'status' => $status,
            'quesid' => $quesid
        ];
        $result = $conn->prepare($sql);
        $result->execute($data);

        $sql1 = "update comments set status=:status where ques_id=:quesid";
        $status1 = "Delete";
        $data1 = [
            'status' => $status,
            'quesid' => $quesid
        ];
        $result1 = $conn->prepare($sql1);
        $result1->execute($data1);
        $conn->commit();

        $count = $result->rowCount();
        if($count > 0){
            echo "<script>alert('Deleted successful');</script>";
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
        .morecommentsBody {
            max-height: calc(100vh - 210px);
            overflow-y: auto;
            padding: 5px;
        }
        .mybtn{
            background: #d9534f;
            border: none;
            border-radius: 5px;
        }
        .mybtn:hover{
            background: #b30000;
        }
        .mybtn a{
            color: white;
        }
        @media only screen and (min-width: 300px) {
            .body_start{
                font-size: 13px!important;
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


            /* accepted posts */
            .mydiv{
                margin: 20px 20px 20px 0px;
                padding: 0;
                box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
                cursor: pointer;
            }
            .mydiv:hover{
                box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            }
            .postimg{
                width: 200px;
                height: auto;
            }
            .modal {
                display: none;
                position: fixed;
                top: 5%;
                left: 5%;
                width: 90%;
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
            .morecommentsBody .moreCom img{
                width: 75px!important;
                margin : 0px!important;
                height: 75px!important;
                align : left!important;               
            }
            .morecomments p, .morecomments button{
                font-size: 12px!important;
            }

            /* pending posts */
            .noPosts{
                font-size: 14pt;
            }
        }
        @media only screen and (min-width: 370px) {
            .modal-body img{
                width: 270px;
                height: auto;
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

            /* pending posts */
            .noPosts{
                font-size: 17pt;
            }
        }
        @media only screen and (min-width: 500px) {
            .body_start{
                font-size: 15px!important;
            }
            .rightSide{
                max-height: calc(100vh - 120px);
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

            /* accepted posts */
            .postimg{
                width: 130px;
                height: auto;
            }
            .morecomments{
                top: 10%;
                left: 10%!important;
                width: 80%!important;
            }
            .modal {
                display: none;
                position: fixed;
                top: 10%;
                left: 15%;
                width: auto;
                height: auto;
                background-color: rgba(0, 0, 0, 0.5);
                align-items: center;
                justify-content: center;
            }
            .modal-body img{
                width: 500px;
                height: auto;
            }
            .morecomments p, .morecomments button{
                font-size: 14px!important;
            }
            .morecommentsBody .moreCom img{
                width: 150px!important;
                margin : 0px!important;
                height: 150px!important;
                align : left!important;               
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
                left: 25%;
                width: auto;
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
                min-width: 110px;
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
            .postimg{
                width: 150px;
                height: auto;
            }
            
            /* pending posts */
            .noPosts{
                font-size: 19pt;
            }
        }
        @media only screen and (min-width: 1025px) {
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
                left: 30%;
                width: auto;
                height: auto;
                background-color: rgba(0, 0, 0, 0.5);
                align-items: center;
                justify-content: center;
            }
            .morecommentsBody img{
                width: 500px;
                height: auto;
            }
            .morecommentsBody .moreCom img{
                width: 200px!important;
                margin : 0px!important;
                height: 200px!important;
                align : left!important;               
            }
            .morecomments p, .morecomments button{
                font-size: 16px!important;
            }
        }
        .morecommentsBody .moreCom{
            display: flex;
            text-align: left;
        }
        .morecommentsBody .moreCom .moreText p{
            text-align: left;
        }
        .morecommentsBody .comments{
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
    <div class="container-fluid body_start" style="margin-top: 5rem; margin-bottom: 6rem;">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 col-lg-3 mypf">
                    <div class="d-flex justify-content-center">
                        <img src="img/profile.png" alt="" width="170px;">
                    </div>
                    <h5 class="text-center"><?php echo $result['name'];?></h5>                    
                    <div class="mt-md-5 mx-md-2 mynav">
                        <hr class="my-2"><a href="profile.php" class="text-dark">သင့်၏အကောင့်</a>
                        <hr class="my-2"><a href="myAcc_pending.php" class="text-dark">တောင်းဆိုထားသောပို့စ်များ  <span style="font-size: 15pt; font-weight: 600; color: red;"><?php echo $count_pending;?></span> ခု</a>
                        <hr class="my-2"><a href="myAcc_accepted.php" class="fw-bold">လက်ခံထားသောပို့စ်များ <span style="font-size: 15pt; font-weight: 600; color: red;"><?php echo $count_accepted;?></span> ခု</a>
                        <hr class="my-2"><a href="myAcc_comments.php" class="text-dark">မှတ်ချက်များ <span style="font-size: 15pt; font-weight: 600; color: red;"><?php echo $count_comments;?></span> ခု</a>
                    </div>
                </div>
                <div class="col-md-1 col-lg-1 p-0 myhr" style="margin-top: rem;">
                    <hr style="width: 5px; height: 400px;">
                </div>
                <div class="col-12 col-md-7 col-lg-8 p-0 rightSide">
        <?php 
            $userid = $result['id'];
            $status = "Active";
            $sql="select * from questions where status=:status AND user_id=:userid";
            $inputdata = [
                'status' => $status,
                'userid' => $userid
            ];
            $result = $conn->prepare($sql);
            $result->execute($inputdata);
            if($result->rowCount()){
                $data = array_reverse($result->fetchAll(PDO::FETCH_ASSOC));
                ?>
                <h3 class="mb-3 mb-md-5 noPosts">လက်ခံထားသောပို့စ်များ</h3>
            <?php
                foreach($data as $row){
            ?>
                        <div class="row mydiv" onclick="document.getElementById('<?php echo $row['id'];?>').style.display='block'">
                            <div class="col-sm-12 col-md-4 col-lg-3 p-0">
                                <img src="images/<?php echo $row['photo'];?>" alt="" class="postimg">
                            </div>
                            <div class="col-sm-12 col-md-8 col-lg-9 p-2">
                                <p class="text-justify text-break "><?php echo $row['title'];?></p>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button type="btn btn-danger" class="mybtn m-3"><a href="myAcc_accepted.php?deleteId=<?php echo $row['id'];?>" onClick="return confirm('Are you sure to delete');">Delete</a></button>
                            </div>
                        </div>
            <!-- question more details popup modal -->
                <div id="<?php echo $row['id'];?>" class="modal morecomments">
                    <div class="modal-content">
                        <div class="modal-header p-0 mx-3">
                            <h5 class="modal-title" id="exampleModalLongTitle"></h5>
                            <span class="close" onclick="document.getElementById('<?php echo $row['id'];?>').style.display = 'none';">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body morecommentsBody">
                            <div class="moreCom">
                                <div class="d-flex justify-content-start">
                                    <img src="images/<?php echo $row['photo'];?>" alt="" width="100%" height="100%" style="text-align: center:">
                                </div>                        
                                <div class="moreText ms-3 ">
                                    <p class="text-justify"><?php echo $row['title'];?></p>
                                </div>
                            </div>
                        

                        <?php 
                            $status1 = "Active";
                            $ques_id = $row['id'];
                            $sql1 = "select * from comments where ques_id=:ques_id && status=:status";
                            $input1 =[
                                'ques_id' => $ques_id,
                                'status' => $status1
                            ];
                            $result1 = $conn->prepare($sql1);
                            $result1->execute($input1);
                            $data1 = $result1->fetchAll(PDO::FETCH_ASSOC);
                            if($data1 > 0){
                                foreach($data1 as $row1){
                            ?>
                                    <div class="m-3 comments">
                                    <?php 
                                        $userId = $row1['user_id'];
                                        $sql2 = "select * from registration where id=:user_id";
                                        $input2 =[
                                            'user_id' => $userId
                                        ];
                                        $result2 = $conn->prepare($sql2);
                                        $result2->execute($input2);
                                        $data2 = $result2->fetch(PDO::FETCH_ASSOC);
                                        ?>
                                        <p class="fst-italic fw-bold text-decoration-underline"><?php echo $data2['name'];?></p>
                                        <p class="text-justify"><?php echo $row1['comment'];?></p>
                                    </div>
                        
                        <?php
                                }
                            }
                        ?>                   
                        </div>
                    </div>
                </div>
            <?php
                }
            }
            else{
            ?>
                <h3 class="px-2 px-md-5 noPosts text-danger">လက်ခံထားသောပို့စ် မရှိပါ။</h3>
            <?php
            }
            ?>           
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Body End -->


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