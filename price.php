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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Weather CSS -->
    <link rel="stylesheet" href="Assets\style.css">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <style>        
        /* Google Font Link */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

        .myNav{
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        }
        td{
            padding: 20px 0px;
        }
        @media only screen and (min-width: 300px) {
            .mybody{
                font-size: 13px;
            }
            /* header */
            .headerFont{
                font-size: 15px!important;
            }
        }
        @media only screen and (min-width: 1000px) {
            .myprofile{
                min-width: 110px;
            }
            .mybody{
                font-size: 15px;
            }
            /* header */
            .headerFont{
                font-size: 18px!important;
            }
            .myinner{
                width: 80%;
                margin-left: 10%;
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
    <div class="bg-white sticky-top myNav">
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
                        <a href="price.php" class="nav-item active nav-link px-2 mx-0">ဈေးနှုန်းပေါက်ဈေး</a>
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
        <div class="container text-center py-5 my-0">
            <h1 class="display-2 text-dark mb-4 animated slideInDown">ဈေးနှုန်းပေါက်ဈေး</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="index.php" class="headerFont">မူလစာမျက်နှာ</a></li>
                    <li class="breadcrumb-item text-dark headerFont" aria-current="page">ဈေးနှုန်းပေါက်ဈေး</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Body Start -->
    <div class="container mybody px-md-5 mb-5">
        <div>
            <h4 class="my-md-4">စပါးဈေးနှုန်း ပေါက်ဈေးများ( <span style="color: #88b44e;">latest update</span> ) </h4>
            <div class="myinner d-flex justify-content-center">
                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th scope="col">အမျိုးအမည်</th>
                        <th scope="col">ယူနစ်</th>
                        <th scope="col">နိမ့်/မြင့် ဈေးနှုန်း (ကျပ်)</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                        $sql = "select * from paddy";
                        $result = $conn->prepare($sql);
                        $result->execute();
                        $data = $result->fetchAll(PDO::FETCH_ASSOC);
                        $count = 1;
                        foreach ($data as $row){

                            // for paddy price
                            $pid = $row['id'];
                            $sql2 = "select * from paddyprice where paddy_id=:pid";
                            $inputData = [
                                'pid' => $pid
                            ];
                            $result2 = $conn->prepare($sql2);
                            $result2->execute($inputData);
                            $data2 = $result2->fetchAll(PDO::FETCH_ASSOC);
                            $revArray = array_reverse($data2);
                            foreach($revArray as $output){
                    ?>
                        <tr>
                            <td class="text-break"><?php echo $row['name'];?></td>
                            <td class="text-break" style="min-width: 110px;">တင်းတစ်ရာ</td>
                            <td class="text-break"><?php echo number_format($output['price']);?></td>
                        </tr>                                
                    <?php
                            break;
                            }            
                        }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
        

        <div class="mt-5 mb-5 pb-5">
            <h4 class="my-md-4">ပဲဈေးနှုန်း ပေါက်ဈေးများ( <span style="color: #88b44e;">latest update</span> )</h4>
            <div class="myinner d-flex justify-content-center">
                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th scope="col">အမျိုးအမည်</th>
                        <th scope="col">ယူနစ်</th>
                        <th scope="col">နိမ့်/မြင့် ဈေးနှုန်း (ကျပ်)</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                        $sql = "select * from beans_type";
                        $result = $conn->prepare($sql);
                        $result->execute();
                        $data = $result->fetchAll(PDO::FETCH_ASSOC);
                        $count = 1;
                        foreach ($data as $row){

                            // for bean price
                            $bid = $row['id'];
                            $sql2 = "select * from bean_price where bean_id=:bid";
                            $inputData = [
                                'bid' => $bid
                            ];
                            $result2 = $conn->prepare($sql2);
                            $result2->execute($inputData);
                            $data2 = $result2->fetchAll(PDO::FETCH_ASSOC);
                            $revArray = array_reverse($data2);
                            foreach($revArray as $output){
                    ?>
                        <tr>
                            <td class="text-break"><?php echo $row['name'];?></td>
                            <td class="text-break" style="min-width: 110px;">တစ်တင်း</td>
                            <td class="text-break"><?php echo number_format($output['price']);?> </td>
                        </tr>                                
                    <?php
                            break;
                            }            
                        }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Body End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright mybody py-3 py-md-4">
        <div class="container">
            <!-- <p style="text-align: center;">COPYRIGHT &copy; <span style="font-size: 12px;">2024</span><a class="fw-medium" href="#">Ayer Farmer Hub</a>, All Right Reserved.</p> -->

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