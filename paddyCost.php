<?php
    session_start();
	require_once("includes/config.php");

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
        .modal-body {
            max-height: calc(100vh - 210px);
            overflow-y: auto;
            min-height: 400px;
            padding: 5px;
        }
        .modal-content {
            background-color: #fff;
            padding: 20px;
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
        @media only screen and (max-width: 400px) {
            table td{
                font-size: 13px!important;
            }
            .modal-title{
                font-size: 14pt!important;
            }
        }
        @media only screen and (min-width: 300px) {
            #headerTitle{
                font-size: 19pt;
            }
            /* Modal Styles */
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
            .modal-title{
                margin-left: 0px;
            }
            .mybody{
                font-size: 13px;
            }
        }
        @media only screen and (min-width: 350px) {
            .modal-title{
                margin-left: 40px;
            }
        }
        @media only screen and (min-width: 400px) {
            #headerTitle{
                font-size: 21pt;
            }
            .modal-title{
                margin-left: 50px;
            }
        }
        @media only screen and (min-width: 500px) {
            #headerTitle{
                font-size: 36pt;
            }
            form label{
                font-size: 15pt;
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
            .mybody{
                font-size: 14px;
            }
        }
        @media only screen and (min-width: 700px) {
            form label{
                font-size: 13pt;
            }
            .modal-title{
                margin-left: 100px;
            }
        }
        @media only screen and (min-width: 900px) {
            form label{
                font-size: 15pt;
            }
        }
        @media only screen and (min-width: 1000px) {
            .myprofile{
                min-width: 110px;
            }
            .modal-title{
                margin-left: 170px;
            }
        }
        @media only screen and (min-width: 1050px) {
            form label{
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
            .modal-title{
                margin-left: 200px;
            }
        }
        @media only screen and (min-width: 1050px) {
            .modal-title{
                margin-left: 250px;
            }
        }
    </style>

    <script>
        function data(){
            if(document.paddyCost.district.value == '0'){
                alert('ကျေးဇူးပြု၍ စိုက်ပျိူးလိုသည့် ဒေသကိုရွေးချယ်ပါ။');
                document.paddyCost.district.focus();
                return false;
            }
            if(document.paddyCost.type.value == '0'){
                alert('ကျေးဇူးပြု၍ စိုက်ပျိူးလိုသည့် စပါးအမျိုးအစားရွေးချယ်ပါ။');
                document.paddyCost.type.focus();
                return false;
            }
            if(document.paddyCost.technique.value == '0'){
                alert('ကျေးဇူးပြု၍ စိုက်ပျိူးလိုသည့် စိုက်ပျိုးနည်းစနစ်ရွေးချယ်ပါ။');
                document.paddyCost.technique.focus();
                return false;
            }
            // if(document.paddyCost.employee.value == ''){
            //     alert('ကျေးဇူးပြု၍ တစ်ရက်ပျမ်းမျှ အလုပ်သမားငှားရမ်းခကို ဖြည့်ပါ။');
            //     document.paddyCost.employee.focus();
            //     return false;
            // }
            return true;
        }
    </script>
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
                            <a href="#" class="nav-link dropdown-toggle active px-2 mx-0" data-bs-toggle="dropdown">ခန့်မှန်းကုန်ကျငွေ တွက်မည်</a>
                            <div class="dropdown-menu bg-light rounded-0 m-0">
                                <a href="paddyCost.php" class="dropdown-item active">စပါး</a>
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
            <h1 class="display-2 text-dark mb-4 animated slideInDown" id="headerTitle">စပါးစိုက်ပျိုးခြင်းအတွက် ခန့်မှန်းအမြတ်ငွေ တွက်ချက်မှု</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="index.php">မူလစာမျက်နှာ</a></li>
                    <li class="breadcrumb-item text-dark" aria-current="page">စပါးစိုက်ပျိုးခြင်းအတွက် ခန့်မှန်းအမြတ်ငွေ တွက်ချက်မှု</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Body Start -->
    <div class="container-fluid" style="margin-top: 2rem; margin-bottom: 6rem;">
        <div class="container">
                <form action="" name="paddyCost" class="mx-lg-5 mx-sm-2">
                    <div class="container calculate py-3">
                            <div class="row my-3 mx-lg-5 mx-sm-0">
                                <div class="col-12 col-sm-5 col-md-5">
                                    <label for="" class="fw-bold py-1">စိုက်ပျိုးလိုသော ခရိုင်</label>
                                </div>

                                <div class="col-12 col-sm-5 col-md-7">
                                    <select class="form-select" name="district" id="district" aria-label="Large select example" required>
                                        <option selected disabled value="0">ခရိုင်ရွေးပါ</option>
                                        <?php
                                            $sql ="select * from districts";
                                            $statement = $conn->prepare($sql);
                                            $statement->execute();
                                            $result = $statement->fetchAll(PDO::FETCH_ASSOC);
                                            foreach($result as $row){
                                        ?>
                                            <option value="<?php echo $row['id'];?>"><?php echo $row['name'];?></option>
                                        <?php
                                            }
                                        ?>
                                    </select>
                                </div>
                                <input type="hidden" name="tractor" id="tractor">  
                                <input type="hidden" name="lawnmower" id="lawnmower">  
                                <input type="hidden" name="mower" id="mower">  
                                <input type="hidden" name="fertilizer" id="fertilizer">  
                                <input type="hidden" name="harvester" id="harvester">  
                                <input type="hidden" name="general" id="general">  
                                <input type="hidden" name="preparegrains" id="preparegrains">  
                                <input type="hidden" name="water" id="water">
                            </div>
                            <div class="row my-3 mx-lg-5 mx-sm-0">
                                <div class="col-12 col-sm-5 col-md-5">
                                    <label for="" class="fw-bold py-1">စိုက်ပျိူးမည့် စပါးအမျိုးအစား</label>
                                </div>
                                <div class="col-12 col-sm-5 col-md-7">
                                    <select class="form-select" name="type" id="type" required>
                                        <option selected disabled value="0">စပါး</option>
                                    <?php
                                        $sql ="select * from type";
                                        $statement = $conn->prepare($sql);
                                        $statement->execute();
                                        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
                                        foreach($result as $row){
                                    ?>
                                        <option value="<?php echo $row['id'];?>"><?php echo $row['name'];?></option>
                                    <?php
                                        }
                                    ?>
                                    </select>
                                </div>                                
                            </div>
                            <div class="row my-3 mx-lg-5 mx-sm-0">
                                <div class="col-12 col-sm-5 col-md-5">
                                    <label for="" class="fw-bold py-1">စပါးအမည်</label>
                                </div>
                                <div class="col-12 col-sm-5 col-md-7">
                                    <select class="form-select" name="paddyName" id="getPaddyByType" aria-label="Large select example" required>
                                        <option selected disabled>စပါးအမျိုးအမည်</option>
                                    </select>
                                </div>                                
                            </div>
                            <div class="row my-3 mx-lg-5 mx-sm-0">
                                <div class="col-12 col-sm-5 col-md-5">
                                    <label for="" class="fw-bold py-1">စိုက်ပျိူးလိုသော ဧကအရေအတွက်</label>
                                </div>
                                <div class="col-12 col-sm-5 col-md-7">
                                    <select class="form-select" name="NumOfAcre" id="NumOfAcre" required aria-label="Large select example">
                                        <option value="1">၁ဧက</option>
                                        <option value="2">၂ဧက</option>
                                        <option value="3">၃ဧက</option>
                                        <option value="4">၄ဧက</option>
                                        <option value="5">၅ဧက</option>
                                        <option value="6">၆ဧက</option>
                                        <option value="7">၇ဧက</option>
                                        <option value="8">၈ဧက</option>
                                        <option value="9">၉ဧက</option>
                                        <option value="10">၁၀ဧက</option>
                                        <option value="11">၁၁ဧက</option>
                                        <option value="12">၁၂ဧက</option>
                                        <option value="13">၁၃ဧက</option>
                                        <option value="14">၁၄ဧက</option>
                                        <option value="15">၁၅ဧက</option>
                                    </select>
                                </div>                                
                            </div>
                            <div class="row my-3 mx-lg-5 mx-sm-0">
                                <div class="col-12 col-sm-5 col-md-5">
                                    <label for="" class="fw-bold py-1">စိုက်ပျိုးလိုသော စိုက်ပျိုးနည်းစနစ်</label>
                                </div>
                                <div class="col-12 col-sm-5 col-md-7">
                                    <select class="form-select" name="technique" id="technique" aria-label="Large select example" required>
                                        <option value="0" selected disabled>စိုက်ပျိုးနည်းစနစ် ရွေးချယ်ပါ</option>
                                        <option value="1">ကျဲပက်စိုက်ပျိုးခြင်း</option>
                                        <option value="2">ပျိုးပင်ထောင်၍ ကောက်စိုက်ပျိုးခြင်း</option>
                                    </select>
                                </div>                                
                            </div>
                            <div class="row my-3 mx-lg-5 mx-sm-0">
                                <div class="col-12 col-sm-5 col-md-5">
                                    <label for="" class="fw-bold py-1">တစ်ရက်ပျမ်းမျှ အလုပ်သမားငှားရမ်းခ</label>
                                </div>
                                <div class="col-12 col-sm-5 col-md-7">
                                    <input type="number" name="employee" id="employee" class="form-control" placeholder="(ကျပ်)">
                                </div>                                
                            </div>
                            <div class="row my-3 mx-lg-5 mx-sm-0">
                                <div class="col-12 col-sm-5 col-md-5">
                                     
                                </div>
                                <div class="col-12 col-sm-5 col-md-7">
                                    <button class="btn btn-danger mycalculate_btn mx-md-4 mx-sm-3" id="clear">Clear</button>
                                    <button class="btn btn-success mycalculate_btn mx-md-4 mx-sm-3" type="button" id="calculate" onclick="return data();">တွက်မည်</button> 
                                </div>                                
                            </div>
                    </div>
                </form>
       
        </div>
    </div>
    <!-- Body End -->


    <!-- ခန့်မှန်းအမြတ်ငွေ စာရင်း popup(total estimate Cost) Start-->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <div class="modal-header p-0">
                <h5 class="modal-title" id="exampleModalLongTitle">ခန့်မှန်းအမြတ်ငွေ တွက်ချက်မှု</h5>
                <span class="close" onclick="closeModal();">&times;</span>
                </button>
            </div>                            
            <div class="modal-body">
                <div id="totalEstimate">

                </div>                                                
            </div>
        </div>
    </div>
    <!-- ခန့်မှန်းအမြတ်ငွေ စာရင်း (total estimate Cost) End-->
    

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
        $(document).ready(function (){

            // Get Paddy By Type using AJAX -----------
            $("#type").on('change', function (e){
                e.preventDefault();
                var typeid = $('#type').val();
                request = $.ajax({
                    type: "POST",
                    url: 'getPaddyByType.php',
                    data: {
                        typeid:typeid
                    }
                });
                
                request.done(function (response, textStatus, jqXHR){
                    var jsonData = JSON.parse(response);
                    var htmlText;
                    $.each(jsonData, function (i,v){
                        console.log(v.name);
                        htmlText += `<option value="${v.id}">${v.name}</option>`;
                    });
                    $("#getPaddyByType").html(htmlText);
                });

                request.fail(function (jqXHR, textStatus, errorThrown){
                    console.error(
                        "The following error occurred: "+
                        textStatus, errorThrown
                    );
                });
            });

            // Get cost By district using AJAX -----------
            $("#district").on('change', function (e){
                e.preventDefault();
                var districtId = $('#district').val();
                request = $.ajax({
                    type: "POST",
                    url: 'getCost.php',
                    data: {
                        districtId:districtId
                    }
                });
                
                request.done(function (response, textStatus, jqXHR){
                    var jsonData = JSON.parse(response);
                    var htmlText;
                    $.each(jsonData, function (i,v){
                        console.log(v.tractor);
                        $("#tractor").val(v.tractor);
                        $("#lawnmower").val(v.lawnmower);
                        $("#mower").val(v.mower);
                        $("#fertilizer").val(v.fertilizer);
                        $("#harvester").val(v.harvester);
                        $("#general").val(v.general);
                        $("#preparegrains").val(v.preparegrains);
                        $("#water").val(v.water);
                    });
                });

                request.fail(function (jqXHR, textStatus, errorThrown){
                    console.error(
                        "The following error occurred: "+
                        textStatus, errorThrown
                    );
                });
            });

            // Clear
            $("#clear").on('click', function (){
                $('#type').val() = '';
                $('#getPaddyByType').val() = '';
                $('#NumOfAcre').val() = '';
                $('#technique').val() = '';
                $('#employee').val() = '';
            });

            // Calculate
            $("#calculate").on('click', function (){
                    var paddyType = $('#type').val();
                    var price = '';
                        jQuery.ajax({
                            url: "getPrice.php",
                            data:'pid='+$("#getPaddyByType").val(),
                            type: "POST",
                            success:function(data){
                                price = parseInt(data.trim());
                                console.log(price);

                                var paddy = $('#getPaddyByType').val();
                                var Acre = $('#NumOfAcre').val();
                                var technique = $('#technique').val();
                                var employee = $('#employee').val();

                                var tractorCost = $('#tractor').val();
                                var lawnmowerCost = $('#lawnmower').val();
                                var mowerCost = $('#mower').val();
                                var fertilizerCost = $('#fertilizer').val();
                                var harvesterCost = $('#harvester').val();
                                var generalCost = $('#general').val();
                                var preparegrainsCost = $('#preparegrains').val();
                                var waterCost = $('#water').val();

                                // alert(price);
                                if(employee != '' && employee > 0){
                                    if(paddyType == 2 && technique == '1'){ // မိုးစပါး ---> ကြဲခင်းစနစ်
                                        // alert(grainsCost);
                                        var grains = 2*((price/100)+2000)*Acre; //မျိုးစေ့
                                        var tractor = tractorCost*2*Acre; //ထွန်စက်မောင်း
                                        var lawnmower = lawnmowerCost*Acre; //မြေညှိ၊ စက်ခုတ်
                                        var mower = mowerCost*Acre; //မြက်ကောက်
                                        var employeeCost = 5*employee*Acre; //အလုပ်သမားခ
                                        var fertilizer = fertilizerCost*Acre;//ဓာတ်မြေဩဇာဖိုး
                                        var harvester = harvesterCost*Acre; //ကောက်ရိတ်စက်
                                        var generalCost = generalCost*Acre; //အထွေထွေကုန်ကျစရိတ်
                                        var totalCost = grains+tractor+lawnmower+mower+employeeCost+fertilizer+harvester;
                                        var income =Acre*78*(price/100);
                                        var profit = income-totalCost;
                                        // alert(profit);
                                        var estimateCost = `
                                            <table align="center" cellpadding="5px">
                                                <tbody>
                                                    <tr>
                                                        <td>မျိုးစေ့ကုန်ကျစရိတ်</td>
                                                        <td>${grains.toLocaleString("en-US")} ကျပ်</td>
                                                    </tr>
                                                    <tr>
                                                        <td>ထွန်စက်မောင်းခ</td>
                                                        <td>${tractor.toLocaleString("en-US")} ကျပ်</td>
                                                    </tr>
                                                    <tr>
                                                        <td>မြေညှိ၊ စက်ခုတ်</td>
                                                        <td>${lawnmower.toLocaleString("en-US")} ကျပ်</td>
                                                    </tr>
                                                    <tr>
                                                        <td>မြက်ကောက်ခ</td>
                                                        <td>${mower.toLocaleString("en-US")} ကျပ်</td>
                                                    </tr>
                                                    <tr>
                                                        <td>အလုပ်သမားခ</td>
                                                        <td>${employeeCost.toLocaleString("en-US")} ကျပ်</td>
                                                    </tr>
                                                    <tr>
                                                        <td>ဓာတ်မြေဩဇာဖိုး</td>
                                                        <td>${fertilizer.toLocaleString("en-US")} ကျပ်</td>
                                                    </tr>
                                                    <tr>
                                                        <td>ကောက်ရိတ်စက်</td>
                                                        <td>${harvester.toLocaleString("en-US")} ကျပ်</td>
                                                    </tr>
                                                    <tr>
                                                        <td>အထွေထွေကုန်ကျစရိတ်</td>
                                                        <td>${generalCost.toLocaleString("en-US")} ကျပ်</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">
                                                            <hr style="padding: 0!important; margin: 0!important;">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: 13pt; font-weight: bold;">ခန့်မှန်းစုစုပေါင်း ကုန်ကျစရိတ်</td>
                                                        <td style="font-size: 13pt; font-weight: bold;">${totalCost.toLocaleString("en-US")} ကျပ်</td>
                                                    </tr>
                                                    <tr>
                                                        <td>(၁ဧကလျှင် ပျမ်းမျှစပါးအထွက်နှုန်း-၇၈တင်း)ခန့်မှန်းဝင်ငွေ</td>
                                                        <td>${income.toLocaleString("en-US")} ကျပ်</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">
                                                            <hr style="padding: 0!important; margin: 0!important;">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: 15pt; font-weight: bold;">ခန့်မှန်းအမြတ်ငွေ</td>
                                                        <td style="font-size: 17pt; font-weight: 600;font-style: italic; color: green">${profit.toLocaleString("en-US")} ကျပ်</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        `;
                                        $("#totalEstimate").html(estimateCost);
                                        openModal();
                                        function openModal() {
                                            document.getElementById('myModal').style.display = 'flex';
                                        }
                                    }
                                    else if(paddyType == 2 && technique == '2'){ // ကောက်စိုက်စနစ်
                                        var grains = 2*((price/100)+2000)*Acre; //မျိုးစေ့
                                        var prepareGrains = preparegrainsCost*Acre; //ပျိုးခင်းပြင်
                                        var tractor = tractorCost*2*Acre; //ထွန်စက်မောင်း
                                        var lawnmower = lawnmowerCost*Acre; //မြေညှိ၊ စက်ခုတ်
                                        // var mower = 20000*Acre; //မြက်ကောက်
                                        var getPlant = 3*employee*Acre; //ပျိုးနှုတ်ခ
                                        var planted = 13*employee*Acre; // ကောက်စိုက်ခ
                                        var employeeCost = 7*employee*Acre; //အလုပ်သမားခ
                                        var fertilizer = fertilizerCost*Acre;//ဓာတ်မြေဩဇာဖိုး
                                        var harvester = harvesterCost*Acre; //ကောက်ရိတ်စက်
                                        var generalCost = generalCost*Acre; //အထွေထွေကုန်ကျစရိတ်
                                        var totalCost = grains+prepareGrains+tractor+lawnmower+employeeCost+fertilizer+harvester;
                                        var income =Acre*80*(price/100);
                                        var profit = income-totalCost;
                                        var estimateCost = `
                                            <table align="center" cellpadding="5px">
                                                <tbody>
                                                    <tr>
                                                        <td style="margin: 0px 30px;">မျိုးစေ့ကုန်ကျစရိတ်</td>
                                                        <td>${grains.toLocaleString("en-US")} ကျပ်</td>
                                                    </tr>
                                                    <tr>
                                                        <td>ပျိုးခင်းပြင်</td>
                                                        <td>${prepareGrains.toLocaleString("en-US")} ကျပ်</td>
                                                    </tr>
                                                    <tr>
                                                        <td>ထွန်စက်မောင်းခ</td>
                                                        <td>${tractor.toLocaleString("en-US")} ကျပ်</td>
                                                    </tr>
                                                    <tr>
                                                        <td>မြေညှိ၊ စက်ခုတ်</td>
                                                        <td>${lawnmower.toLocaleString("en-US")} ကျပ်</td>
                                                    </tr>
                                                    <tr>
                                                        <td>ပျိုးနှုတ်ခ</td>
                                                        <td>${getPlant.toLocaleString("en-US")} ကျပ်</td>
                                                    </tr>
                                                    <tr>
                                                        <td>ကောက်စိုက်ခ</td>
                                                        <td>${planted.toLocaleString("en-US")} ကျပ်</td>
                                                    </tr>
                                                    <tr>
                                                        <td>အလုပ်သမားခ</td>
                                                        <td>${employeeCost.toLocaleString("en-US")} ကျပ်</td>
                                                    </tr>
                                                    <tr>
                                                        <td>ဓာတ်မြေဩဇာဖိုး</td>
                                                        <td>${fertilizer.toLocaleString("en-US")} ကျပ်</td>
                                                    </tr>
                                                    <tr>
                                                        <td>ကောက်ရိတ်စက်</td>
                                                        <td>${harvester.toLocaleString("en-US")} ကျပ်</td>
                                                    </tr>
                                                    <tr>
                                                        <td>အထွေထွေကုန်ကျစရိတ်</td>
                                                        <td>${generalCost.toLocaleString("en-US")} ကျပ်</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">
                                                            <hr style="padding: 0!important; margin: 0!important;">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: 13pt; font-weight: bold;">ခန့်မှန်းစုစုပေါင်း ကုန်ကျစရိတ်</td>
                                                        <td style="font-size: 13pt; font-weight: bold;">${totalCost.toLocaleString("en-US")} ကျပ်</td>
                                                    </tr>
                                                    <tr>
                                                        <td>(၁ဧကလျှင် ပျမ်းမျှစပါးအထွက်နှုန်း - ၈၀တင်း)ခန့်မှန်းဝင်ငွေ</td>
                                                        <td>${income.toLocaleString("en-US")} ကျပ်</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">
                                                            <hr style="padding: 0!important; margin: 0!important;">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: 15pt; font-weight: bold;">ခန့်မှန်းအမြတ်ငွေ</td>
                                                        <td style="font-size: 17pt; font-weight: 600;font-style: italic; color: green">${profit.toLocaleString("en-US")} ကျပ်</td>
                                                    </tr>
                                                </tbody>
                                            </table>`;
                                        $("#totalEstimate").html(estimateCost);
                                        openModal();
                                        function openModal() {
                                            document.getElementById('myModal').style.display = 'flex';
                                        }
                                    }
                                    else if(paddyType == 1 && technique == '1'){ //နွေစပါး --> ကြဲခင်းစနစ်
                                        var grains = 2*((price/100)+2000)*Acre; //မျိုးစေ့
                                        var tractor = tractorCost*2*Acre; //ထွန်စက်မောင်း
                                        var lawnmower = lawnmowerCost*Acre; //မြေညှိ၊ စက်ခုတ်
                                        // var mower = 20000*Acre; //မြက်ကောက်
                                        var employeeCost = 5*employee*Acre; //အလုပ်သမားခ
                                        var fertilizer = fertilizerCost*Acre;//ဓာတ်မြေဩဇာဖိုး
                                        var water = waterCost*Acre; // ရေသွင်း၊ ရေထုတ်
                                        var harvester = harvesterCost*Acre; //ကောက်ရိတ်စက်
                                        var generalCost = generalCost*Acre; //အထွေထွေကုန်ကျစရိတ်
                                        var totalCost = grains+tractor+lawnmower+employeeCost+fertilizer+water+harvester;
                                        var income =Acre*80*(price/100);
                                        var profit = income-totalCost;
                                        var estimateCost = `
                                            <table align="center" cellpadding="5px">
                                                <tbody>
                                                    <tr>
                                                        <td>မျိုးစေ့ကုန်ကျစရိတ်</td>
                                                        <td>${grains.toLocaleString("en-US")} ကျပ်</td>
                                                    </tr>
                                                    <tr>
                                                        <td>ထွန်စက်မောင်းခ</td>
                                                        <td>${tractor.toLocaleString("en-US")} ကျပ်</td>
                                                    </tr>
                                                    <tr>
                                                        <td>မြေညှိ၊ စက်ခုတ်</td>
                                                        <td>${lawnmower.toLocaleString("en-US")} ကျပ်</td>
                                                    </tr>
                                                    <tr>
                                                        <td>အလုပ်သမားခ</td>
                                                        <td>${employeeCost.toLocaleString("en-US")} ကျပ်</td>
                                                    </tr>
                                                    <tr>
                                                        <td>ဓာတ်မြေဩဇာဖိုး</td>
                                                        <td>${fertilizer.toLocaleString("en-US")} ကျပ်</td>
                                                    </tr>
                                                    <tr>
                                                        <td>ရေသွင်း၊ ရေထုတ်</td>
                                                        <td>${water.toLocaleString("en-US")} ကျပ်</td>
                                                    </tr>
                                                    <tr>
                                                        <td>ကောက်ရိတ်စက်</td>
                                                        <td>${harvester.toLocaleString("en-US")} ကျပ်</td>
                                                    </tr>
                                                    <tr>
                                                        <td>အထွေထွေကုန်ကျစရိတ်</td>
                                                        <td>${generalCost.toLocaleString("en-US")} ကျပ်</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">
                                                            <hr style="padding: 0!important; margin: 0!important;">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: 13pt; font-weight: bold;">ခန့်မှန်းစုစုပေါင်း ကုန်ကျစရိတ်</td>
                                                        <td style="font-size: 13pt; font-weight: bold;">${totalCost.toLocaleString("en-US")} ကျပ်</td>
                                                    </tr>
                                                    <tr>
                                                        <td>(၁ဧကလျှင် ပျမ်းမျှစပါးအထွက်နှုန်း - ၈၀တင်း)ခန့်မှန်းဝင်ငွေ</td>
                                                        <td>${income.toLocaleString("en-US")} ကျပ်</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">
                                                            <hr style="padding: 0!important; margin: 0!important;">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: 15pt; font-weight: bold;">ခန့်မှန်းအမြတ်ငွေ</td>
                                                        <td style="font-size: 17pt; font-weight: 600;font-style: italic; color: green">${profit.toLocaleString("en-US")} ကျပ်</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        `;
                                        $("#totalEstimate").html(estimateCost);
                                        openModal();
                                        function openModal() {
                                            document.getElementById('myModal').style.display = 'flex';
                                        }
                                    }
                                    else if(paddyType == 1 && technique == '2'){ // ကောက်စိုက်နည်းစနစ်
                                        var grains = 2*((price/100)+2000)*Acre; //မျိုးစေ့
                                        var prepareGrains = preparegrainsCost*Acre; //ပျိုးခင်းပြင်
                                        var tractor = tractorCost*2*Acre; //ထွန်စက်မောင်း
                                        var lawnmower = lawnmowerCost*Acre; //မြေညှိ၊ စက်ခုတ်
                                        // var mower = 20000*Acre; //မြက်ကောက်
                                        var getPlant = 3*employee*Acre; //ပျိုးနှုတ်ခ
                                        var planted = 13*employee*Acre; // ကောက်စိုက်ခ
                                        var employeeCost = 5*employee*Acre; //အလုပ်သမားခ
                                        var fertilizer = fertilizerCost*Acre;//ဓာတ်မြေဩဇာဖိုး
                                        var water = waterCost*Acre; // ရေသွင်း၊ ရေထုတ်
                                        var harvester = harvesterCost*Acre; //ကောက်ရိတ်စက်
                                        var generalCost = generalCost*Acre; //အထွေထွေကုန်ကျစရိတ်
                                        var totalCost = grains+prepareGrains+tractor+lawnmower+employeeCost+fertilizer+water+harvester;
                                        var income =Acre*82*(price/100);
                                        var profit = income-totalCost;
                                        var estimateCost = `
                                            <table align="center" cellpadding="5px">
                                                <tbody>
                                                    <tr>
                                                        <td style="margin: 0px 30px;">မျိုးစေ့ကုန်ကျစရိတ်</td>
                                                        <td>${grains.toLocaleString("en-US")} ကျပ်</td>
                                                    </tr>
                                                    <tr>
                                                        <td>ပျိုးခင်းပြင်</td>
                                                        <td>${prepareGrains.toLocaleString("en-US")} ကျပ်</td>
                                                    </tr>
                                                    <tr>
                                                        <td>ထွန်စက်မောင်းခ</td>
                                                        <td>${tractor.toLocaleString("en-US")} ကျပ်</td>
                                                    </tr>
                                                    <tr>
                                                        <td>မြေညှိ၊ စက်ခုတ်</td>
                                                        <td>${lawnmower.toLocaleString("en-US")} ကျပ်</td>
                                                    </tr>
                                                    <tr>
                                                        <td>ပျိုးနှုတ်ခ</td>
                                                        <td>${getPlant.toLocaleString("en-US")} ကျပ်</td>
                                                    </tr>
                                                    <tr>
                                                        <td>ကောက်စိုက်ခ</td>
                                                        <td>${planted.toLocaleString("en-US")} ကျပ်</td>
                                                    </tr>
                                                    <tr>
                                                        <td>အလုပ်သမားခ</td>
                                                        <td>${employeeCost.toLocaleString("en-US")} ကျပ်</td>
                                                    </tr>
                                                    <tr>
                                                        <td>ဓာတ်မြေဩဇာဖိုး</td>
                                                        <td>${fertilizer.toLocaleString("en-US")} ကျပ်</td>
                                                    </tr>
                                                    <tr>
                                                        <td>ရေသွင်း၊ ရေထုတ်</td>
                                                        <td>${water.toLocaleString("en-US")} ကျပ်</td>
                                                    </tr>
                                                    <tr>
                                                        <td>ကောက်ရိတ်စက်</td>
                                                        <td>${harvester.toLocaleString("en-US")} ကျပ်</td>
                                                    </tr>
                                                    <tr>
                                                        <td>အထွေထွေကုန်ကျစရိတ်</td>
                                                        <td>${generalCost.toLocaleString("en-US")} ကျပ်</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">
                                                            <hr style="padding: 0!important; margin: 0!important;">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: 13pt; font-weight: bold;">ခန့်မှန်းစုစုပေါင်း ကုန်ကျစရိတ်</td>
                                                        <td style="font-size: 13pt; font-weight: bold;">${totalCost.toLocaleString("en-US")} ကျပ်</td>
                                                    </tr>
                                                    <tr>
                                                        <td>(၁ဧကလျှင် ပျမ်းမျှစပါးအထွက်နှုန်း-၈၂တင်း)ခန့်မှန်းဝင်ငွေ</td>
                                                        <td>${income.toLocaleString("en-US")} ကျပ်</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">
                                                            <hr style="padding: 0!important; margin: 0!important;">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: 15pt; font-weight: bold;">ခန့်မှန်းအမြတ်ငွေ</td>
                                                        <td style="font-size: 17pt; font-weight: 600;font-style: italic; color: green">${profit.toLocaleString("en-US")} ကျပ်</td>
                                                    </tr>
                                                </tbody>
                                            </table>`;
                                        $("#totalEstimate").html(estimateCost);
                                        openModal();
                                        function openModal() {
                                            document.getElementById('myModal').style.display = 'flex';
                                        }
                                    }
                                }
                                else if(employee == ''){
                                    alert("ကျေးဇူးပြု၍ တစ်ရက်ပျမ်းမျှ အလုပ်သမားငှားရမ်းခကို ဖြည့်ပါ။");
                                    document.getElementById('myModal').style.display = 'none';
                                }
                                else if(employee <= 0){
                                    alert("ကျေးဇူးပြု၍ မှန်ကန်သော အချက်အလက်များ ဖြည့်ပါ။");                    
                                    document.getElementById('myModal').style.display = 'none';
                                }
                            },
                            error:function (){
                                event.preventDefault();
                                alert('error');
                            }
                        });
                    
            });
            
        });
        function closeModal() {
            document.getElementById('myModal').style.display = 'none';
        }
    </script>
</body>

</html>