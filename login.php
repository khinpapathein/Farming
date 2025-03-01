<?php session_start();
    include_once('includes/config.php');
    //Code for Registration 
    if(isset($_POST['signup'])){
        $name = $_POST['name'];
        $phno = $_POST['phno'];
        $address = $_POST['address'];
        $otp = '-';
        $otp_exp = date("d-m-y h:i:s");
        $query = "select * from registration where phno=:phno";
        $inputData = [
            'phno' => $phno
        ];
        $stmt1 = $conn->prepare($query);
        $stmt1->execute($inputData);
        $count = $stmt1->rowCount();
		if($count>0){
			echo "<script>alert('ဤဖုန်းနံပါတ်မှာ အသုံးပြုပြီးဖြစ်ပါသည်။ ကျေးဇူးပြု၍ တခြားနံပါတ်ဖြင့် အသုံးပြုပါ။ ');</script>";
		}
        else{
            $sql = "insert into registration(name, phno, address, otp, otp_expires_at) values(:name, :phno, :address, :otp, :otpexp)";
            $data = [
                'name' => $name,
                'phno' => $phno,
                'address' => $address,
                'otp' => $otp,
                'otpexp' => $otp_exp
            ];
            $stmt=$conn->prepare($sql);
            $stmt->execute($data);
            if($stmt->rowCount()){
                echo "<script>alert('Signup successful');</script>";
                echo "<script type='text/javascript'> document.location = 'login.php'; </script>";
            }
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
        .myNav{
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        }

        /* Google Font Link */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

        @media only screen and (min-width: 300px) {
            body{
                margin-bottom: 100px; 
            }
            .myBody{
                min-height: 70vh;
                display: flex;
                align-items: center;
                justify-content: center;
                background: #7d2ae8;
                padding: 30px;
            }
            .myBody{
                position: relative;
                top: 50px;
                max-width: 100%;
                width: 70%;
                height: 50%;
                background: #fff;
                padding: 40px 30px;
                box-shadow: 0 5px 10px rgba(0,0,0,0.2);
                perspective: 2700px;
            }
            .container .cover{
                position: absolute;
                top: 0;
                left: 50%;
                height: 100%;
                width: 50%;
                z-index: 98;
                transition: all 1s ease;
                transform-origin: left;
                transform-style: preserve-3d;
            }
            .container #flip:checked ~ .cover{
                transform: rotateY(-180deg);
            }
            .container .cover .front,
            .container .cover .back{
                position: absolute;
                top: 0;
                left: 0;
                height: 100%;
                width: 100%;
            }
            .cover .back{
                transform: rotateY(180deg);
                backface-visibility: hidden;
            }
            .container .cover::before,
            .container .cover::after{
                content: '';
                position: absolute;
                height: 100%;
                width: 100%;
                background: #7fb178;
                opacity: 0.5;
                z-index: 12;
            }
            .container .cover::after{
                opacity: 0.3;
                transform: rotateY(180deg);
                backface-visibility: hidden;
            }
            .container .cover img{
                position: absolute;
                height: 100%;
                width: 100%;
                object-fit: cover;
                z-index: 10;
            }
            .container .cover .text{
                position: absolute;
                z-index: 130;
                height: 100%;
                width: 100%;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
            }
            .cover .text .text-1,
            .cover .text .text-2{
                font-size: 26px;
                font-weight: 600;
                color: #fff;
                text-align: center;
            }
            .cover .text .text-2{
                font-size: 15px;
                font-weight: 500;
            }
            .container .forms{
                height: 100%;
                width: 100%;
                background: #fff;
            }
            .container .form-content{
                display: flex;
                align-items: center;
                justify-content: space-between;
            }
            .form-content .login-form,
            .form-content .signup-form{
                width: calc(100% / 2 - 25px);
            }
            .forms .form-content .title{
                position: relative;
                font-size: 18px;
                font-weight: 600;
                color: #333;
            }
            .forms .form-content .title:before{
                content: '';
                position: absolute;
                left: 0;
                bottom: 0;
                height: 3px;
                width: 25px;
                background: #13b734;
            }
            .forms .signup-form  .title:before{
                width: 20px;
            }
            .forms .form-content .input-boxes{
                margin-top: 15px;
            }
            .forms .form-content .input-box{
                display: flex;
                align-items: center;
                height: 50px;
                width: 100%;
                margin: 10px 0;
                position: relative;
            }
            .form-content .input-box .myicon{
                font-size: 15px;
            }
            .form-content .input-box input{
                height: 100%;
                width: 100%;
                outline: none;
                border: none;
                padding: 0 30px;
                font-size: 14px;
                font-weight: 500;
                border-bottom: 2px solid rgba(0,0,0,0.2);
                transition: all 0.3s ease;
            }
            .form-content .input-box input:focus,
            .form-content .input-box input:valid{
                border-color: #2f6329;
            }
            .form-content .input-box i{
                position: absolute;
                color: #09a708;
                font-size: 17px;
            }
            .forms .form-content .text{
                font-size: 13px;
                font-weight: 500;
                color: #333;
            }
            .forms .form-content .text a{
                text-decoration: none;
                color: #9f4eb4;
            }
            .forms .form-content .text a:hover{
                text-decoration: underline;
            }
            .forms .form-content .button{
                color: #fff;
                margin-top: 20px;
            }
            .forms .form-content .button input{
                color: #fff;
                background: #379f17;
                border-radius: 6px;
                padding: 0;
                cursor: pointer;
                transition: all 0.4s ease;
            }
            .forms .form-content .button input:hover{
                background: #289621;
            }
            .forms .form-content label{
                color: #5b13b9;
                cursor: pointer;
            }
            .forms .form-content label:hover{
                text-decoration: underline;
            }
            .forms .form-content .login-text,
            .forms .form-content .sign-up-text{
                text-align: center;
                margin: 15px 0px;
            }
            .container #flip{
                display: none;
            }
        }
        @media only screen and (min-width: 1000px) {
            body{
                margin-bottom: 100px; 
            }
            .myBody{
                min-height: 70vh;
                display: flex;
                align-items: center;
                justify-content: center;
                background: #7d2ae8;
                padding: 30px;
            }
            .myBody{
                position: relative;
                top: 50px;
                max-width: 100%;
                width: 70%;
                height: 50%;
                background: #fff;
                padding: 40px 30px;
                box-shadow: 0 5px 10px rgba(0,0,0,0.2);
                perspective: 2700px;
            }
            .container .cover{
                position: absolute;
                top: 0;
                left: 50%;
                height: 100%;
                width: 50%;
                z-index: 98;
                transition: all 1s ease;
                transform-origin: left;
                transform-style: preserve-3d;
            }
            .container #flip:checked ~ .cover{
                transform: rotateY(-180deg);
            }
            .container .cover .front,
            .container .cover .back{
                position: absolute;
                top: 0;
                left: 0;
                height: 100%;
                width: 100%;
            }
            .cover .back{
                transform: rotateY(180deg);
                backface-visibility: hidden;
            }
            .container .cover::before,
            .container .cover::after{
                content: '';
                position: absolute;
                height: 100%;
                width: 100%;
                background: #7fb178;
                opacity: 0.5;
                z-index: 12;
            }
            .container .cover::after{
                opacity: 0.3;
                transform: rotateY(180deg);
                backface-visibility: hidden;
            }
            .container .cover img{
                position: absolute;
                height: 100%;
                width: 100%;
                object-fit: cover;
                z-index: 10;
            }
            .container .cover .text{
                position: absolute;
                z-index: 130;
                height: 100%;
                width: 100%;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
            }
            .cover .text .text-1,
            .cover .text .text-2{
                font-size: 26px;
                font-weight: 600;
                color: #fff;
                text-align: center;
            }
            .cover .text .text-2{
                font-size: 15px;
                font-weight: 500;
            }
            .container .forms{
                height: 100%;
                width: 100%;
                background: #fff;
            }
            .container .form-content{
                display: flex;
                align-items: center;
                justify-content: space-between;
            }
            .form-content .login-form,
            .form-content .signup-form{
                width: calc(100% / 2 - 25px);
            }
            .forms{
                margin-bottom: 20px;
            }
            .forms .form-content .title{
                position: relative;
                font-size: 24px;
                font-weight: 600;
                color: #333;
            }
            .forms .form-content .title:before{
                content: '';
                position: absolute;
                left: 0;
                bottom: 0;
                height: 3px;
                width: 25px;
                background: #13b734;
            }
            .forms .signup-form  .title:before{
                width: 20px;
            }
            .forms .form-content .input-boxes{
                margin-top: 30px;
            }
            .forms .form-content .input-box{
                display: flex;
                align-items: center;
                height: 50px;
                width: 100%;
                margin: 10px 0;
                position: relative;
            }
            .form-content .input-box input{
                height: 100%;
                width: 100%;
                outline: none;
                border: none;
                padding: 0 30px;
                font-size: 16px;
                font-weight: 500;
                border-bottom: 2px solid rgba(0,0,0,0.2);
                transition: all 0.3s ease;
            }
            .form-content .input-box input:focus,
            .form-content .input-box input:valid{
                border-color: #2f6329;
            }
            .form-content .input-box i{
                position: absolute;
                color: #09a708;
                font-size: 17px;
            }
            .forms .form-content .text{
                font-size: 14px;
                font-weight: 500;
                color: #333;
            }
            .forms .form-content .text a{
                text-decoration: none;
                color: #9f4eb4;
            }
            .forms .form-content .text a:hover{
                text-decoration: underline;
            }
            .forms .form-content .button{
                color: #fff;
                margin-top: 40px;
            }
            .forms .form-content .button input{
                color: #fff;
                background: #379f17;
                border-radius: 6px;
                padding: 0;
                cursor: pointer;
                transition: all 0.4s ease;
            }
            .forms .form-content .button input:hover{
                background: #289621;
            }
            .forms .form-content label{
                color: #5b13b9;
                cursor: pointer;
            }
            .forms .form-content label:hover{
                text-decoration: underline;
            }
            .forms .form-content .login-text,
            .forms .form-content .sign-up-text{
                text-align: center;
                margin-top: 25px;
            }
            .container #flip{
                display: none;
            }
        }

        @media (max-width: 730px) {
            .container .cover{
                display: none;
            }
            .form-content .login-form,
            .form-content .signup-form{
                width: 100%;
            }
            .form-content .signup-form{
                display: none;
            }
            .container #flip:checked ~ .forms .signup-form{
                display: block;
            }
            .container #flip:checked ~ .forms .login-form{
                display: none;
            }
        }

    </style>


    <script>
        function inputValidate(){            
            // var name = document.login.name.value;
            var phno = document.login.phno.value;
            var phoneRegex = /^09\d{7,9}$/;
            // if(!name){
                // alert('ကျေးဇူးပြု၍ အချက်အလက်ပြည့်စုံစွာ ဖြည့်ပါ။');
                // document.login.name.focus();
                // return false;
            // }
            if(!phno){
                alert('ကျေးဇူးပြု၍ အချက်အလက်ပြည့်စုံစွာ ဖြည့်ပါ။');
                document.login.phno.focus();
                return false;
            }
            
            if(!(phoneRegex.test(phno))){
                alert('ကျေးဇူးပြု၍ 09 (11လုံး) ဖြည့်ပါ။');
                document.login.phno.focus();
                return false;
            }
            return true;
        }

        function otpValid(){
            var otpCode = document.login.otpCode.value;
            var otpRegex = /^\d{6}$/;
            if(!(otpRegex.test(otpCode))){
                // alert(otpCode);
                alert("ကျေးဇူးပြု၍ (6လုံး) ဖြည့်ပါ။");
                return false;
            }
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
                            <a href="#" class="nav-link dropdown-toggle px-2 mx-0" data-bs-toggle="dropdown"><?php echo $result['name'];?></a>
                            <div class="dropdown-menu bg-light rounded-0 m-0" style="min-width: 7rem!important;">
                                <a href="profile.php" class="dropdown-item">myprofile</a>
                                <a href="logout.php" class="dropdown-item" onClick="return confirm('Are you sure to logout!');">logout</a>
                            </div>
                        </div>
                <?php
                    }
                    else{
                ?>
                    <a href="login.php" class="nav-item active nav-link px-2 mx-0">login</a>
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
    <div class="container-fluid myBody p-0 mb-5">
        <div class="container px-3 px-md-5 py-0 mt-4">
            <input type="checkbox" id="flip">
            <div class="cover">
                <div class="front">
                    <img src="img/about.jpg" alt="">
                    <div class="text">
                        <span class="text-1">Every new friend is a <br> new adventure</span>
                        <span class="text-2">Let's get connected</span>
                    </div>
                </div>
                <div class="back">
                    <img class="backImg" src="images/backImg.jpg" alt="">
                    <div class="text">
                        <span class="text-1">Complete miles of journey <br> with one step</span>
                        <span class="text-2">Let's get started</span>
                    </div>
                </div>
            </div>
            <div class="forms">
                <div class="form-content">
                    <div class="login-form">
                        <span id="invalidOtp" style="color: red; display: none;">OTP မှားယွင်းထည့်ထားသည်။ ကျေးဇူးပြု၍ ပြန်ကြိုးစားကြည့်ပါ။</span>
                        <h5 id="otpDisplay" class="m-0 p-0"></h5>
                        <div class="title">အကောင့်ထဲဝင်ရန်</div>
                        <form method="post" name="login">
                            <div class="input-boxes">
                                <!-- <div class="input-box" id="nameBox">
                                    <i class="fas fa-envelope myicon"></i>
                                    <input type="text" name="name" id="name" placeholder="အကောင့်အမည်" required>
                                </div> -->
                                <div class="input-box" id="phnoBox">
                                    <i class="fas fa-phone myicon"></i>
                                    <input type="text" name="phno" id="phno" placeholder="ဖုန်းနံပါတ်" required>
                                </div>
                                <div class="input-box" id="otpInput">
                                    <i class="fas fa-lock myicon"></i>
                                    <input type="text" name="otpCode" id="otpCode" placeholder="otp code ရိုက်ထည့်ပါ" required>
                                </div>
                                <div class="button input-box" id="otpBtn" onclick="return inputValidate();">
                                    <input type="button" name="otp" id="otp" value="OTP code ရယူရန်">
                                </div>
                                <div class="button input-box" id="login" onclick="return otpValid();">
                                    <input type="button" name="loginBtn" id="loginBtn" value="အကောင့်ဝင်ရန်">
                                </div>
                                <div class="text sign-up-text">အကောင့်မရှိဘူးလား?<label for="flip" class="text-decoration-underline">ayerFarmerHubကို ချိတ်ဆက်ရန်</label></div>
                            </div>
                        </form>
                    </div>
                    <div class="signup-form">
                        <div class="title">အကောင့်တစ်ခု ဖွင့်ရန်</div>
                        <form method="post" name="signup">
                            <div class="input-boxes">
                                <div class="input-box">
                                    <i class="fas fa-user"></i>
                                    <input type="text" name="name" placeholder="အမည်" required>
                                </div>
                                <div class="input-box">
                                    <i class="fas fa-phone"></i>
                                    <input type="text" id="signphno" name="phno" placeholder="ဖုန်းနံပါတ်" required onBlur="checkPhnoAvailability()" pattern="^09\d{7,9}$" title="please start with 09 ">
                                    <span id="user-phno-availability" style="font-size:12px;"></span>
                                </div>
                                <div class="input-box">
                                    <i class="fas fa-address-card"></i>
                                    <input type="text" name="address" placeholder="နေရပ်လိပ်စာ" required>
                                </div>                                
                                <div class="button input-box">
                                    <input type="submit" name="signup" value="သင့်အကောင့်ကို ဖန်တီးရန်">
                                </div>
                                <div class="text sign-up-text">အကောင့်ရှိပါသလား? <label for="flip" class="text-decoration-underline">ဝင်ရန်</label></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Body End -->
    

    <!-- Back to Top -->
    <!-- <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a> -->


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
    <script>
        function checkPhnoAvailability(){
            jQuery.ajax({
                url: "check_availability.php",
                data:'phno='+$("#signphno").val(),
                type: "POST",
                success:function(data){
                    $("#user-phno-availability").html(data);
                },
                error:function ()
                {
                    event.preventDefault();
                    alert('error');
                }
            });
        }
    </script>
    <script>
        $(document).ready(function (){
            $('#login').hide();
            $('#otpInput').hide();
            
            // Code for Get otp
            $("#otpBtn").on('click', function (){
                // var name = $("#name").val();
                var phno = $("#phno").val(); 
                $("#otpDisplay").show();               
                if(phno){
                    jQuery.ajax({
                        url: "check_availability.php",
                        data:'phnoForOtp='+$("#phno").val(),
                        type: "POST",
                        success:function(data){
                            var phoneRegex = /^09\d{7,9}$/;
                            if(phoneRegex.test(phno)){
                                $("#otpDisplay").html(data);
                            }
                            var outputData = data.trim();
                            var testData = "<span style='color:red;'> Invalid Phone Number !!!</span>";
                            if(testData != outputData){                                
                                $("#otpBtn").hide();
                                $('#phnoBox').hide();
                                $('#nameBox').hide();

                                $('#login').show();     
                                $('#otpInput').show();
                            } 
                            else{
                                document.login.phno.focus();
                            }                                                
                        },
                        error:function (){
                            event.preventDefault();
                            alert('error');
                        }
                    });
                }
            });

            // Code for login
            $("#loginBtn").on('click', function (){
                var otpCode = $('#otpCode').val();
                var phno = $('#phno').val();
                jQuery.ajax({
                    url: "verify.php",
                    data: 'otpCode='+$("#otpCode").val(),
                    type: "POST",
                    success:function(data){
                        // alert(data);
                        var mydata = data.trim();
                        if(mydata == 1){
                            alert("အောင်မြင်စွာ အကောင့်ဝင်ပြီးဖြစ်ပါသည်။");
                            window.location.href='profile.php';
                        }  
                        if(mydata == 0){
                            alert("OTP မှားယွင်းနေပါသည်။ ကျေးဇူးပြု၍ နောက်တစ်ကြိမ်ကြိုးစားကြည့်ပါ။");
                            document.login.otpCode.focus();
                        } 
                        if(mydata == 2){
                            alert("Time up");
                            $("#otpBtn").show();
                            $('#phnoBox').show();
                            $('#nameBox').show();

                            $("#otpDisplay").hide();
                            $('#login').hide();     
                            $('#otpInput').hide();
                            $('#otpCode').val() = '';
                        }                                     
                    },
                    error:function (){
                        event.preventDefault();
                        alert('error');
                    }
                });
            });

            
        });
    </script>
</body>

</html>