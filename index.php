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

    <!-- Weather CSS -->
    <link rel="stylesheet" href="Assets\style.css">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Comic+Neue:wght@700&display=swap');
        .details{
            max-height: calc(100vh - 100px);
            overflow-y: auto;
        }
        @media only screen and (min-width: 300px) {
            .cinner{
                height: 300px;
            }
            .mybody{
                font-size: 13px;
            }
            .btnfontStyle{
                font-size: 11px!important;
            }
            .greeting{
                font-size: 15pt;
            }

            /* mission */
           .mission{
                font-size: 13px;
           }

            /* Article */
            .article{
                font-size: 13px;
            }
            .articleTitle{
                font-size: 17pt;
            }
            .article_title{
                font-size: 12pt;
            }
            .articleBody{
                height: 205px!important;
            }
            .section-title{
                padding-bottom: 20px;
                margin-bottom: 25px;
            }
            .product-item{
                cursor: pointer;
            }
            /* modal popup */
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

            /* type */
            .type{
                width: 90%!important;
                height: 200px!important;
            }
            .typeBody{
                font-size: 13px;
            }
            .typeName{
                font-size: 13pt;
            }

            /* weather */
            .weather, .weatherinput{
                font-size: 13px;
            }

            /* FAQs */
            .myBtn{
                font-size: 13px;
            }

            /* contact us */
            .contact_title{
                font-size: 12pt;
            }
            .intro{
                font-size: 14px;
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
        }
        @media only screen and (min-width: 400px) {
            .cinner{
                height: 300px;
            }
            .mybody{
                font-size: 14px;
            }

            /* Article */
            .article{
                font-size: 13px;
            }
            .article_title{
                font-size: 13pt;
            }
            /* type */
            .type{
                width: 70%!important;
                height: 200px!important;
            }
            .typeBody{
                font-size: 13px;
                background-color: #EFF3E9;
            }

            /* FAQs */
            .myBtn{
                font-size: 15px;
            }

        }
        @media only screen and (min-width: 500px) {
            .cinner{
                height: 400px;
            }
            .btnfontStyle{
                font-size: 14px;
            }

            /* Article */
            .article{
                font-size: 14px;
            }
            .articleTitle{
                font-size: 19pt;
            }
            .article_title{
                font-size: 12pt;
            }
            .article_title{
                font-size: 14pt;
            }
            .section-title{
                padding-bottom: 25px;
                margin-bottom: 30px;
            }

            /* modal popup */
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

            /* type */
            .typeName{
                font-size: 14pt;
            }

            /* weather */
            .weather{
                font-size: 13px;
            }
            .weatherinput{
                font-size: 11px;
            }

            /* contact us */
            .contact_title{
                font-size: 14pt;
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
                min-width: 110px;
            }
            .cinner{
                height: 500px;
            }
            .intro{
                font-size: 16px!important;
            }
            .greeting{
                font-size: 39pt;
            }
            .btnfontStyle{
                font-size: 15px;
            }

            /* Vision | Mission*/
            .firstimg{
                height: 300px;
            }
            .secimg{
                height: 150px;
                width: 150px;
            }
            .mybody{
                font-size: 14px;
            }

            /* Articles */
            .article{
                font-size: 14px;
            }
            .articleTitle{
                font-size: 25pt;
            }
            .article_title{
                font-size: 14pt;
            }
            .articleBody{
                height: 223px!important;
            }.section-title{
                padding-bottom: 25px;
                margin-bottom: 30px;
            }

            /* modal popup */
            .modal {
                display: none;
                position: fixed;
                top: 5%;
                left: 20%;
                width: 60%;
                height: auto;
                background-color: rgba(0, 0, 0, 0.5);
                align-items: center;
                justify-content: center;
            }


            /* type */
            .type{
                width: 100%!important;
                height: 300px!important;
            }
            .typeBody{
                font-size: 14px;
            }
            .typeName{
                font-size: 16pt;
            }

            /* weather */
            .weather{
                font-size: 14px;
            }            
        }
        @media only screen and (min-width: 1030px) {
            .weatherinput{
                font-size: 14px;
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
                        <a href="index.php" class="nav-item nav-link active px-2 mx-0">မူလစာမျက်နှာ</a>
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


    <!-- Carousel Start -->
    <div class="container-fluid px-0 mb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner cinner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/paddy3.jpeg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center introBody mb-5">
                                <div class="col-lg-7 mb-5">
                                    <p class="text-white animated zoomIn intro mt-5 mb-md-3">Welcome to <strong class="text-dark">AYEYARFARMERHUB</strong></p>
                                    <h1 class="display-1 text-dark mt-4 mb-5 animated zoomIn greeting">စိုက်ပျိုးစီးပွား ပြည်ထွန်းကား</h1>
                                    <a href="paddyCost.php" class="btn btn-light rounded-pill py-3 px-2 px-md-3 mb-5 animated zoomIn btnfontStyle">ခန့်မှန်းကုန်ကျငွေ တွက်မည်(စပါး)</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100 h-100" src="img/carousel_bean.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center introBody mb-5">
                                <div class="col-lg-9 mb-5">
                                    <!-- <p class="text-white animated zoomIn intro mt-5 mb-md-3">Welcome to <strong class="text-dark">AYERFARMERHUB</strong></p> -->
                                    <h3 class="display-1 text-dark mt-2 mb-4 animated zoomIn greeting" style="line-height: 1.7;">ပိုမိုခေတ်မှီကောင်းမွန်သော စိုက်ပျိုးရေးကဏ္ဍအတွက် <span class="text-white" style="font-family: 'Comic Neue', cursive;">"AyeyarFarmerHub"</span></h3>
                                    <a href="beanCost.php" class="btn btn-light rounded-pill py-3 px-2 px-md-3 mb-4 animated zoomIn btnfontStyle">ခန့်မှန်းကုန်ကျငွေ တွက်မည်(ပဲ)</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- vision, mission Start -->
    <div class="container-xxl py-5 mybody">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="row g-3">
                        <div class="col-6 text-end">
                            <img class="img-fluid bg-white w-100 mb-3 wow fadeIn firstimg" data-wow-delay="0.1s" src="img/vission1.jpg" alt="">
                            <img class="img-fluid bg-white w-50 wow fadeIn secimg" data-wow-delay="0.2s" src="img/vission3.jpg" alt="">
                        </div>
                        <div class="col-6">
                            <img class="img-fluid bg-white w-50 mb-3 wow fadeIn secimg" data-wow-delay="0.3s" src="img/vission2.jpg" alt="">
                            <img class="img-fluid bg-white w-100 wow fadeIn firstimg" data-wow-delay="0.4s" src="img/vission4.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="section-title">
                        <!-- <p class="fs-5 fw-medium fst-italic text-primary">About Us</p> -->
                        <h1 class="display-6 articleTitle">Vision | Mission</h1>
                    </div>
                    <div class="row g-3 mb-4">
                        <div class="col-sm-4">
                            <img class="img-fluid bg-white w-100" src="img/img3.webp" alt="">
                        </div>
                        <div class="col-sm-8">
                            <h5 style="margin-left: 10px;">Vision</h5>
                            <p class="mb-0">
                                <ul style="list-style-type:disc; margin-left: 10px;">
                                    <li class="mission m-0 p-0" style="line-height: 1.6; text-align: justify;">မိရိုးဖလာစိုက်ပျိုးရေးကို ခေတ်မီနည်းပညာများဖြင့် ပေါင်းစပ်၍ ဧရာဝတီတိုင်း၏ စိုက်ပျိုးရေးကဏ္ဍကို တိုးတက်မြင့်မားလာစေရန်၊ ဒစ်ဂျစ်တယ်နည်းပညာဖြင့် စွမ်းဆောင်နိုင်သော လယ်သမားအသိုက်အဝန်းကို ဖန်တီးရန်။</li>
                                </ul>
                            </p>
                        </div>
                    </div>
                    <div class="border-top mb-4"></div>
                    <div class="row g-3">
                        <div class="col-sm-8">
                            <h5>Mission</h5>
                            <p class="mb-0">
                                <ul style="list-style-type:disc;">
                                    <li class="mission m-0 p-0" style="line-height: 1.6; text-align: justify;">တောင်သူများအားအချိန်နှင့်တစ်ပြေးညီ မိုးလေဝသခန့်မှန်းချက်များ၊ ပူးပေါင်းဆွေးနွေးမှုများနှင့် အကျိုးအမြတ် ခန့်မှန်းနိုင်စွမ်းများအပါအဝင် လက်လှမ်းမီနိုင်သော နည်းပညာသုံးကိရိယာများနှင့် အရင်းအမြစ်များကို ပံ့ပိုးပေးခြင်း၊ ဒေသတွင်း သာယာဝပြောသော စိုက်ပျိုးရေးအတွက် ဘဏ္ဍာရေးဆိုင်ရာ စွမ်းပကားကို မြှင့်တင်ပေးခြင်း။</li>
                                </ul>
                            </p>
                        </div>
                        <div class="col-sm-4">
                            <img class="img-fluid bg-white w-100" src="img/img13.jpeg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- vision, mission End -->


    <!-- Type Start -->
    <div class="container-fluid py-4 py-md-5 my-md-5 typeBody">
        <div class="container">
            <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <!-- <p class="fs-5 fw-medium fst-italic text-primary">Online Store</p> -->
                <h1 class="display-6 articleTitle">သီးနှံ</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="store-item position-relative text-center">
                        <img  src="img/imgg.png" class="type" alt="">
                        <div class="p-2 p-md-4">
                            <h4 class="mb-3 typeName">စပါး</h4>
                            <p style="text-align: justify;">စပါးသည် မြက်ပင်မျိုးဖြစ်သည်။ အများအားဖြင့် တစ်နှစ်ခံ ပင်မျိုး ဖြစ်၍ အချို့အပူပိုင်းဒေသများတွင် နှစ်ကြာခံပင်မျိုး ဖြစ်သည်။ မြန်မာလယ်သမား များသည် လွယ်ကူစိမ့် သောငှာ စပါးပင်တို့၏ သက်တမ်းကိုလိုက်၍ (၁) ကောက် လျင်၊ (၂)ကောက်လတ်၊ (၃)ကောက်ကြီး၊ (၄) မုရင်း၊ ဟူ၍ စပါးမျိုး ၄မျိုး ခွဲခြားထားကြသည်။</p>
                        </div>
                        <div class="store-overlay">
                            <a href="paddy.php" class="btn btn-primary rounded-pill py-2 px-4 m-2">ပိုမိုကြည့်ရှုရန်<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="store-item position-relative text-center">
                        <img src="img/black_beans.png" class="type" alt="">
                        <div class="p-2 p-md-4">
                            <h4 class="mb-3 typeName">မတ်ပဲ</h4>
                            <p style="text-align: justify;">မတ်ပဲသည် မြန်မာနိုင်ငံ၏ အရေးကြီးသည့် ဆောင်းသီးနှံတစ်ခု ဖြစ်ပါသည်။ မတ်ပဲကို အောက်မြန်မာပြည်တွင် စပါးရိတ်သိမ်းပြီး သီးထပ်သီးနှံအဖြစ်လည်းကောင်၊ မြစ်ရေကျချိန်တွင် ကိုင်းကျွန်းများ၌လည်းကောင်း စိုက်ပျိုးကြပါသည်။ အစိုဓါတ်နှင့် အပင်အာဟာရ အနည်းငယ်သာ ရှိသော မြေများတွင်လည်း စိုက်ပျိုးနိုင်သည်။</p>
                        </div>
                        <div class="store-overlay">
                            <a href="bean1.php" class="btn btn-primary rounded-pill py-2 px-4 m-2">ပိုမိုကြည့်ရှုရန်<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="store-item position-relative text-center">
                        <img src="img/beans.png" class="type" alt="">
                        <div class="p-2 p-md-4">                            
                            <h4 class="mb-3 typeName">ပဲတီစိမ်း</h4>
                            <p style="text-align: justify;">ပဲတီစိမ်းကို အပူပိုင်း အာရှနိုင်ငံများတွင် စိုက်ပျိုးကြပါသည်။ ပဲတီစိမ်းကို အထက်မြန်မာပြည်၊ အောက်မြန်မာပြည်ဒေသနှစ်ခုလုံးတွင် စိုက်ပျိုးကြပါသည်။ ပဲတီစိမ်း၏ အပင်ပုံစံမှာ ပင်ထောင်ပုံစံဖြစ်ပါသည်။ ပဲတီစိမ်းသည် တစ်ရာသီခံပင်ဖြစ်ပြီး ပင်တည်းဝတ်မှုံကူးသော အပင် အမျိုးအစားလည်းဖြစ်ပါသည်။</p>
                        </div>
                        <div class="store-overlay">
                            <a href="bean2.php" class="btn btn-primary rounded-pill py-2 px-4 m-2">ပိုမိုကြည့်ရှုရန်<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Type End -->


    <!-- weather Start -->
    <div class="container-fluid py-4 py-md-5 mt-md-5 mb-md-3 weather">
        <div class="container">
            <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-6 articleTitle">ရာသီဥတု ခန့်မှန်းချက်များ</h1>
            </div>
            <div class='row'>
                <div class='col-md-4 col-lg-3 my-2'>
                    <div class='card search-section'>        
                        <div class='card-body'>
                            <label class="my-2">မြို့အမည်ဖြင့်ရှာဖွေပါ</label>            
                            <div class="input-group mb-3">
                                <input id="cityEntered" type="text" class="form-control weatherinput" placeholder="မြို့နာမည်ရိုက်ပါ"><br>
                                <div class="input-group-append">
                                    <button id='getEnteredCityWeather' class="btn btn-secondary" type="submit">
                                        ရှာဖွေမည်
                                    </button>
                                </div>
                            </div>
                            <div id='past-searches'>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class='col-md-8 col-lg-9 my-2'>
                    <div class='row'>
                        <div class='card'>
                            <div class='card-body'>
                                <h5 class='card-title' id='cityName'>မြို့</h5>
                                <ul>
                                    <li><img id='currWeathIcn'></img></li>
                                    <li class='card-text' id='currTemp'>အပူချိန်:</li>
                                    <li class='card-text' id='currHum'>စိုစွတ်မှု:</li>
                                    <li class='card-text' id='currUVI'>ခရမ်းလွန်ရောင်ခြည်အညွန်းကိန်း:</li>
                                    <li class='card-text' id='currWind'>လေတိုက်နှုန်း:</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class='row'>
                        <h5 class='card-title' id="fiveDayHeader">နောက်ငါးရက်ရာသီဥတုခန့်မှန်းချက် </h5>
                    </div>
                    <div class='row g-1' id='forecast'>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- weather End -->


    <!-- Book Start -->
    <div class="container-fluid py-5 weather">
        <div class="container px-2 px-md-5">
            <div class="row g-3">
                <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                    <img class="img-fluid" src="img/readBooks.jpg" alt="">
                </div>
                <div class="col-lg-7 wow fadeIn mt-2 mt-md-1" data-wow-delay="0.5s">
                    <div class="section-title">
                        <h1 class="display-6 articleTitle">စိုက်ပျိုးရေးဆိုင်ရာ စာအုပ်စာစောင်များ</h1>
                    </div>
                    <p class="mb-2" style="text-align: justify;">စိုက်ပျိုးရေးစာအုပ်များနှင့် ဆောင်းပါးများသည် စဉ်ဆက်မပြတ်တိုးတက်‌ပြောင်းလဲနေသောစိုက်ပျိုးရေးအလေ့အကျင့်များနှင့် ဆန်းသစ်တီထွင်မှုများကို ဆုပ်ကိုင်ထားနိုင်ရန် အရေးကြီးသော သုတေသနပြုချက်အသစ်များ၊ သီးနှံစီမံခန့်ခွဲမှုနည်းပညာများနှင့် အတွေးအမြင်အသစ်များကိုလည်း ကျယ်ကျယ်ပြန့်ပြန့် သိရှိနားလည်စေပါသည်။ လူတစ်ဦးချင်းစီ၏အသိပညာကို ကျယ်ပြန့်စေရုံသာမက လက်တွေ့စိုက်ပျိုးမှုများအတွက် အံဝင်ခွင်ကျဖြစ်စေပြီး ကွဲပြားသောအမြင်များနှင့် ထိရောက်သောနည်းလမ်းများကို ပေးဆောင်နိုင်ရန်လည်း လမ်းသစ်တစ်ခုအဖြစ် ဆောင်ရွက်ပေးပါသည်။ အကောင်းဆုံးအလေ့အကျင့်များနှင့် ခေတ်ရေစီးကြောင်းအလိုက် စိုက်ပျိုးရေးဆိုင်ရာဗဟုသုတများသည် တောင်သူလယ်သမားများနှင့် စိုက်ပျိုးရေးကို စတင်လုပ်‌ကိုင်မည့် စိတ်ဝင်စားများအတွက် မရှိမဖြစ်လိုအပ်ပါသည်။</p>
                    <p class="mb-3" style="text-align: justify;"> စိုက်ပျိုးရေးဆိုင်ရာလေ့လာမှုများ၊ လက်တွေ့စိုက်ပျိုးမှုများအတွက် ရေရှည်တည်တံ့သောအလေ့အကျင့်များကို လိုက်စားခြင်းတွင် စိုက်ပျိုးရေးဗသုသုတများကို စူးစမ်းလေ့လာခြင်းသည် စိုက်ပျိုးရေးနည်းပညာနှင့် ဆက်စပ်အကြောင်းအရာများကို နားလည်သဘောပေါက်လာစေရန်အတွက် အဓိကနည်းလမ်းတစ်ခုဖြစ်ပါသည်။</p>
                    <a href="book.php" class="btn btn-primary mybody rounded-pill py-2 px-3" style="color: #000!important;">ပိုမိုကြည့်ရှုရန်<i class="fa fa-arrow-right ms-2"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Book End -->


    <!-- Articles Start -->
    <div class="container-fluid product py-1 py-sm-2 py-md-3 my-5 article">
        <div class="container py-3 my-md-4">
            <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <!-- <p class="fs-5 fw-medium fst-italic text-primary">Our Products</p> -->
                <h1 class="display-6 articleTitle">စိုက်ပျိုးရေးဆိုင်ရာ ဆောင်းပါးများ</h1>
            </div>
            <div class="owl-carousel product-carousel wow fadeInUp" data-wow-delay="0.5s">

        <?php 
            $sql = "select * from articles";
            $result = $conn->prepare($sql);
            $result->execute();
            $data = array_reverse($result->fetchAll(PDO::FETCH_ASSOC));

            foreach ($data as $row) {
        ?>
                <a href="article_detail.php?pid=<?php echo $row['id']; ?>" class="d-block product-item rounded">
                    <img src="admin/<?php echo $row['image']; ?>" alt="" height="220px;">
                    <div class="bg-white shadow-sm text-center p-4 position-relative mt-n5 mx-4 articleBody">
                        <h4 class="text-primary article_title"><?php echo $row['title']; ?></h4>
                        <span class="text-body tex-break mybody" style="text-align: justify;"><?php echo $row['content']; ?></span>
                    </div>
                </a>
        <?php
            }
        ?>
            </div>
            <div class="d-flex justify-content-center mt-2 mt-md-4">
                <a href="article1.php" class="btn btn-primary rounded-pill py-2 px-3 mybody" style="color: #000!important;">ပိုမိုကြည့်ရှုရန်<i class="fa fa-arrow-right ms-2"></i></a>
            </div>                
        </div>
    </div>
    <!-- Articles End -->


    <!-- About us Start -->
    <div class="container-xxl pt-5 pb-2 pb-md-5 mybody">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                    <img class="img-fluid" src="img/aboutimg.jpg" alt="">
                </div>
                <div class="col-lg-7 mt-2 mt-md-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="section-title mb-3 pb-3">
                        <h1 class="display-6 articleTitle">About us</h1>
                    </div>
                    <p class="my-2" style=" line-height: 1.7;text-align: justify;">မြန်မာနိုင်ငံတွင် စိုက်ပျိုးသီးနှံများ စုံလင်အောင်ထွက်ရှိသော်လည်း နည်းပညာလိုအပ်ချက်ကြောင့် အရည်အသွေးနှင့်အထွက်နှုန်းတွင် အားနည်းချက်များရှိနေပါသည်။</p>
                    <p class="mb-4" style="line-height: 1.7; text-align: justify;">တောင်သူများ၏စိုက်ပျိုးရေးကို အခြေခံသည့်ကုန်ထုတ်လုပ်မှု များအတွက်ခေတ်မှီနည်းစနစ်များဖြင့် ပိုမိုဖွံဖြိုးတိုးတက်အောင် ဆောင်ရွက်ပေးနိုင်ရန်နှင့် အခြားစီးပွားရေးကဏ္ဍများကိုလည်း ဘက်စုံဖွံဖြိုးတိုးတက်အောင် တည်ဆောက်ပေးနိုင်ရန် ကျွန်ုပ်တို့ <strong style="color: #88b44e;">AyeyarFarmerHub</strong>မှ တောင်သူဦးကြီးများအတွက် တစ်ဖက်တစ်လှမ်းမှ အထောက်အကူပြု ဖော်ပြပေးထားပါသည်။</p>
                </div>
            </div>
        </div>
    </div>
    <!-- About us End -->


    <!-- FAQs Start -->
    <div class="container-fluid py-5 article">
        <div class="container px-md-5">
            <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-6 articleTitle">FAQs</h1>
            </div>
            <div class="accordion" id="accordionExample">

        <?php
            $status = "Active";
            $sql = "select * from faq where status=:status";
            $input =[
                'status' => $status
            ];
            $result = $conn->prepare($sql);
            $result->execute($input);
            $data = $result->fetchAll(PDO::FETCH_ASSOC);

            foreach ($data as $row) { 
        ?>

            <div class="accordion-item">
                <h2 class="accordion-header" id="heading<?php echo $row['id'];?>">
                <button class="accordion-button myBtn" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $row['id'];?>" aria-expanded="true" aria-controls="<?php echo $row['id'];?>"  style="background-color: #f0f5f5; color: #000; line-height: 1.6;">
                    <?php echo $row['question'];?>
                </button>
                </h2>
                <div id="collapse<?php echo $row['id'];?>" class="accordion-collapse collapse" aria-labelledby="heading<?php echo $row['id'];?>" data-bs-parent="#accordionExample">
                <div class="accordion-body" style="line-height: 1.8;">
                    <?php echo $row['answer'];?>
                </div>
                </div>
            </div>   

        <?php

            }
        ?>
            
            </div>
        </div>
    </div>
    <!-- FAQs Start -->


    <!-- Video Start -->
    <div class="container-fluid video article mt-5">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-6 py-3 wow fadeIn" data-wow-delay="0.1s">
                    <div class="py-3 py-md-5">
                        <h1 class="display-6 mb-1 mb-md-3">Get in <span class="text-white">Touch</span></h1>
                        <h6 class="fw-normal lh-base text-white mb-3 mb-md-4 contact_title">If You Have Any Query, Please Contact Us</h6>
                        <div class="row g-4 mb-5">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 btn-lg-square bg-white text-primary rounded-circle me-3">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <span class="text-dark">Ma Khin Pa Pa Thein</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 btn-lg-square bg-white text-primary rounded-circle me-3">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <a href="tel:+959773223447" class="text-dark">+959 773 223 447</a>
                                </div>
                            </div>                            
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 btn-lg-square bg-white text-primary rounded-circle me-3">
                                        <i class="fa fa-envelope"></i>
                                    </div>
                                    <a href="mailto:khinpapathein.fly@gmail.com" class="text-dark">khinpapathein.fly@gmail.com</a>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 btn-lg-square bg-white text-primary rounded-circle me-3">
                                        <i class="fab fa-facebook-square"></i>
                                    </div>
                                    <span class="text-dark"><a href="https://www.facebook.com/khin.p.thein.96" class="text-dark">khinpapathein</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 py-3 wow fadeIn" data-wow-delay="0.5s">
                    <div class="py-3 py-md-5">
                        <h1 class="display-6 mb-1 mb-md-3"><span class="text-white">website အသုံးပြုပုံ</h1>
                        <div class="d-flex align-items-center justify-content-center" style="min-height: 250px; margin-right: 10%;">
                            <button type="button" class="btn-play" data-bs-toggle="modal"
                                data-src="https://www.youtube.com/embed/ktsoTPhCPQc?si=r1V6Crc3j8zZY5rR" data-bs-target="#videoModal">
                                <span></span>
                            </button>
                        </div>
                    </div>                 
                   
                </div>
            </div>
        </div>
    </div>
    <!-- Video End -->


    <!-- Video Modal Start -->
    <div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog m-0">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Youtube Video</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/ktsoTPhCPQc?si=r1V6Crc3j8zZY5rR" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->

    
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

    <!-- Weather JS -->
    <script src='Assets\js\script.js'></script>

</body>

</html>