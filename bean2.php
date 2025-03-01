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
            max-height: calc(100vh - 140px);
            overflow-y: auto;
        }
        /* Modal Styles */
        @media only screen and (min-width: 300px) {
            .myBody{
                font-size: 13px;
            }
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
            .disease_title{
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
            
        }
        @media only screen and (min-width: 500px) {
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
            .myBody{
                font-size: 15px;
            }
            .disease_title{
                font-size: 16pt;
            }
        }
        @media only screen and (min-width: 850px) {
            /* styles for browsers larger than 1440px; */
            .myprofile{
                min-width: 108px;
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
            .disease_title{
                font-size: 17pt;
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
                top: 4%;
                left: 10%;
                width: auto;
                height: auto;
                background-color: rgba(0, 0, 0, 0.5);
                align-items: center;
                justify-content: center;
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


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-2 mb-md-5 wow fadeIn" style="background: linear-gradient(rgba(136, 180, 78, .7), rgba(136, 180, 78, .7)), url(img/carousel_bean.jpg) center center no-repeat;background-size: cover;" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-2 text-dark mb-4 animated slideInDown">ပဲတီစိမ်း</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="index.php">မူလစာမျက်နှာ</a></li>
                    <li class="breadcrumb-item text-dark" aria-current="page">ပဲတီစိမ်း</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Body Start -->
    <div class="container-fluid myBody" style="margin-top: 4rem; margin-bottom: 6rem;">
        <div class="container">
            <div class="row g-0">
                <p style="text-align: justify;"> သီးနှံအမည်&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	ပဲတီစိမ်း</p>
                <p style="text-align: justify;">  အင်္ဂလိပ်အမည် &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Green Gram</p>
                <p style="text-align: justify;">   သိပ္ပံအမည်&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Vigna radiate (L) wilezek</p>
                
                <p style="text-align: justify;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ပဲတီစိမ်းကို အပူပိုင်း အာရှနိုင်ငံများတွင် စိုက်ပျိုးကြပါသည်။ ပဲတီစိမ်းကို အထက်မြန်မာပြည်၊ အောက်မြန်မာပြည်ဒေသနှစ်ခုလုံးတွင် စိုက်ပျိုးကြပါသည်။ အထက်မြန်ပြည်တွင် မိုးရေသောက်သီးနှံအဖြစ်မိုးဦး၊ မိုးလယ်တွင် သီးသန့်(သို့)ဝါ၊ပဲစင်းငုံတို့နှင့် သီးညှပ်စိုက်ပျိုးပါသည်။ အောက်မြန်မာပြည်တွင် မိုးစပါးအပြီး သီးထပ်စိုက်ပျိုးပါသည်။ ရေသွင်းနိုင်သည့် ဒေသများတွင် မိုးကြိုသီးနှံအဖြစ်စိုက်ပျိုးကြပါသည်။ ပဲတီစိမ်းအဓိကစိုက်ပျိးသည့်တိုင်းများမှာ အထက်မြန်မာပြည်တွင် မကွေးတိုင်၊ စစ်ကိုင်းတိုင်း၊ မန္တလေးတိုင်းတို့ဖြစ်၍ အောက်မြန်မာပြည်တွင် ရန်ကုန်တိုင်း၊ ပဲခူးတိုင်း၊ဧရာဝတီတိုင်းတို့ ဖြစ်ပါသည်။</p>

                <br>
                <br>
                <div class="ps-md-2">
                    
                        <br>
                        <p style="font-size: 15px;" class="fw-bold">၁။ ရာသီဥတုလိုအပ်ချက်</p>
                        <p style="text-align: justify;" class="ms-2">ပဲတီစိမ်းသည် မတ်ပဲနှင့် နှိုင်းယှဉ်လျှင် စိုထိုင်းဆနှင့် ရေငတ်ဒဏ်ခံနိုင်ရည်ရှိမှု နည်းပါသည်။ ပူနွေးခြောက်သွေ့သော ရာသီဥတုကို ကြိုက်နှစ်သက်ပါသည်။ ပဲတီစိမ်းဖြစ်ထွန်းရန် လိုအပ်သည့်အပူချိန်မှာ(၃၀-၃၆)ဒီဂရီစင်တီဂရိတ် ဖြစ်ပါသည်။ မိုးရွာသွန်းမှုညီမျှ၍ တစ်နှစ်ပျမ်းမျှမိုးရေချိန် (၃၀မှ၃၆)လက်မအတွင်း ရှိရန်လိုအပ်ပါသည်။ ပဲတီစိမ်းကို ပင်လယ်ရေမျက်ပြင်အထက် ပေ (၆၀၀၀)အထိ စိုက်ပျိုးနိုင်ပါသည်။ ဝတ်မှုံကူးခြင် း(၆-၈)ပတ် အကြာ၌ပန်းစတင်၍ပွင့်သည်။ ပန်းပွင့်မအာမီ တစ်ရက်အလို ညနေဘက်တွင် အငုံထဲ၌ပင် ဝတ်မှုံရင့်ကြွေ၍ မျျိုးကူးစပ်မှုပြီးစီးသည်။လုံးဝပင်တည်းဝတ်မှုံကူးပင် ဖြစ်ပါသည်။ ပွင့်အာခြင်း မရှိတော့ဘဲ ဝတ်မှုံကူးသည့် ပန်းပွင့်များ ရာခိုင်နှုန်ုး(၄၀)ကျော်သည်။ အပူချိန်နှစ်စဉ်ပျမ်းမျှ (၈)ဒီဂရီစင်တီဂရိတ်အောက် မကျသောဒေသနှင့်ပျမ်းမျှ(၂၀)ဒီဂရီစင်တီဂရိတ်ထက် မပိုသောဒေသများတွင် ပို၍ဖြစ်ထွန်းနိုင်သည်။ စိုက်ပျိုးချိန်ကာလအတွင်း အနိမ့်ဆုံး(၁၅) ဒီဂရီစင်တီဂရိတ်မကျဘဲ အမြင့်ဆုံး(၃၂)ဒီဂရီစင်တီဂရိတ်ထက်မကျော်သင့်ပေ။ အသင့်တော်ဆုံးမှ ာ(၂၅-၃၀)ဒီဂရီစင်တီဂရိတ်အတွင်းဖြစ်သည်။ </p><br>
                        <p style="font-size: 15px;" class="fw-bold">၂။ မြေအမျိူးအစား</p>
                        <p style="text-align: justify;" class="ms-2">ပဲတီစိမ်းသည် ရေစီးရေလာကောင်းသည့် မည်သည့်မြေအမျိုးအစားမဆို စိုက်ပျိုးနိုင်ပါသည်။ ရေဝပ်ဒဏ်ခံနိုင်ရည်မရှိပါ။ သဲမြေနှုန်းမြေမှ မြေနက်စေး၊ မြေနီစေးအထိ အားလုံးသော မြေမျိုးများတွင်ပင် စိုက်ပျိုးဖြစ်ထွန်းနိုင်သည်။ မြေအချဉ်အငံဓါတ် (၅.၁-၆.၅)အတွင်း စိုက်ပျိုးဖြစ်ထွန်းသည်။ မြေအချဉ်အငံဓါတ် (၅.၅) ထက်လျှော့နည်းပါက အပင်ဖြစထွန်းမှုညံ့သည်။</p><br>
                        <p style="font-size: 15px;" class="fw-bold">၃။ မျိုးစေ့နှုန်းထား </p>
                        <p style="text-align: justify;" class="ms-2">ပဲတီစိမ်းတစ်ဧကတင်း(၂၀)ထွက်ရှိရန် တစ်ဧကအပင်ဦးရေ မိုးကြိုနှင့် မိုးနှောင်းသီတွင် (၁၃၀၀၀၀)၊ မိုးရာသီတွင် (၈၇၀၀၀)ရရှိရန် လိုအပ်သဖြင့် မိုးကြိုနှင့်မိုးနှောင်းတွင် အတန်းလိုက်စိုက်ပါက (၆-၈)ပြည်နှုန်းသုံးပြီး မိုးရာသီတွင် အတန်းလိုက်စိုက်ပါက (၄-၅)ပြည်နှုန်း သုံးရန် လိုအပ်ပါသည်။ လက်ကြဲကြဲပါက (၆-၈)ပြည်ခန့်လည်းကောင်း၊ ရေလိုက်ကြဲပါက  (၁၀-၁၂)ပြည်အထိ သုံးစွဲပါ။ မစိုက်ပျိုးမီ အပင်ပေါက်စွမ်းအား စမ်းသပ်ပြီး အပင်ပေါက်ရာခိုင်နှုန်း (၉၀)ရှိသော မျိုးကို အသုံးပြုရန် လိုအပ်ပါသည်။ မိမိဒေသအတွင်း အပင်ငယ်စဉ် ပျက်စီးဆုံးရှုံးနိုင်သော ပမာဏအားထည့်သွင်းစဉ်းစား၍ တစ်ဧကရိတ်သိမ်းပင်(၁၃၀၀၀၀)ရှိရန်လိုအပ်သဖြင့် အပင်ပေါက်စုံရန် လိုအပ်ပါသည်။ အပင်ပေါက်စုံရန်အတွက် အစိုဓာတ်မီရန် စိုက်ချိန်မှန်ရန် လိုအပ်ပါသည်။ </p><br>
                        <p style="font-size: 15px;" class="fw-bold">၄။ပဲတီစိမ်းသီးနှံပုံစံ</p>
                        <p style="text-align: justify;" class="ms-2">ပဲတီစိမ်းသီနှံကို မိုးရာသီနှင့် ဆောင်းရာသီ၌ စိုက်ပျိုးကြသည်။ စပါးပြီးသီးထပ်စိုက်ပျိုးမီဖြစ်ပါက မိုးစပါးအား အောက်တိုဘာလကုန် ရိတ်သိမ်းနိုင်သည့် သက်လတ်စပါးမျိုးကို စိုက်ရမည်။ စပါးရိတ်သိမ်းသည့်အခါ အောက်ခြေပြတ်ရိတ်၍ ခြေနင်းခံနိုင်သော မြေအခြေအနေတွင် စိုက်ပျိုးရန်သင့်တော်သော အခြေအနေဖြစ်ပါသည်။ မြေကိုလက်ဖြင့်ဆုပ် ကြည့်လျှင် မြေလုံးမကွဲသော အခြေအနေသည် အစိုဓာတ်အနေတော်ဖြစ်ပါသည်။ </p><br>

                        <p style="font-size: 15px;" class="fw-bold">၅။ စိုက်ပျိုးနည်းစနစ် </p>
                        <p style="text-align: justify;" class="ms-2">ပဲတီစိမ်းကို မိုးရာသီတွင် မိုးကြို၊မိုးနှောင်းနှင့် မိုးလယ်တို့တွင်လည်းကောင်း၊ ဆောင်းရာသီတွင်လည်းကောင်း စိုက်ပျိုးလေ့ရှိပြီး သီးသန့်၊သီးညှပ်(သို့မဟုတ်) သီးထပ်အဖြစ် စိုက်ပျိုးလေ့ရှိသည်။အတန်းလိုက်စိုက်ပျိုးရာတွင် မိုးကြိုနှင့်မိုးနှောင်းတွင် တန်းကြားတစ်ပေ၊ ပင်ကြား(၄)လက်မ၊ မိုးရာသီတွင် (၁.၅)ပေနှင့် ပင်ကြား(၄)လက်မ ထား၍ မျိုးစေ့အား(၁)လက်မမှ (၁.၅)လက်မအတွင်းစိုက်ပါ။ မိုးကြိုတွင် ဖေဖော်ဝါရီလလယ်မှ မတ်လလယ်အတွင်း စိုက်ပါ။ မိုးနှောင်းရာသီတွင် အောက်မြန်မာပြည်၌ အောက်တိုဘာလမှ နိုဝင်ဘာလအတွင်း အပြီးစိုက်ပါ။ မိုးကြိုရာသီတွင် ရေသွင်း၍ သီးသန့်အဖြစ်လည်းကောင်း၊ သီးညှပ်အဖြစ်လည်းကောင်း စိုက်ပျိုးကြသည်။ သီးညှပ်အဖြစ် မိုးပြောင်းဖူး၊ နှမ်းလျှင်၊ ပဲစင်းငုံ၊မိုး နေကြာနှင့်ညှပ်၍ စိုက်ပျိုးသည်။ သီးထပ်စိုက်ရာတွင် ရေလိုက်ကြဲစနစ်၊  ဓါးခုတ်ဖုံးစနစ် ၊ထွန်ရေးဖြင့် စိုက်သောစနစ် (ထွန်ပဲစနစ်)တို့ဖြင့် စိုက်ပျိုးသည်၊</p>

                        <p style="font-size: 15px;" class="fw-bold">စိုက်ပျိုးခြင်း </p>

                        <p style="text-align: justify;" class="ms-2">(၀၁  ရက်)</p>
                        <p style="text-align: justify;" class="ms-2 mb-4">အပင်ပေါက်ကောင်း၍ အပင်ပေါက်ညီညာအောင် ပဲတီစိမ်းမျိုးစေ့များကို နာရီဝက်ရေစိမ်ပြီး ပဲမြစ်ဖုဇီဝမြေဩဇာတစ်ထုပ်နှင့် သမအောင်ရောမွှေပြီးမှ စိုက်ပါ။ အပင်ငယ်စဉ် မှိုရောဂါကျတက်သောကြောင့် မှိုသတ်ဆေးတစ်မျိုးမျိုးနှင့် လူးနယ်စိုက်ပါ။ တစ်ဧကရိတ်သိမ်းအပင် (၁၃၀၀၀၀)ရရှိရန် အတန်းလိုက်စိုက်ပါက မိုးကြိုနှင့်မိုးနှောင်းရာသီတွင် တန်းကြား(၁၂)လက်မ၊ ပင်ကြား(၄)လက်မ ထား၍ မျိုးစေ့နှုန်း (၆-၈)ပြည်သုံးပါ။ မိုးရာသီတွင် တန်းကြား(၁၈)လက်မ၊ပင်ကြား(၄)လက်မထား၍ မျိုးနှုန်း(၄-၆)ပြည်သုံးပါ။ ကြဲပတ်ပါက မျိုးစေ့(၁၂)ပြည်နှုန်းသုံးပါ။ အပင်ပေါက်ညီညာ၍ အပင်ပေါက်ကောင်းရန် ထယ်ရေးအတွင်းမျိုးစေ့အတိမ်အနက် (၁-၂) လက်မအတွင်း ရအောင်စိုက်ပါ။ </p>

                        <p style="text-align: justify;" class="ms-2">(၀၇ ရက်)</p> 
                        <p style="text-align: justify;" class="ms-2 mb-4"> စတင်အပင်ပေါက်သည်။အပင်ငယ်စဉ်တွင်လှေးကျိုင်း၊ပျ၊မွှားပင့်ကူနီ၊ပင်စည်ထိုးယင်တို့ကျတက်သောကြောင့်အပင်ပေါက်စုံချိန်တွင်ပင်လုံးပြန့်သတ္တိရှိပိုးသတ်ဆေးတစ်မျိုးမျိူးဖျန်းပါ။ညိုးသေရောဂါများကာကွယ်ရန်မှိုသတ်ဆေးတစ်မျိုးမျိုးပတ်ဖျန်းပါ။ </p>

                        <p style="text-align: justify;" class="ms-2">(၁၅ ရက် -၃၀ ရက်) </p>
                        <p style="text-align: justify;" class="ms-2 mb-4">ပေါင်းမြက်ကင်းစင်အောင် စတင်ဆောင်ရွက်ပါ။ (၁၅)ရက်ခြား နှစ်ကြိမ် ဆောင်ရွက်ပါ။ </p>

                        <p style="text-align: justify;" class="ms-2">(၁၅ရက်-၂၅ရက်)</p>
                        <p style="text-align: justify;" class="ms-2 mb-4">ပဲပင်များ ကြီးထွားသန်မာဖြစ်ထွန်းရန် (NPK)နှင့် အနည်းလိုအာဟာရဓာတ်များ ပါဝင်သောရွတ်ဖျန်းမြေဩဇာများတွင် (N)အချိုးများသည့် သင့်တော်သည့် ရွတ်ဖျန်းမြေဩဇာတစ်မျိုး(၁၅)ရက်ခြား နှစ်ကြိမ်ဖျန်းပါ။ </p>

                        <p style="text-align: justify;"class="ms-2">(၁၅ရက်-၆၀ရက်)</p>
                        <p style="text-align: justify;" class="ms-2 mb-4">ရွက်ဖောက်လှေး ကျိုင်း၊ ရွက်စားပိုး၊ ငမြောင်တောင်၊ ပင်စည်ထိုးယင်၊ ပျပိုး ၊ကျိုင်း၊ သရစ်လှေးပိုး ၊ထွာကောင်စိမ်း ၊ ရွက်စုံစားခူဝါ၊ ပွင့်ထွေးရွက်ကပ်သီးလုံးဖောက်ပိုး စသည်တို့နှင့် ယင်ဖြူကြောင့်ဖြစ်သောအဝါရောင်မှိုစိတ်ဗိုင်းရပ်ရောဂါများ မကျရောက်စေရန် သင့်တော်သည့် ဆေးတစ်မျိုးမျိုး (၁၅)ရက်တစ်ကြိမ် ပတ်ဖျန်းပါ။ သီးနှံသက်တမ်းတစ်လျှောက်လုံး ပင်ညိုးရောဂါ၊ ဖားဥမှိုရောဂါ၊ သံချေးရောဂါ၊ စာကိုစပိုးရားရွက်ခြောက်ရောဂါ၊ မှဲ့ပြောက်စွန်းရောဂါ၊ ဗိုင်းရပ်မှိုစိတ်ရောဂါ စသည့်ရောဂါများ ကျရောက်တက်၍ မှိုသတ်ဆေးများမှ ရောဂါနှင့်သင့်တော်သည့် ဆေးတစ်မျိုးမျိုး (၁၅)ရက် တစ်ကြိမ်ဖျန်းပါ။ </p>

                        <p style="text-align: justify;" class="ms-2">(၃၀ရက်)</p>
                        <p style="text-align: justify;" class="ms-2 mb-4">သီးကိုင်းဖူးလေးများ စတင်နိုးကြားလာသည်။ ထိုအချိန်တွင် အစိုဓာတ်မပျတ်ရန် ၊အာဟာရမချို့တဲ့ရန်၊ ပိုးမွှားရောဂါမကျရောက်ရန် ဂရုပြုရပါမည်။ (၃၅-၄၅)ရက် (၄၅)ရက်စ၍ ပန်းပွင့်သည်။ ပွင့်အားကောင်း၍ အသီးတောင့်များရန် (NPK)အချိုး ရွက်ဖျန်းမြေဩဇာများ(P)နှင့် (K)ရာခိုင်နှုန်းများသော သီးပွင့်ရွက်ဖျန်းမြေဩဇာ (၁၅)ရက်ခြားနှစ်ကြိမ်ဖျန်းပါ။ (သို့)ယူရီးယား(၄.၅)ဇွန်းနှင့် လက်ချား(၁.၅)ဇွန်း ရေတစ်ဂါလံနှင့်ရောပြီး တစ်ဧက(၂၀)ဂါလံ ပတ်ဖျန်းပါ။ </p>

                        <p style="text-align: justify;" class="ms-2">(၅၀ရက်-၆၀ရက်)</p>
                        <p style="text-align: justify;" class="ms-2 mb-4">သီးတောင့်ဖြစ်ထွန်းချိန် ၊အစေ့အဆံတည်ချိန်ဖြစ်၍ သီးလုံးဖောက်ပိုးနှင့် သီးထိပ်ပုတ်ရောဂါကို ဂရုပြုပါ။ </p>

                        <p style="text-align: justify;" class="ms-2">(၆၅ရက်-၉၅ရက်)</p>
                        <p style="text-align: justify;" class="ms-2 mb-4">ပဲတီစိမ်းမျိုးနှင့် ပတ်ဝန်းကျင် ရာသီဥတုထိန်းသိမ်းစောင့်ရှောက်မှုအပေါ်မူတည်၍ (၆၅-၉၅)ရက်အတွင်း ရင့်မှည့်လေ့ရှိသည်။ အရွက်များ ဝါခြောက်ပြီး အတောင့်များ (၇၅-၈၅)ရာခိုင်နှုန်း အနက်ရောင်သို့ပြောင်း၍ ခြောက်သွေ့ချိန်တွင် ရိတ်သိမ်းပါ။ ပဲတီစိမ်းအသီးသီးခြင်းကာလကြာရှည်၍ အကြိမ်ကြိမ် ရိတ်သိမ်းရပါသည်။ (၇-၁၀)ရက်ကြာလျှှင် နောက်တစ်သီးဆွတ်ခူးပါ။ ရိတ်သိမ်းပြီး နှစ်နေသုံးနေလှန်း၍ ချွေလှေ့သန့်စင်ပါ။ အစိုဓာတ်(၈-၉)ရာခိုင်နှုန်း နေလှန်း၍ သိုလှောင်ပါ။ </p>
                        <br>              
                </div>              
            </div>

            <div class="diseases p-md-3 mt-md-5">
                <h5 class="mb-md-5 disease_title" style="font-size: 17pt;">စပါးတွင်ကျရောက်သော ရောဂါနှင့်ပိုးမွှားများ</h5>
                <div class="row m-md-4">
                    <?php 
                        $status = "Active";
                        $sql = "select * from bean_diseases where status=:status";
                        $input =[
                            'status' => $status
                        ];
                        $result = $conn->prepare($sql);
                        $result->execute($input);
                        $data = $result->fetchAll(PDO::FETCH_ASSOC);

                        foreach ($data as $row) {
                    ?>
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <img src="admin/images/<?php echo $row['photo'];?>" class="my-2" alt="" width="100%" height="170px" style="cursor: pointer;" onclick="document.getElementById('<?php echo $row['id'];?>').style.display='block'">
                            </div>
                        <!-- add comment popup modal -->
                        <div id="<?php echo $row['id'];?>" class="modal more p-0 m-0">
                            <div class="modal-content p-md-4">
                                <div class="modal-header m-0 p-0 d-flex justify-content-end">
                                    <span class="close mx-3" onclick="document.getElementById('<?php echo $row['id'];?>').style.display = 'none';">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body details p-md-0">
                                    <div class="form-group">
                                        <img src="admin/images/<?php echo $row['photo'];?>" alt="">
                                        <p class="pt-2 pt-md-5"><span class="fw-bold">အမည် - </span><?php echo $row['name'];?></p>
                                        <p><span class="fw-bold">ရောဂါပိုးဖြစ်စေသည့်သက်ရှိ - </span><?php echo $row['infection'];?></p>
                                        <p><span class="fw-bold">လက္ခဏာရပ် - </span><?php echo $row['characteristics'];?></p>
                                    <?php
                                        if($row['type'] == 'ရောဂါ'){
                                    ?>
                                            <p><span class="fw-bold">ကျရောက်ချိန် - </span><?php echo $row['cause_time'];?></p>
                                    <?php
                                        }
                                    ?>
                                            <p><span class="fw-bold">ကာကွယ်နှိမ်နှင်းနည်း - </span><?php echo $row['prevention'];?></p>
                                    </div>                     
                                </div>
                                
                            </div>
                        </div>
                    <?php
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Body End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright myBody py-3 py-md-4">
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
</body>

</html>