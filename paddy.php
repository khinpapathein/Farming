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
            max-height: calc(100vh - 130px);
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
            .myBody{
                font-size: 14px;
            }
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
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-2 text-dark mb-4 animated slideInDown">စပါး</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="index.php">မူလစာမျက်နှာ</a></li>
                    <li class="breadcrumb-item text-dark" aria-current="page">စပါး</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Body Start -->
    <div class="container-fluid myBody" style="margin-top: 6rem; margin-bottom: 6rem; font-size: 13px;">
        <div class="container">
            <div class="row g-0">
                <h5>စပါးစိုက်ပျိုးထုတ်လုပ်မှု</h5>
                <p style="text-align: justify;line-height: 1.7;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; မြန်မာနိုင်ငံသည် စပါးပေါက်ရောက်သည့် မူရင်းဒေသအဖြစ်သတ်မှတ်ခံရသည်။ မြန်မာနိုင်ငံတွင် စပါးကို သမိုင်းမစတင်မီ အချိန်ကတည်းက စိုက်ပျိုးထုတ်လုပ်ခဲ့ကြပါသည်။ စူးအက်တူးမြောင်း စတင်ဖွင့်လှစ် အသုံးပြုသည့် ၁၈၆၉ ခုနှစ်တွင် ကုန်ပစ္စည်းများရောင်းဝယ်ဖောက်ကားခြင်းများ တိုးတက်လာခဲ့သည့် အတွက် မြန်မာနိုင်ငံအောက်ပိုင်း ဒေသများတွင် စပါးစိုက်ပျိုးထုတ်လုပ်ခြင်းကို တိုးချဲ့စိုက်ပျိုးခဲ့ကြသည်။ ဒုတိယကမ္ဘာစစ်မတိုင်မီကပင် စပါးစိုက်ပျိုးထုတ်လုပ်သည့်ဧရိယာ တဖြေးဖြေး တိုးတက်လာခဲ့ပြီး (၅) မီလီယံဟတ်တာအထိ စိုက်ပျိုးခဲ့ကြသည်။ နှစ်စဉ် စပါးတင်ပို့သည့်ပမာဏမှာ (၃) မီလီယံတန်အထိရှိပြီး မြန်မာနိုင်ငံသည် ကမ္ဘာတွင်ဆန်တင်ပို့မှုအများဆုံးနိုင်ငံဖြစ်လာခဲ့သည်။  </p>
                <p style="text-align: justify;line-height: 1.7;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; သို့သော်လည်း စစ်ပြီးကာလတွင် လူထုဆူပူအုံကြွမှုများနှင့် စစ်ပွဲကြောင့်ပျက်စီးဆုံးရှုံးမှု များကြောင့် စပါးစိုက်ပျိုးသည့်ဧရိယာလျော့ကျခဲ့သည်။ လွတ်လပ်ရေးရပြီးသည့် ၁၉၄၈ ခုနှစ်တွင် စပါးစိုက်ပျိုးထုတ်လုပ်မှုသည် စစ်မဖြစ်မီကာလ ၁၉၆၅ ခုနှစ်ဝန်းကျင် စပါးစိုက်ပျိုးထုတ်လုပ်မှု ပမာဏအထိ ပြန်လည်စိုက်ပျိုးထုတ်လုပ်နိုင်ခဲ့သည်။ ၁၉၆၅ ခုနှစ်နောက်ပိုင်း ဆယ်စုနှစ်ကာလအတွင်း စပါးစိုက်ပျိုးထုတ်လုပ်မှုသည် အနည်းငယ်တိုးတက်လာခဲ့သည်။ တိုးတက်လာသည့်လူဦးရေအတွက် အစားအစာလုံလောက်ရန်နှင့် စပါးတင်ပို့မှုတိုးတက်လာစေရန်ရည်ရွယ်၍ ၁၉၇၇-၁၉၇၈ ခုနှစ်များက စပါးစိုက်ပျိုးသည့်နည်းပညာအသစ်ဖြစ်သည့် Training and Visit Extension Approach ကိုအခြေခံပြီး မြန်မာနိုင်ငံအခြေအနေနှင့်ကိုက်ညီသည့် စပါးစိုက်ပျိုးသည့် တိုးချဲ့ပညာပေးနည်းလမ်းသစ်ဖြစ်သည့် အထူးအထွက်တိုးနည်းပညာပေးလုပ်ငန်းများကို စတင်လုပ်ဆောင်ခဲ့ကြသည်။ နည်းပညာပေးလုပ်ငန်း များလုပ်ဆောင်ရာတွင် တစ်မြို့နယ်လုံး စပါးစိုက်ပျိုးထုတ်လုပ်မှုလုပ်ငန်းများ လုပ်ဆောင်ပြီး နည်းဗျူဟာများကို အချက် (၅) ချက်ဖြင့် ထိရောက်စွာလုပ်ဆောင်ခဲ့ကြသည်။</p>

                <br>
                <br>
                <h5 class="my-2">စပါးစိုက်နည်းစနစ်များ</h5>
                <div class="ps-md-3">
                    <p style="font-size: 17px;" class="fw-bolder">(၁) စပါးကြဲပက်စိုက်ပျိုးနည်း</p>
                    <div class="ms-4">                       
                        <p style="text-align: justify;line-height: 1.7;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;မိုးဦးကာလနှင့် မိုးလယ်ကာလ ၊မိုးခေါင်သော အခါတွင်လည်းကောင်း၊ ရေကြီးနစ်မြုပ်ဖြစ်တတ်သော ရေနက်ကွင်းများတွင်လည်းကောင်း၊ ဒီရေအတက်အကျရှိသော နေရာများတွင်လည်းကောင်း၊ သွင်းရေရရှိရန် မလွယ်ကူသော မိုးရေသောက် ကုန်းမြင့်ပိုင်းလယ်များတွင်လည်းကောင်း၊ အချိန်လု၍ စိုက်ပျိုးရန်လိုအပ်သည့် ကာလများတွင်လည်းကောင်း၊ ဒေသအလိုက် သင့်တော်သည့် စိုက်ပျိုးနည်းများအနက် စပါးကြဲပက်စိုက်ပျိုးနည်းစနစ်သည် ဆောင်ရွက်သင့်သော စိုက်နည်းစနစ်ဖြစ်ပါသည်။ စပါးကြဲပက်စိုက်ပျိုးနည်းသည် အချိန်တိုအတွင်း၊ လုပ်သားနှင့်ရေလိုအပ်ချက် နည်းနည်းဖြင့်စိုက်ပျိုးအောင်မြင်ဖြစ်ထွန်း၍ ကုန်ကျစရိတ်လျော့နည်းစေသည့် နည်းစနစ်ဖြစ်၍ စပါးအခြောက်ကြပက်စိုက်ပျိုးခြင်းနှင့် အစိုကြဲပက်စိုက်ပျိုးခြင်း (၂)နည်း ရှိပါသည်။</p>
                        <div class="d-flex justify-content-center">                       
                            <img class="mx-sm-0 mx-md-5 mx-lg-5" src="img/tech1.jpg" alt="" srcset="" style="width: 292px;">                     
                        </div>

                        <br>
                        <p style="font-size: 15px;" class="fw-bold">၁။ စပါးမျိုးရွေးချယ်ခြင်း နှင့်မြေပြုပြင်ခြင်း</p>
                        <p style="text-align: justify;line-height: 1.7;" class="ms-2">ရာသီဥတုဒဏ်ခံနိုင်သည့် အပင်ပေါက်စွမ်းအားကောင်းပြီး ၊အထွက်ကောင်းမျိုးသန့်စပါးမျိုးကို ရွေးချယ်စိုက်ပျိုးရပါမည်။ အပင်အရပ်မမြင့်သော သက်လျင်၊သက်လတ်စပါးမျိုးကို ရွေးချယ်စိုက်ပျိုးရပါမည်။ အခြောက်ကြဲပက်စိုက်ပျိုးရာတွင် အခြောက်ထယ်ရေးကို ပုံမှန်အတိုင်း ထယ်ရေးနက်နက်နှင့် ထွန်ရေးညက်ညက် ထွန်ယက်ပြီးမှ ကြဲပက်စိုက်ပျိုးရသည်။ အစိုကြဲပတ်စိုက်ပျိုးရာတွင် သမန်းပြင် ကောင်းစွာပြုပြင်ပြီးမှ ကြဲပက်စိုက်ပျိုးရခြင်း ဖြစ်သည်။ မျိုးစေ့ချရန် သင့်တော်သော မြေအစိုဓါတ်ရှိချိန်တွင် မြေခံမြေဩဇာ ထည့်သွင်း၍ ကြမ်းတုံးရိုက်မြေညှိ စိုက်ခင်းမြေ ညီညာပြီးရေပြောင်စင်အောင်ထုတ်နိုင်ရန် စိမ့်မြောင်း၊ ပတ်မြောင်းများ ပြုလုပ်ထားရမည်။ </p>

                        <br>
                        <div class="d-flex justify-content-center my-2">                       
                            <img class="mx-sm-0 mx-md-5 mx-lg-5" src="img/tech1-1.jpg" alt="" srcset="" style="width: 290px;">                     
                        </div>
                        <p style="font-size: 15px;" class="fw-bold">၂။ မျိုးစေ့ချခြင်း </p>
                        <p style="text-align: justify;line-height: 1.7;" class="ms-2">တစ်ဧကအတွက် မျိုးသန့်စပါးမျိုးစေ့ (၂)တင်း အသုံးပြုရမည်။ အခြောက်ကြဲပက်စိုက်ပျိုးရာတွင် မျိုးစေ့ကို အခြောက်အတိုင်း ကြဲပက်ပြီး ကြမ်းရိုက်၍ ဖုံးအုပ်ရမည်။ အစိုကြဲပက်စိုက်ပျိုးရာတွင်စပါးစေ့များကို (၂၄)နာရီကြာ ရေစိမ်၍ ရေပေါ်ပေါ်သော မျိုးစေ့များကို ဖယ်ရှားကာ (၂၄)နာရီကြာ မျိုးအုပ်ရမည်။ မျိုးစပါးကို စာပါးစပ်ပြူအနေအထားတွင် ကြဲပက်ရမည်။ မျိုးစေ့ကြဲပက်ရာတွင်ညီညာစေရန် ဂရုပြုရမည်။ မျိုးစေ့ကြဲပက်စက်ကိရိယာကို အသုံးပြု၍လည်း စိုက်ပျိုးနိုင်သည်။ မျိုးစေ့ချပြီးချိန်မှ (၅)ရက်အတွင်း ကြွက်၊ငှက်၊တိရိစ္ဆာန်တို့၏ ဖျက်ဆီးခြင်းမှ ကြိုတင်ကာကွယ်မှုများ ပြုလုပ်ရမည်။ အပင်ပေါက်ပြီးနောက် (၁)လအတွင်း ကောက်ပင်ဖာခြင်းလုပ်ငန်းကို ဆောင်ရွက်ရပါမည်။ </p>
                        <br>

                        <div class="d-flex justify-content-center my-2">                       
                            <img class="mx-sm-0 mx-md-5 mx-lg-5" src="img/tech1-2.jpg" alt="" srcset="" style="width: 290px;">                     
                        </div>
                        <p style="font-size: 15px;" class="fw-bold">၃။  မြေဩဇာကျွေးခြင်း</p>
                        <p style="text-align: justify;line-height: 1.7;" class="ms-2">နွားချေးဆွေးနှင့် သဘာဝမြေဩဇာကို မြေခံအဖြစ် သုံးစွဲပါ။ ကောက်ရိုး၊ နှမ်းရိုး၊ စပါးခွံစသည့် သီးနှံအကြွင်းအကျန်များနှင့် နွားချေးတို့ကို မြေဆွေးပြုလုပ်၍ မြေပြင်ချိန်တွင် ထည့်ပါက အပင်၏ အနည်းလိုအာဟာရဓါတ်များကို ပံ့ပိုးပေးသည့်အပြင် မြေ၏ရေထိန်းစွမ်းအားကိုပါ တိုးတက်စေသည်။ ပုလဲဓါတ်မြေဩဇာအား အပင်ပွားစီးချိန်နှင့် အနှံမထွက်မီ(၅)ရက်အလိုတွင် အိတ်ဝက်စီ(တစ်အိတ်/ဧကနှုန်း) မှို့ကပ်ချိန်တွင် ပိုတက်ရှ်မြေဩဇာတစ်ဧက တစ်စိတ်(၁/၄အိတ်)/ဧက နှုန်း ထည့်သွင်းပေးပါ။ မြေဆီလွှာဓါတ်ခွဲခန်းများတွင် မြေဆီလွှာစမ်းသပ်စစ်ဆေး၍ ထောက်ခံချက်ပေးထားသော နှုန်းထားအတိုင်း ထည့်သွင်းအသုံးပြုပါ။ စပါးအရွက်အရောင်တိုင်းကဒ် (LCC)ကို အသုံးပြု၍ နိုက်ထရိုဂျင်ဓါတ်မြေဩဇာ လိုအပ်ချက်ကို အလွယ်တကူ သိရှိနိုင်ပါသည်။</p>
                        <br>

                        
                        <p style="font-size: 15px;" class="fw-bold">၄။ ရေသွင်းရေထုတ်ပြုလုပ်ခြင်းနှင့်ပေါင်းမြက်ကာကွယ်နှိမ်နင်းခြင်း</p>
                        <p style="text-align: justify;line-height: 1.7;" class="ms-2">ရေသွင်းရေထုတ်ကို လိုအပ်သလို ဆောင်ရွက်ပေးရမည်။ အပင်ပေါက်ပြီး(၂)ပတ်အတွင်း ရေမမြုပ်စေရန် သတိပြုရမည်။ မှို့ကပ်ချိန်နှင့် ရင့်မှည့်ချိန်အကြားတွင် သွင်းရေလုံလောက်စွာ ရရှိရန်လိုပါသည်။ ရိတ်သိမ်းရာတွင် လွယ်ကူစေရန် ပန်းပွင့်စုံပြီးနောက် (၂၀-၂၅)ရက် အတွင်းရေထုတ်ပေးရပါမည်။ ပေါင်းမြက်ထူထပ်ပါက စပါးအထွက်နှုန်းကို ထိခိုက်စေသည့်အတွက် ထိထိရောက်ရောက် ပေါင်းနှိမ်နင်းရန် လိုအပ်ပါသည်။ မြေကို ကောင်းစွာပြုပြင်ခြင်းဖြင့် ပေါင်းမြက်များအား နှိမ်နင်းနိုင်သည်။ လက်ဖြင့်ပေါင်းမြက်နုတ်ခြင်း၊ ပေါင်းသတ်ဆေးဖြင့်ဖြစ်စေ ပေါင်းမြက်နှိမ်နှင်းခြင်းကို အပင်ပေါက်ပြီး (၁) ပတ်မှ (၁)လအတွင်း ဆောင်ရွက်ရပါမည်။ စပါးမျိုးစေ့မကြဲမီနှင့် စပါးပင်ပေါက်ပြီး ပေါင်းပင်အမျိုးအစားပေါ်မူတည်၍ မှတ်ပုံတင်ထားသော ပေါင်းသတ်ဆေးကို ဆေးညွှန်းအတိုင်း တိကျစွာအသုံးပြုပါ ။</p>

                        <div class="d-flex justify-content-center my-2">                       
                            <img class="mx-sm-0 mx-md-5 mx-lg-5" src="img/tech1-3.jpg" alt="" srcset="" style="width: 290px;">                     
                        </div>
                        <p style="font-size: 15px;" class="fw-bold">၅။ ပိုးမွားရောဂါကာကွယ်နှိမ်နင်းခြင်း</p>
                        <p style="text-align: justify;line-height: 1.7;" class="ms-2">ပိုးမွားရောဂါ ကျရောက်ဖျက်ဆီးမှုရှိ/မရှိကို အမြဲမပြတ် ကွင်းဆင်းကင်းထောက်စစ်ဆေးပြီး  ပိုးသတ်ဆေးကို လိုအပ်မှသာ အသုံးပြုပါ။ ပိုးမွှားရောဂါများ ရှင်သန်ခိုအောင်းရာ နေရာဖြစ်သော ပေါင်းပင်နှင့်ပင်ကြွင်းပင်ကျန်များကို သုတ်သင်ရှင်းလင်းပါ။ ကြွက်ကြောင့် သီးနှံလေလွင့်ဆုံးရှုံးမှု လျော့နည်းစေရန်အတွက် စိုက်ခင်း၏ ဘေးပတ်ဝန်းကျင်ရှိ ခြုံနွယ်များကို ရှင်းလင်းခြင်း၊ကြွက်ထောင်ချောက်ထောင်ခြင်း၊ ကြွက်ကာပစ္စည်းများအသုံးပြုခြင်း စသည့်နည်းလမ်းများကို ဆောင်ရွက်နိုင်ပါသည်။</p>
                        <br>

                        <div class="d-flex justify-content-center my-2">                       
                            <img class="mx-sm-0 mx-md-5 mx-lg-5" src="img/tech1-4.jpg" alt="" srcset="" style="width: 290px;">                     
                        </div>
                        <p style="font-size: 15px;" class="fw-bold">၆။ ရိတ်သိမ်းခြင်း</p>
                        <p style="text-align: justify;line-height: 1.7;" class="ms-2">စပါးနှံ၏ (၈၀‒၈၅)ရာခိုင်နှုန်း ရင့်မှည့်ချိန် (မောင်းညိုချိန်)တွင် အလေအလွင့်အနည်းဆုံး နည်းလမ်းဖြင့် ရိတ်သိမ်းပြီး ချက်ချင်းချွေလှေ့၍ အခြောက်ခံပါ။ စပါးအစိုဓါတ်သည်မျိုးအတွက်(၁၃)ရာခိုင်နှုန်းနှင့် စားသုံးမည့်စပါးအတွက် (၁၄)ရာခိုင်နှုန်း လိုအပ်ပါသည်။</p>
                        <br>
                    </div>                 
                </div> 
                <div class="ps-md-3">
                    <p style="font-size: 17px;" class="fw-bolder">(၂) ပျိုးထောင်စိုက်ပျိုးသောနည်းစနစ်</p>
                    <div class="ms-4">                       
                        <p style="text-align: justify;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;မျိုးစေ့နှုန်းထား သက်သာစေခြင်း၊ ပျိုးပင်ကြီးထွားမှု ညီညာသန်စွမ်းခြင်း၊ ပင်ပွားပွားစည်းမှု ပိုမိုကောင်းမွန်ခြင်း၊ ပျိုးခင်းအတွင်းပေါင်းနှိမ်နင်းမှု လွယ်ကူခြင်း၊ အထွက်နှုန်းတိုးတက်စေသည့် ကောင်းမွန်သန်မာသော ပျိုးပင်များရရှိပါသည်။</p>
                        <div class="d-flex justify-content-center">                       
                            <img class="mx-sm-0 mx-md-5 mx-lg-5" src="img/tech2-1.jpg" alt="" srcset="" style="width: 292px;">                     
                        </div>

                        <br>
                        <p style="font-size: 15px;" class="fw-bold">၁။  မျိုးစေ့ချခြင်း</p>
                        <p style="text-align: justify;" class="ms-2">တစ်ဧက မျိုးသန့်မျိုးစေ့(RS)(၁)တင်းနှုန်းသုံးပါ။ စပါးစေ့အား မျိုးညှောက်ဖေါက်ပြီး ပျိုးပေါင်ပေါ်တွင် မျိုးစေ့ညီညီညာညာချပါ။ ပျိုးဘောင်(၈)ဘောင်တွင် မျိုးစေ့တစ်ဘောင်လျှင်(၂)ပြည်နှုန်းအသုံးပြုပါ။</p>

                        <br>
                        <div class="d-flex justify-content-center my-2">                       
                            <img class="mx-sm-0 mx-md-5 mx-lg-5" src="img/tech1-1.jpg" alt="" srcset="" style="width: 290px;">                     
                        </div>
                        <p style="font-size: 15px;" class="fw-bold">၂။ ချက်ချင်းနှုတ် ချက်ချင်းစိုက်ပျိုးခြင်း</p>
                        <p style="text-align: justify;" class="ms-2">ပျိုးမနှုတ်မီ(၃)ရက်ခန့် ကြိုတင်၍ ရေသွင်းပါ။ ပျိုးနှုတ်ရာတွင် ပျိုးပင်ခြေမှ စနစ်တကျကိုင်တွယ်၍ ညင်သာစွာနှုတ်ပါ။ ပျိုးပင်များကို တင်းကြပ်စွာ စည်းခြင်းမပြုရပါ။ ပျိုးနှုတ်ပြီးပြီးချင်း ချက်ချင်းစိုက်ပျိုးပါ။</p>
                        <div class="d-flex justify-content-center my-2">                       
                            <img class="mx-sm-0 mx-md-5 mx-lg-5" src="img/tech2-9.jpg" alt="" srcset="" style="width: 290px;">                     
                        </div>
                        <br>

                        <p style="font-size: 15px;" class="fw-bold">၃။ ပျိုးပင်အတိမ်အနက်လိုက်နာခြင်းနှင့် လက်ဆသတ်မှတ်ခြင်း</p>
                        <p style="text-align: justify;" class="ms-2">ကောက်ပင်လှန် မြန်ဆန်စေရန်အတွက် ကောက်စိုက်ရာတွင် ပျိုးပင်ကို(၁‒၁.၅)လက်မထက် မနက်စေရပါ။ ကောက်စိုက်ရာတွင် ကောက်ကွက်တစ်ကွက်လျှင် လက်ဆ(၂-၃)ပင်စိုက်ပျိုးပါ။</p>
                        <div class="d-flex justify-content-center my-2">                       
                            <img class="mx-sm-0 mx-md-5 mx-lg-5 w-50" src="img/tech2-4.jpg" alt="" srcset="">                     
                        </div>
                        <br>

                        <p style="font-size: 15px;" class="fw-bold">၄။ ပေါင်းမြက် ရှင်းလင်းခြင်</p>
                        <p style="text-align: justify;" class="ms-2">ပေါင်းမြက်ထူထပ်ပါက စပါးအထွက်နှုန်းကို ထိခိုက်စေသည့်အတွက် ထိထိရောက်ရောက် ပေါင်းနှိမ်နင်းပါ။ မြေကို ကောင်းစွာပြုပြင်ခြင်းဖြင့် ပေါင်းမြက်များအား နှိမ်နင်းနိုင်သည်။ ပေါင်းနှိမ်နင်းခြင်းကို လက်ဖြင့်လည်းကောင်း၊ ပေါင်းသတ်ဆေးဖြန်းခြင်းဖြင့်လည်းကောင်း ဆောင်ရွက်ပါ။ ပေါင်းပင်အမျိုးအစားပေါ်မူတည်၍ မှတ်ပုံတင်ထားသော ပေါင်းသတ်ဆေးကို ဆေးညွှန်းအတိုင်း တိကျစွာအသုံးပြုပါ။</p>
                        <div class="d-flex justify-content-center my-2">                       
                            <img class="mx-sm-0 mx-md-5 mx-lg-5" src="img/tech2-5.jpg" alt="" srcset="" style="width: 290px;">                     
                        </div>
                        <br>

                        <p style="font-size: 15px;" class="fw-bold">၅။ ပိုးမွှားရောဂါ ကာကွယ်နှိမ်နင်းခြင်း</p>
                        <p style="text-align: justify;" class="ms-2">ပိုးမွားရောဂါ ကျရောက်ဖျက်ဆီးမှုရှိ/မရှိကို အမြဲမပြတ် ကွင်းဆင်းကင်းထောက်စစ်ဆေးပြီး ပိုးသတ်ဆေးကို လိုအပ်မှသာ အသုံးပြုပါ။ ပိုးမွှားရောဂါများ ရှင်သန်ခိုအောင်းရာနေရာဖြစ်သော ပေါင်းပင်နှင့် ပင်ကြွင်းပင်ကျန်များကို သုတ်သင်ရှင်းလင်းပါ။ ကြွက်ကြောင့် သီးနှံလေလွင့်ဆုံးရှုံးမှု လျော့နည်းစေရန်အတွက် စိုက်ခင်း၏ ဘေးပတ်ဝန်းကျင်ရှိ ခြုံနွယ်များကို ရှင်းလင်းခြင်း၊ ကြွက်ထောင်ချောက်ထောင်ခြင်း၊ ကြွက်ကာပစ္စည်းများအသုံးပြုခြင်း စသည့် နည်းလမ်းများကို ဆောင်ရွက်ပါ။ ဘက်စုံ၊ပိုးမွှား‌ရောဂါ ကာကွယ်နှိမ်နင်းနည်းစနစ်ကိုကျင့်သုံးပါ။</p>
                        <div class="d-flex justify-content-center my-2">                       
                            <img class="mx-sm-0 mx-md-5 mx-lg-5" src="img/tech2-6.jpg" alt="" srcset="" style="width: 290px;">                     
                        </div>
                        <br>

                        <p style="font-size: 15px;" class="fw-bold">၆။ အောင်ရေထုတ်ခြင်း</p>
                        <p style="text-align: justify;" class="ms-2">စပါးနှံများ ရင့်မှည့်မှုညီညာစေရန်နှင့် အောက်ခံမြေမာလာ၍ လူနှင့်ကောက်ရိတ်စက်များ လွယ်ကူစွာဝင်ထွက်နိုင်စေရန် စပါးနှံများ ရင့်မှည့်စပြုချိန်တွင် ရေထုတ်ပေးပါ။</p>
                        <div class="d-flex justify-content-center my-2">                       
                            <img class="mx-sm-0 mx-md-5 mx-lg-5 w-75" src="img/tech2-7.jpg" alt="" srcset="">                     
                        </div>
                        <br>

                        <p style="font-size: 15px;" class="fw-bold">၇။ 	ရိတ်သိမ်းချိန် မှန်ကန်အောင် ဆောင်ရွက်ခြင်း</p>
                        <p style="text-align: justify;" class="ms-2">စပါးနှံ၏ (၈၀-၈၅) ရာခိုင်နှုန်းရင့် မှည့်ချိန် (မောင်းညိုချိန်)တွင် အလေအလွင့်အနည်းဆုံးနည်းလမ်းဖြင့် ရိတ်သိမ်းပြီး ချက်ချင်းချွေလှေ့စက်များ အသုံးပြုပါ။ စပါးအစိုဓါတ်သည် မျိုးအတွက် (၁၃)ရာခိုင်နှုန်းနှင့် စားသုံးမည့် စပါးအတွက်(၁၄)ရာနှုန်း လိုအပ်ပါသည်။</p>
                        <div class="d-flex justify-content-center my-2">                       
                            <img class="mx-sm-0 mx-md-5 mx-lg-5 w-75" src="img/tech2-8.jpg" alt="" srcset="">                     
                        </div>
                        <br>
                    </div>                 
                </div>                
            </div>

            <div class="diseases p-md-3 mt-md-5">
                <h5 class="mb-md-5">စပါးတွင်ကျရောက်သော ရောဂါနှင့်ပိုးမွှားများ</h5>
                <div class="row m-md-4">
                    <?php 
                        $status = "Active";
                        $sql = "select * from paddy_diseases where status=:status";
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
                        <!-- disease more detail popup modal -->
                        <div id="<?php echo $row['id'];?>" class="modal more p-0 m-0">
                            <div class="modal-content p-2 p-md-4">
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


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</body>

</html>