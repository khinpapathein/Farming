<?php 
    session_start();
    include_once('includes/config.php');
    // Add Post
    if(isset($_POST['addPost'])){
        $title = $_POST['title'];
        $userid = $_SESSION['userId'];

        $image_status = $_FILES['image'];
        $filename = $_FILES['image']['name'];
        $tempname = $_FILES['image']['tmp_name'];
        $folder ="images/".$filename;
        $status = "Pending";

        if($filename == null){
            $default_filename = 'questionDefault.webp';
            $default_tempname = 'C:\xampp\tmp\phpD581.tmp';
            $folder ="images/".$default_filename;

            $sql = "insert into questions(title, photo, user_id, status) values (:title, :photo, :user_id, :status)";
            $data = [
                'title' => $title,
                'photo' => $default_filename,
                'user_id' => $userid,
                'status' => $status
            ];
            $stmt=$conn->prepare($sql);
            $stmt->execute($data);

            if(!file_exists($folder)){
                move_uploaded_file($default_tempname, $folder);
            }
            echo "<script>alert('Post successful');</script>";
            echo "<script type='text/javascript'> document.location = 'myAcc_pending.php'; </script>";
        }
        else{
                $allowedExts=array("jpg","jpeg","gif","png");
                $extension=end(explode(".", $_FILES["image"]["name"]));
                if((($_FILES["image"]["type"] == "image/gif")||($_FILES["image"]["type"] == "image/jpeg")||
                ($_FILES["image"]["type"]=="image/png")||($_FILES["image"]["type"] == "image/pjpeg")) && in_array($extension,$allowedExts))
                { 
                if($_FILES["image"]["error"] > 0){
                    echo "<script type='text/javascript'>";
                    echo "alert('Error image upload file')";
                    echo "</script>";
                }
                else{
                    $sql = "insert into questions(title, photo, user_id, status) values (:title, :photo, :user_id, :status)";
                    $data = [
                        'title' => $title,
                        'photo' => $filename,
                        'user_id' => $userid,
                        'status' => $status
                    ];
                    $stmt=$conn->prepare($sql);
                    $stmt->execute($data);

                    if(!file_exists($folder)){
                        move_uploaded_file($tempname, $folder);
                    }
                    echo "<script>alert('Post successful');</script>";
                    echo "<script type='text/javascript'> document.location = 'myAcc_pending.php'; </script>";
                    }
            }

        }
    }


    // Add Comments
    if(isset($_POST['addComment'])){
        $comment = $_POST['comment'];
        $userid = $_SESSION['userId'];
        
        $quesId = $_POST['quesId'];
        $status = "Active";
        $sql = "insert into comments(comment,ques_id, user_id, status) values (:comment,:ques_id, :user_id, :status)";
        $data = [
            'comment' => $comment,
            'ques_id' => $quesId,
            'user_id' => $userid,
            'status' => $status
        ];
        $statement = $conn->prepare($sql);
        $statement->execute($data);
        $result = $statement->rowCount();
        if($result > 0){
            echo "<script>alert('Comment successful');</script>";
            echo "<script type='text/javascript'>document.getElementById('moreComment$quesId').style.display='flex';</script>";
            echo "<script>document.location='discussion.php';</script>";
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
    <link href="css/custom_styles.css" rel="stylesheet" />

    <style>
        #openModalBtn {
        padding: 10px 20px;
        font-size: 16px;
        cursor: pointer;
        }
        .morecommentsBody {
            max-height: calc(100vh - 130px);
            overflow-y: auto;
            padding: 5px;
        }
        /* Modal Styles */
        @media only screen and (min-width: 300px) {
            .container p, .container button{
                font-size: 12px;
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
            .mybody{
                font-size: 13px;
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
            
        }
        @media only screen and (min-width: 500px) {
            /* styles for browsers larger than 1440px; */
            .container p, .container button{
                font-size: 15px;
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
            .myprofile{
                min-width: 110px;
            }
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
            .mybody{
                font-size: 15px;
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
                        <a href="discussion.php" class="nav-item nav-link active px-2 mx-0">အမေးအဖြေ</a>
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


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-2 text-dark mb-4 animated slideInDown">အမေးအဖြေ</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="index.php">မူလစာမျက်နှာ</a></li>
                    <li class="breadcrumb-item text-dark" aria-current="page">အမေးအဖြေ</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Body Start -->    
    <div class="container-fluid" style="margin-bottom: 6rem;">
        <div class="container">
        <main class="flex-shrink-0">
            <div class="container px-sm-1 px-md-2 px-lg-4 my-3">
                <div class="d-flex justify-content-end mx_md-5">
                    <?php                   
                    ?>
                    <button type="button" class="btn btn-success py-2"  onclick="<?php if(isset($_SESSION['userId'])){
                                ?>
                                document.getElementById('addPostBtn').style.display='block';
                            <?php }else{ ?>alert('please login'); document.location='login.php';<?php }?>">
                        ပို့စ်တင်မည်
                    </button>
                </div>
        <?php 
            $status = "Active";
            $sql = "select * from questions where status=:status";
            $input =[
                'status' => $status
            ];
            $result = $conn->prepare($sql);
            $result->execute($input);
            $data = array_reverse($result->fetchAll(PDO::FETCH_ASSOC));

            foreach ($data as $row) {
        ?>
                <div class="mydiv py-4 px-2 px-sm-4 px-lg-5 mx-lg-5 my-md-5">
                <?php
                    $userId = $row['user_id'];
                    $sql = "select * from registration where id=:userId";
                    $input =[
                        'userId' => $userId
                    ];
                    $result = $conn->prepare($sql);
                    $result->execute($input);
                    $data = $result->fetch(PDO::FETCH_ASSOC);
                ?>
                    
                    <div class="row">
                        <div class="col-sm-12 col-md-4">
                            <img src="images/<?php echo $row['photo'];?>" alt="" width="100%" style="height: 200px;"  onclick="document.getElementById('photo<?php echo $row['id'];?>').style.display='block'" style="cursor: pointer;">
                        </div>
                        <div class="col-sm-12 col-md-8">
                            <h6>မေး</h6>
                            <p class="py-1 fst-italic fw-bold text-decoration-underline"><?php echo $data['name'];?></p>
                            <p class="text-justify text-break" style="text-align: justify;"><?php echo $row['title'];?></p>
                        </div>
                    </div>
                    <!-- image popup modal -->
                    <div id="photo<?php echo $row['id'];?>" class="modal">
                        <div class="modal-content">
                            <div class="modal-header p-0">
                                <h5 class="modal-title" id="exampleModalLongTitle"></h5>
                                <span class="close mx-3" onclick="document.getElementById('photo<?php echo $row['id'];?>').style.display = 'none';">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <img src="images/<?php echo $row['photo'];?>" alt="">   
                            </div>
                        </div>
                    </div>                   

                    <?php 
                        $status1 = "Active";
                        $quesId = $row['id'];
                        $sql1 = "select * from comments where ques_id=:ques_id && status=:status";
                        $input1 =[
                            'ques_id' => $quesId,
                            'status' => $status
                        ];
                        $result1 = $conn->prepare($sql1);
                        $result1->execute($input1);
                        $data1 = $result1->fetch(PDO::FETCH_ASSOC);
                        if($data1 > 0){
                        ?>
                            <div class="m-3 comments">
                            <?php 
                            $userId = $data1['user_id'];
                            $sql2 = "select * from registration where id=:user_id";
                            $input2 =[
                                'user_id' => $userId
                            ];
                            $result2 = $conn->prepare($sql2);
                            $result2->execute($input2);
                            $data2 = $result2->fetch(PDO::FETCH_ASSOC);
                            ?>
                            <h6>ဖြေ</h6>
                            <p class="py-1 fst-italic fw-bold text-decoration-underline"><?php echo $data2['name'];?></p>
                            <p class="text-justify my-2" style="text-align: justify;"><?php echo $data1['comment'];?></p>
                        </div>
                        <div class="d-flex justify-content-end mx-4">
                            <button class="btn btn-success mybox py-2" onclick="document.getElementById('moreComment<?php echo $row['id'];?>').style.display='block'">
                                ပိုမိုကြည့်ရှုရန်
                            </button>
                        </div>
            <!-- more comments popup modal -->
            <div id="moreComment<?php echo $row['id'];?>" class="modal morecomments">
                <div class="modal-content">
                    <div class="modal-header p-0 mx-3">
                        <h5 class="modal-title" id="exampleModalLongTitle"></h5>
                        <span class="close" onclick="document.getElementById('moreComment<?php echo $row['id'];?>').style.display = 'none';">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body morecommentsBody">
                <?php
                    $userId = $row['user_id'];
                    $sql = "select * from registration where id=:userId";
                    $input =[
                        'userId' => $userId
                    ];
                    $result = $conn->prepare($sql);
                    $result->execute($input);
                    $data1 = $result->fetch(PDO::FETCH_ASSOC);
                ?>
                    <div class="moreCom">
                        <div class="d-flex justify-content-start">
                            <img src="images/<?php echo $row['photo'];?>" alt="" width="100%" height="100%" style="text-align: center:">
                        </div>                        
                        <div class="moreText ms-3 ">
                            <h6>မေး</h6>
                            <p class="fst-italic fw-bold text-decoration-underline"><?php echo $data1['name'];?></p>
                            <p class="text-justify" style="text-align: justify;margin-right: 10px;"><?php echo $row['title'];?></p>
                        </div>
                    </div>
                    

                    <?php 
                        $status1 = "Active";
                        $ques_id = $row['id'];
                        $sql1 = "select * from comments where ques_id=:ques_id && status=:status";
                        $input1 =[
                            'ques_id' => $ques_id,
                            'status' => $status
                        ];
                        $result1 = $conn->prepare($sql1);
                        $result1->execute($input1);
                        $data1 = $result1->fetchAll(PDO::FETCH_ASSOC);
                        if($data1 > 0){
                        ?>
                            <h6 class="mt-3 mb-0" style="text-align: justify;margin-left: 20px;">ဖြေ</h6>
                        <?php
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
                            <p class="text-justify" style="text-align: justify;margin-right: 10px;"><?php echo $row1['comment'];?></p>
                    </div>
                    
                    <?php
                            }
                    ?>
                    <div class="d-flex justify-content-end mx-4 my-2">                                
                        <button type="button" class="btn btn-success fw-bold py-2" onclick="<?php if(isset($_SESSION['userId'])){ ?>document.getElementById('<?php echo $row['id'];?>').style.display='block'; <?php }else{?> alert('please login'); document.location='login.php';<?php } ?>">
                            ပါဝင်ဆွေးနွေးမည်
                        </button>
                    </div>
                <!-- add comment popup modal -->
                    <div id="<?php echo $row['id'];?>" class="modal">
                        <div class="modal-content">
                            <div class="modal-header p-0">
                                <h5 class="modal-title" id="exampleModalLongTitle">ပါဝင်ဆွေးနွေးမည်</h5>
                                <span class="close" onclick="document.getElementById('<?php echo $row['id'];?>').style.display = 'none';">&times;</span>
                                </button>
                            </div>
                            <form method="post" name="addComment" action="" class="form-horizontal"  enctype="multipart/form-data">
                                <div class="modal-body">
                                    <div class="form-group">
                                    <input type="hidden" value="<?php echo $row['id'];?>" name="quesId">
                                        <label class="control-label d-flex justify-content-start "> မှတ်ချက် : </label>
                                        <div class="d-flex justify-content-end">
                                            <textarea name="comment" class="form-control" id="" cols="50" rows="5" required ></textarea>
                                        </div>
                                    </div>                     
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-danger" onclick="document.getElementById('<?php echo $row['id'];?>').style.display = 'none';">Close</button>                                
                                    <input type="submit" name="addComment" Value="တင်မည်" class="btn btn-primary">

                                </div>
                            </form>
                        </div>
                    </div>
                    <?php
                        }
                    ?>                   
                    </div>
                    
                </div>
            </div>
                    <?php
                        }
                        else{
                        ?>
                        <div class="d-flex justify-content-end mx-4 my-2">                                
                            <button type="button" class="btn btn-success fw-bold py-2" onclick="<?php if(isset($_SESSION['userId'])){
                                ?>
                                document.getElementById('<?php echo $row['id'];?>').style.display='block';
                            <?php }else{ ?>alert('please login'); document.location='login.php';<?php }?>">
                                ပါဝင်ဆွေးနွေးမည်
                            </button>
                        </div>
                        <!-- add comment popup modal -->
                        <div id="<?php echo $row['id'];?>" class="modal">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">မှတ်ချက်ရေးမည်</h5>
                                    <span class="close" onclick="document.getElementById('<?php echo $row['id'];?>').style.display = 'none';">&times;</span>
                                    </button>
                                </div>
                                <form method="post" name="addComment" action="" class="form-horizontal"  enctype="multipart/form-data">
                                    <div class="modal-body">
                                        <div class="form-group">
                                        <input type="hidden" value="<?php echo $row['id'];?>" name="quesId">
                                            <label class="control-label d-flex justify-content-start "> မှတ်ချက် : </label>
                                            <div class="d-flex justify-content-end">
                                                <textarea name="comment" class="form-control" id="" cols="50" rows="5" required ></textarea>
                                            </div>
                                        </div>                     
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-danger" onclick="document.getElementById('<?php echo $row['id'];?>').style.display = 'none';">Close</button>                                
                                        <input type="submit" name="addComment" Value="တင်မည်" class="btn btn-primary">

                                    </div>
                                </form>
                            </div>
                        </div>
                        <?php
                        }
                    ?>
                    
                </div>
            <?php 
            }
            ?>
            </div>
        </main>

            <!-- add post popup modal -->
            <div id="addPostBtn" class="modal">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">ပို့တင်မည်</h5>
                        <span class="close" onclick="document.getElementById('addPostBtn').style.display = 'none';">&times;</span>
                        </button>
                    </div>
                    <form method="post" name="addPost" action="" class="form-horizontal" enctype="multipart/form-data">
                        <div class="modal-body">
                                <div class="form-group">
                                    <label class="control-label d-flex justify-content-start "> Title : </label>
                                    <div class="d-flex justify-content-end">
                                        <textarea name="title" class="form-control" id="" cols="50" rows="5" required ></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="d-flex justify-content-start control-label"> Photo : </label>
                                    <div class="d-flex justify-content-start">
                                        <input type="file" name="image">
                                    </div>
                                </div>                        
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-danger" onclick="document.getElementById('addPostBtn').style.display = 'none';">Close</button>                                
                            <input type="submit" name="addPost" Value="Post" class="btn btn-primary">

                        </div>
                    </form>
                </div>
            </div>      

        </div>
    </div>
    <!-- Body End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright mybody py-3 py-md-4">
        <div class="container">
            <div class="row">
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
    <script src="js/main.js"></script>
    <script>
        // JavaScript to control the modal
        document.getElementById('openModalBtn').addEventListener('click', openModal);

        function openModal() {
            document.getElementById('myModal').style.display = 'flex';
        }

        function closeModal() {
            document.getElementById('myModal').style.display = 'none';
        }

        
    </script>
</body>

</html>