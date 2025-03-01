<?php session_start();
    include_once('includes/config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Ayeyar Farmers Hub</title>
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
            .disease_title{
                font-size: 14pt;
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
            .myBody{
                font-size: 14px;
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
            .myprofile{
                min-width: 110px;
            }
            /* styles for browsers larger than 1440px; */
            .morecomments{
                top: 10%;
                left: 10%!important;
                width: 80%!important;
            }
            .disease_title{
                font-size: 17pt;
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
                                <a href="logout.php" class="dropdown-item" onclick="return confirm('Are you sure to logout');">logout ထွက်ပါ</a>
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
    <div class="container-fluid page-header py-5 mb-2 mb-md-5  wow fadeIn" style="background: linear-gradient(rgba(136, 180, 78, .7), rgba(136, 180, 78, .7)), url(img/bean2.jpg) center center no-repeat;background-size: cover;" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-2 text-dark mb-4 animated slideInDown">မတ်ပဲ</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="index.php">မူလစာမျက်နှာ</a></li>
                    <li class="breadcrumb-item text-dark" aria-current="page">မတ်ပဲ</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Body Start -->
    <div class="container-fluid myBody" style="margin-top: 4rem; margin-bottom: 6rem;">
        <div class="container">
            <div class="row g-0">
                <p style="text-align: justify;"> သီးနှံအမည်&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	မတ်ပဲ</p>
                <p style="text-align: justify;">  အင်္ဂလိပ်အမည် &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Blackgram</p>
                <p style="text-align: justify;">   သိပ္ပံအမည်&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Vigna mungo (L) Hepper</p>
                <p style="text-align: justify;">   သိပ္ပံကွဲအမည်&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Phaseolus mungo L</p>
                <p style="text-align: justify;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; မတ်ပဲသည် မြန်မာနိုင်ငံ၏ အရေးကြီးသည့် ဆောင်းသီးနှံတစ်ခု ဖြစ်ပါသည်။ မတ်ပဲကို အောက်မြန်မာပြည်တွင် စပါးရိတ်သိမ်းပြီး သီးထပ်သီးနှံအဖြစ်လည်းကောင်၊ မြစ်ရေကျချိန်တွင် ကိုင်းကျွန်းများ၌လည်းကောင်း စိုက်ပျိုးကြပါသည်။ အထက်မြန်မာပြည်ဒေသများဖြစ်သည့် စစ်ကိုင်းတွင် မိုးသီးနှံအဖြစ် စိုက်ပျိုးကြပါသည်။ မတ်ပဲစိုက်ပျိုးဧရိယာ၏ (၉၀)ကို အောက်မြန်ပြည်တွင် စိုက်ပျိုးကြပါသည်။ အများဆုံးစိုက်ပျိုးသည့်ဒေသများမှာ ဧရာဝတီတိုင်းနှင့် ပဲခူးတိုင်းတို့ ဖြစ်ပါသည်။ မတ်ပဲကို ပြည်တွင်းစားသုံး၍ရန်နှင့် အဓိက ပြည်ပတင်ပို့ရောင်းချရန် စိုက်ပျိုးပါသည်။ မတ်ပဲသည်နိုင်ငံတကာဝယ်လိုအားများသည့် သီးနှံဖြစ်ပါသည်။ မြန်မာနိုင်ငံမှမတ်ပဲကို (၂၀၁၂-၂၀၁၃)ခုနှစ် စိုက်ပျိုးမှုများမှာ (၂၇၃၇၂၁၃)ဧက ထိစိုက်ပျိုးနိုင်ခဲ့ပါသည်။ </p>

                <br>
                <br>
                <div class="ps-md-2">                    
                        <br>
                        <p style="font-size: 15px;" class="fw-bold">၁။ ရာသီဥတုလိုအပ်ချက်</p>
                        <p style="text-align: justify;" class="ms-2">မတ်ပဲသည် ပူနွေး၍ ခြောက်သွေ့သော ရာသီဥတုကို ကြိုက်နှစ်သက်ပါသည်။ အပူချိန်မြင့်မားခြင်းကို ခံနိုင်ရည်ရှိပါသည်။ အများအားဖြင့် နေရောင်ခြည်ကောင်းစွာရရှိ၍ အပူချိန်(၂၅)ဒီဂရီစင်တီဂရိတ်မှ(၃၅)ဒီဂရီစင်တီဂရိတ် အကြားရှိပါသည့်ဒေသများတွင် စိုက်ပျိုးကြပါသည်။ ရေငတ်ဒဏ်ခံနိုင်ရည်ရှိ၍ တစ်နှစ်ပျမ်းမျှမိုးရေချိန် (၃၆)လက်မ အောက်ရွာသွန်းသည့်ဒေသများတွင် ဖြစ်ထွန်းပါသည်။ မိုးများသော ဒေသများတွင်မူ ဆောင်းသီးနှံအဖြစ် စိုက်ပျိုးကြပါသည်။ ပင်လယ်ရေမျက်နှာပြင်ထက်အမြင့်ပေ(၆၀၀၀)အထိစိုက်နိုင်ပါသည်။ မတ်ပဲအများစုသည် နေတာတိုပင်ဖြစ်ကြပါသည်။</p><br>
                        <p style="font-size: 15px;" class="fw-bold">၂။ မြေအမျိူးအစား</p>
                        <p style="text-align: justify;" class="ms-2">မတ်ပဲစိုက်ပျိုးမည့်မြေသည် မြေသားနု၍ ရေမဝပ်သောမြေကို ရွေးချယ်သင့်သည်။ စနယ်မြေစေးမျိုးကို ကြိုက်နှစ်သက်၍ အသင့်တော်ဆုံး အထွက်နှုန်းရရှိနိုင်သည် မြေနီ(သို့မဟုတ်) သဲသမမြေ၊လယ်မြေကဲ့သို့ မြေအမျိုးတွင် စိုက်ပျိုးနိုင်ပါသည်။ မတ်ပဲကို စပါးပြီးလယ်မြေနှင့် မြစ်ရေကျပြီး နုန်းသမမြေတို့တွင် အများဆုံးစိုက်ပျိုးကြပါသည်။ အသင့်တော်ဆုံး မြေအချဉ်ငံဓာတ်မှာPH(၅.၈)မှPH(၆.၅) ဖြစ်ပါသည်။ မြေအချဉ်ငံဓာတ် PH(၅.၅) ထက်လျော့နည်းပါက အပင်ဖြစ်ထွန်းမှု အားနည်းပါသည်။ ဆားပေါက်မြေနှင့် ထုံးဓာတ်ကဲသည့်မြေတို့တွင် မစိုက်ပျိုးသင့်ပါ။</p><br>
                        <p style="font-size: 15px;" class="fw-bold">၃။ မျိုးစေ့နှုန်းထား </p>
                        <p style="text-align: justify;" class="ms-2">မတ်ပဲတစ်ဧက တင်း(၂၀) ရရှိရန် မျိုးစေ့ပေါင်း တစ်ဧကသိန်း(၁၃၀)စေ့ကျော် ရရှိရန် လိုသဖြင့် တစ်တင်းတွင် အစေ့ပေါင်း(၆)သိန်းခွဲကျော်ခန့် ရှိရမည်ဖြစ်ပါသည်။ ထိုသို့ရရှိရန် တစ်ဧကရိတ်သိမ်းပင်ပေါင်း(၁၃၀၀၀၀)ရှိရန်၊ တစ်ပင်ပါသီးတောင့်(၂၀)ရရှိရန်၊ တစ်တောင့်လျှင် အောင်စေ့(၅)စေ့မှ(၆)စေ့ရှိပြီး၊ အစေ့(၁၀၀)အလေးချိန်(၄.၅)ဂရမ်ရှိရန် လိုအပ်ပါသည်။ အပင်(၃၀၀၀၀)ခန့်လျော့နည်းပါက တစ်ဧက(၅)တင်းခန့် လျော့နည်းနိုင်ပါသည်။ မစိုက်ပျိုးမှီ အပင်ပေါက်နှုန်းအား စမ်းသပ်ပြီး အပင်ပေါက်ရာခိုင်နှုန်း(၉၀)ခန့်ရှိသောမျိုးကို အသုံးပြုရန် လိုအပ်ပါသည်။ အတန်းလိုက်စိုက်ခင်းတွင်တစ်ဧက(၆-၈)ပြည်နှုန်းအားလည်းကောင်း၊ ကြဲပက်သည့် စိုက်ခင်းတွင် တစ်ဧကပျမ်းမျှ (၁၂)ပြည် သုံးစွဲပါ။ မိမိဒေသအတွင်း အပင်ငယ်စဉ် ပျက်စီးဆုံးရှုံးနိုင်သော ပမာဏအား ထည့်သွင်းစဉ်းစား၍ တစ်ဧကရိတ်သိမ်းပင်(၁၃၀၀၀၀)ရရှိရန် လိုအပ်သဖြင့် အပင်ပေါက်စုံရန် လိုအပ်ပါသည်။ အပင်ပေါက်စုံရန်အတွက် အစိုဓာတ်မီရန် စိုက်ချိန်မှန်ဖို့ လိုအပ်ပါသည်။</p><br>
                        <p style="font-size: 15px;" class="fw-bold">၄။မတ်ပဲသီးနှံပုံစံ </p>
                        <p style="text-align: justify;" class="ms-2">မတ်ပဲသီးနှံအား စစ်ကိုင်းတိုင်းတွင် မိုးရာသီ၌လည်း စိုက်ပျိုးကြပြီး ကျန်တိုင်းနှင့်ပြည်နယ်များတွင် ဆောင်းရာသီစပါးအပြီး သီးထပ်အဖြစ် စိုက်ပျိုးကြပါသည်။ စပါးအပြီးသီးထပ်စိုက်ပျိူးမည်ဖြစ်ပါက မိုးစပါးအား အောက်တိုဘာလကုန် ရိတ်သိမ်းနိုင်သည့် သက်လတ်စပါးမျိူးကို စိုက်ရမည်။ စပါးရိတ်သည့်အခါ အောက်ခြေပြတ်ရိတ်၍ ခြေနင်းခံနိုင်သော မြေအခြေအနေတွင် စိုက်ပျိုးရန်သင့်တော်သော အခြေအနေဖြစ်ပါသည်။ မြေကိုလက်ဖြင့် ဆုပ်ကြည့်လျှင် မြေလုံးမကွဲသော အခြေအနေသည် အစိုဓာတ်အနေတော်ဖြစ်ပါသည်။</p><br>

                        <p style="font-size: 15px;" class="fw-bold">၅။ စိုက်ပျိုးနည်းစနစ် </p>
                        <p style="text-align: justify;" class="ms-2">မတ်ပဲကို အများအားဖြင့် စပါးသီးထပ်(သို့) ရေလိုက်ကြဲပတ်စိုက်ပျိုးခြင်း ၊အတန်းလိုက်စိုက်ပျိုးခြင်းတို့ဖြင့် စိုက်ပျိုးလေ့ရှိပါသည်။ အတန်းလိုက်စိုက်ပျိုးခြင်းသည် အထွက်နှုန်းပိုမိုကောင်းမွန်စေပါသည်။ မတ်ပဲကို အစိုဓာတ်မိမိနှင့် စောစောအပင်ပေါက်ရစေရန် ရေလိုက်ကြဲစနစ်၊ ဓားခုတ်ဖုန်းစနစ်၊ ထွန်ရေဖြင့်စိုက်သောစနစ် (ထွန်ပဲစနစ်) စိုက်ပျိုးလေ့ရှိပါသည်။</p>

                        <p style="font-size: 15px;" class="fw-bold">စိုက်ပျိုးခြင်း </p>

                        <p style="text-align: justify;" class="ms-2">(၀၁  ရက်)</p>
                        <p style="text-align: justify;" class="ms-2 mb-4">မတ်ပဲမျိုးစေ့များကို နာရီဝက်ခန့်ရေစိမ်ပြီး ပဲမြစ်ဖုဇီဝမြေဩဇာတစ်ထုတ်နှင့် သမအောင်ရောမွှေစိုက်ပါ၊။ အပင်အစိပ်ကျဲညီအောင် မျိုးစေ့ကို နှစ်လွှာကြဲပါ။ ကြဲပြီးပြီးချင်းကြမ်းဖြင့် နှစ်ပြန်အုပ်ပေးပါက အစိုဓာတ်လုံလောက်စွာ ရရှိ၍ အပင်ပေါက်ညီညာပြီး လိုအပ်သော အပင်ဦးရေရရှိနိုင်ပါသည်၊ အတန်းလိုက်စိုက်မည်ဆိုပါက စိုက်ကြောင်းပေး၊မျိုးစေ့ချပြီး ကြမ်းပြန်အုပ်ပေးရပါမည်။ ကြဲပတ်မည်ဆိုပါက ညနေပိုင်းတွင် ကြဲပတ်ရန် သင့်တော်ပြီး လက်ဆညီအောင်ကြဲပတ်ရန် လိုအပ်ပါသည်။ အပင်ညိုးသေနှင့် အခြားရောဂါများ မကျရောက်အောင် မျိူးစေ့ကို မှိုသတ်ဆေးတစ်မျိုးမျိုးဖြင့်လူးနယ်၍ စိုက်ပျိုးပါ။ အပင်ပေါက်ညီညာ၍ အပင်ပေါက်ကောင်းအောင် ထယ်ရေးအတွင်း မျိုးစေ့ကို အတိမ်အနက်(၁.၂) လက်မအတွင်း ရအောင်စိုက်ပါ။ အပင်စပေါက်သည်၊၊</p>

                        <p style="text-align: justify;" class="ms-2">(၀၄ ရက်)</p> 
                        <p style="text-align: justify;" class="ms-2 mb-4"> -အပင်ပေါက်စုံပါသည်။</p>

                        <p style="text-align: justify;" class="ms-2">(၁၀ ရက် -၁၅ ရက်) </p>
                        <p style="text-align: justify;" class="ms-2 mb-4">အပင်ငယ်စဉ် လှေး၊ကျိုင်း၊ ပျ၊မွှား၊ပင့်ကူနီ၊ပင်စည်ထိုးယင်တို့ ကာကွယ်ရန် ပင်လုံးပြန့် သတ္တိရှိသော ဆေးတစ်မျိုးမျိုးကို တစ်ဧကလျှင် သတ်မှတ်နှုန်းဖျန်းပါ။ ညိုးသေရောဂါ ကာကွယ်ရန်မှိုသတ်ဆေးတစ်မျိုးမျိုးဖျန်းပါ။ ပေါင်းမြက်ကင်းစင်အောင် စတင်ဆောင်ရွက်ပါ။</p>

                        <p style="text-align: justify;" class="ms-2">(၁၅ရက်-၂၅ရက်)</p>
                        <p style="text-align: justify;" class="ms-2 mb-4">ပဲပင်များ ကြီးထွားသန်မာဖြစ်ထွန်းရန် (NPK)နှင့် အနည်းလိုအာဟာရဓာတ်များ ပါဝင်သော ရွက်ဖြန်းမြေဩဇာများတွင် နိုက်ထရိုဂျင် အချိုးများသည့် သင့်တော်သော ရွက်ဖြန်းမြေဩဇာတစ်မျိုးမျိုးကို(၁၅)ရက် ခြား၍ နှစ်ကြိမ်ပတ်ဖျန်းပါ။ ပေါင်းမြက်ကင်းစင်အောင် ဆောင်ရွက်ပါ။ သီးကိုင်းဖူးလေးမျာ းစတင်နိုးကြားလာသည်။ ထိုအချိန်တွင် အစိုဓာတ်မပျက်ရန်၊ အာဟာရဓာတ်မချို့တဲ့ရန် ၊ပိုးမွှားရောဂါ မကျရောက်ရန် ဂရုပြုရမည်။</p>

                        <p style="text-align: justify;"class="ms-2">(၃၀ရက်-၃၅ရက်)</p>
                        <p style="text-align: justify;" class="ms-2 mb-4">(၃၅)ရက်ခန့်တွင် ကိုင်းဖျားပန်းဖူးလေးများ ဖြစ်ပေါ်လာသည်။ ပန်းဖူးပေါ်ပြီး တစ်ပတ်အကြာ ပန်းစပွင့်သည်။ (၄၅)ရက်သားမှ (၆၀)ရက်သားအတွင်း ပန်းဖြိုင်ဖြိုင်ပွင့်၍ ပွင့်အားကောင်းအသီးတောင့်များရန်(NPK)အချိုးပါသော ရွက်ဖြန်းမြေဩဇာများတွင် ဖော့စဖရပ်နှင့် ပိုတက်ဆီရမ်ရာခိုင်နှုန်းများသော သီးပွင့်ရွက်ဖျန်းမြေဩဇာများကို (၁၅)ရက်ခြား နှစ်ကြိမ်ဖျန်းပါ။ (သို့)ရေတစ်ဂါလံတွင် ယူရီးယား(၄.၅)ဇွန်းနှင့် လက်ချားတစ်ဇွန်းရော၍ တစ်ဧကလျှင် ဂါလံ(၂၀)ဖျန်းပါ။</p>

                        <p style="text-align: justify;" class="ms-2">(၃၅ရက်-၆၀ရက်)</p>
                        <p style="text-align: justify;" class="ms-2 mb-4"> ရွက်ဖောက်၊လှေး၊ကျိုင်း၊ရွက်စားငမြောင်တောင်၊ပင်စည်ထိုးယင်၊ပျပိုး၊သရစ်၊ထွာကောင်စိမ်း၊ရွက်စုံစားခူဝါ၊ပွင့်ထွေးရွက်ကပ်သီးလုံးဖောက်ပိုးစသည်တို့နှင့်ယင်ဖြူကြောင့်ဖြစ်သောအဝါရောင်မှိုစိတ်ဗိုင်းရက်စ်ရောဂါများမကျရောက်စေရန်ဖြစ်ပါသည်။(၆၀)ရက်သားအထိ(၁၅)ရက်တစ်ကြိမ်ပင်လုံးပြန့်ပိုးသတ်ဆေးတစ်မျိုးမျိုးကိုအလှည့်ကျပတ်ဖျန်းပါ။ </p>

                        <p style="text-align: justify;" class="ms-2">(၁၅ရက်-၆၀ရက်)</p>
                        <p style="text-align: justify;" class="ms-2 mb-4">သီးနှံသက်တမ်းတလျှောက်လုံး ပင်ညှိုးရောဂါ၊ ဖားဥမှိုရောဂါ၊ သံချေးရောဂါ၊ ဆာကိုစပိုးရားရွက်ပြောက်ရောဂါ၊ မှည့်ပြောက်စွန်းရောဂါ၊ ဗိုင်းရပ်စ်မိုစိတ်ရောဂါစသည့် ရောဂါများ ကျရောက်တက်၍ မှိုသတ်ဆေးများမှ ရောဂါနှင့်သင့်တော်သည့် ဆေးတစ်မျိုးမျိုးကို (၁၅)ရက်တစ်ကြိမ် အလှည့်ကျ(၄)ကြိမ်ဖျန်းပါ။ အစေ့အဆံတည်ချိန်ဖြစ်၍ သီးလုံးဖောက်ပိုးနှင့် ထိပ်ပုပ်ရောဂါကိုဂရုပြုပါ။ ပန်းပွင့်သန္ဓေအောင်ပြီး ပဲတောင့်ကလေးများ ဖြစ်ပေါ်လာသည်။</p>

                        <p style="text-align: justify;" class="ms-2">(၆၀ရက်-၇၀ရက်)</p>
                        <p style="text-align: justify;" class="ms-2 mb-4">တဖြည်းပဲတောင့်အတွင်း ပဲစေ့လေးများ ဖြစ်ပေါ်လာသည်။ ပဲစေ့လေးများ ပြည့်တင်းကြီးထွားချိန်ဖြစ်၍ တစ်ပင်လုံးချက်လုပ်သော အစာ၏(၆၀)%ကိုအစေ့အောင်မြင်ရန် အသုံးချရ၍ အစာအလိုအပ်ဆုံးဖြစ်ပါသည်။ ထိုအချိန်တွင် အစာချက်နှုန်းကောင်းရန် အရွက်များစိမ်းစိုကျန်းမာနေရန် အရေးကြီးသည်။ အာဟာရနှင့် အစိုဓာတ်မပျက်ရန်အရေး ကြီးသည်။</p>

                        <p style="text-align: justify;" class="ms-2 fw-bold">ရိတ်သိမ်းခြင်း</p>                        
                        <p style="text-align: justify;" class="ms-2">(၇၅ရက်-၁၁၀ရက်)</p>
                        <p style="text-align: justify;" class="ms-2  mb-4">မတ်ပဲမျိုးနှင့် ပတ်ဝန်းကျင်ရာသီဉတု ထိမ်းသိမ်းစောင့်ရှောက်မှုအပေါ်မူတည်၍ (၇၅-၁၁၀)ရက်အတွင်း ရင့်မှည့်လေ့ရှိကြသည်။ အရွက်များဝါခြောက်ပြီး အတောင့်များ၏(၇၅-၈၅)%အနက်ရောင်သို့ပြောင်း၍ ခြောက်သွေ့ချိန်တွင် ရိတ်သိမ်းပါ။ ရိတ်သိမ်းပြီး နှစ်နေသုံးနေလှမ်း၍ ချွေလှေ့သန့်စင်ပါ။ နေလှမ်းပြီးအစိုဓာတ်(၈-၉)% ရှိချိန်တွင် သိုလှောင်ပါ။</p>
                        <br>              
                </div>              
            </div>

            <div class="diseases p-md-3 mt-md-2">
                <h5 class="mb-md-5 disease_title">မတ်ပဲတွင်ကျရောက်သော ရောဂါနှင့်ပိုးမွှားများ</h5>
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
                        <!-- view diseases popup modal -->
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
                                        <p style="text-align: justify; padding-right: 10px;"><span class="fw-bold">လက္ခဏာရပ် - </span><?php echo $row['characteristics'];?></p>
                                    <?php
                                        if($row['type'] == 'ရောဂါ'){
                                    ?>
                                            <p style="text-align: justify; padding-right: 10px;"><span class="fw-bold">ကျရောက်ချိန် - </span><?php echo $row['cause_time'];?></p>
                                    <?php
                                        }
                                    ?>
                                            <p style="text-align: justify; padding-right: 10px;"><span class="fw-bold">ကာကွယ်နှိမ်နှင်းနည်း - </span><?php echo $row['prevention'];?></p>
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