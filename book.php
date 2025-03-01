

<?php 
	session_start();
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
        .modal-body{
            max-height: calc(100vh - 140px);
            overflow-y: auto;
        }        
        @media only screen and (min-width: 300px) {
            .mybody{
                font-size: 13px;
            }

            /* header */
            .headerFont{
                font-size: 15px!important;
            }

            /* Modal Styles */
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
                width: 170px;
                height: 200px;
            }

            /* books */
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
            .product-item img {
                max-width: 330px; /* Adjust this value to change image width */                
                height: 215px; /* Maintain aspect ratio */
                display: block;
                margin: 0 auto;
            }
            .product-description {
                height: 100px; /* Set a fixed height for the product description */
                overflow: hidden; /* Hide overflowing content */
                display: flex; /* Use flexbox */
                justify-content: center; /* Center horizontally */
                align-items: center; /* Center vertically */
                text-align: center; /* Align text in the center */
            }
            table{
                margin-bottom: 5px!important;
            }
            td{
                font-size: 13px;
                text-align: left;
            }
            .downloadBtn{
                padding-left: 27%!important;
            }
            #bookModalLabel{
                font-size: 12pt;
            }
        }
        @media only screen and (min-width: 370px) {
            .modal-body img{
                width: 170px;
                height: auto;
            }
            .downloadBtn{
                padding-left: 33%!important;
            }
        }
        @media only screen and (min-width: 400px) {
           /* books */
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
            .product-item img {
                max-width: 400px; /* Adjust this value to change image width */                
                height: 215px; /* Maintain aspect ratio */
                display: block;
                margin: 0 auto;
            }
            .product-description {
                height: 100px; /* Set a fixed height for the product description */
                overflow: hidden; /* Hide overflowing content */
                display: flex; /* Use flexbox */
                justify-content: center; /* Center horizontally */
                align-items: center; /* Center vertically */
                text-align: center; /* Align text in the center */
            } 
            td{
                font-size: 15px;
            }
        }
        @media only screen and (min-width: 420px) {
            .modal-body img{
                width: 180px;
                height: auto;
            }
            .container p, .container button{
                font-size: 14px;
            }
            
        }
        @media only screen and (min-width: 500px) {
            .mybody{
                font-size: 14px;
            }

            /* header */
            .headerFont{
                font-size: 18px!important;
            }

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
                left: 10%;
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
            .downloadBtn{
                padding-left: 22%!important;
            }
            table{
                margin-bottom: 30px!important;
            }
            .modal-dialog{
                max-width: 600px;
            }
            #bookModalLabel{
                font-size: 15pt;
                text-align: justify;
            }
        }
        @media only screen and (min-width: 850px) {
            /* styles for browsers larger than 1440px; */
            .myprofile{
                min-width: 108px;
            }
        
            .modal {
                display: none;
                position: fixed;
                top: 10%;
                left: 20%;
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
            .modal-dialog{
                max-width: 600px;
            }
        }
        @media only screen and (min-width: 1025px) {
            /* styles for browsers larger than 1440px; */
            .modal {
                display: none;
                position: fixed;
                top: 7%;
                left: 22%;
                width: auto!important;
                height: auto;
                background-color: rgba(0, 0, 0, 0.5);
                align-items: center;
                justify-content: center;
            }
            .modal-body img{
                width: 500px;
                height: auto;
            }
            .modal-dialog{
                max-width: 800px;
            }
        }
    </style>
</head>

<body >
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
                            <a href="#" class="nav-link dropdown-toggle active px-2 mx-0" data-bs-toggle="dropdown">ဆောင်းပါးနှင့်စာအုပ်စာစောင်များ</a>
                            <div class="dropdown-menu bg-light rounded-0 m-0">
                                <a href="article1.php" class="dropdown-item">ဆောင်းပါး</a>
                                <a href="book.php" class="dropdown-item active">စာအုပ်စာစောင်</a>                                
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
            <h1 class="display-2 text-dark mb-2 mb-md-4 animated slideInDown">စာအုပ်စာစောင်</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item p-0"><a href="index.php" class="headerFont">မူလစာမျက်နှာ</a></li>
                    <li class="breadcrumb-item p-0 text-dark headerFont">ဆောင်းပါးနှင့်စာအုပ်စာစောင်များ</li>
                    <li class="breadcrumb-item p-0 text-dark headerFont" aria-current="page">စာအုပ်စာစောင်</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Body Start -->

    <?php
// Your database connection and query to fetch book information
$conn = new mysqli("localhost", "root", "", "farming");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$result = $conn->query("SELECT * FROM books");

$books = []; // Array to store book information

while ($row = $result->fetch_assoc()) {
    $books[] = $row;
}

$conn->close();
?>

     <div class="container-fluid product mybody py-5 my-5">
        <div class="container py-5">
            
            <div class="owl-carousel product-carousel wow fadeInUp" data-wow-delay="0.5s">
                <?php foreach ($books as $book): ?>
                <a href="" class="d-block product-item rounded" data-bs-toggle="modal" data-bs-target="#bookModal" data-id="<?php echo $book['id']; ?>" >
                <div class="d-flex justify-content-center ">
                    <img src="admin/<?php echo $book['cover']; ?>" class="mx-4 mx-sm-5 myimg" alt="" style="text-align: center;height: 250px;">                    
                </div>
                    <div class="product-description bg-white shadow-sm text-center p-3 position-relative mt-n5">
                        <span class="text-body"><?php echo $book['title']; ?></span>
                    </div>
                </a>
                 <?php endforeach; ?>
            </div>
        </div>
    </div>

    <!--in the box -->
    
<!-- Modal -->
<!-- Modal -->
<div class="modal fade p-0 m-0" id="bookModal" tabindex="-1" aria-labelledby="bookModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered m-0">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="bookModalLabel"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pb-0 p-3">
                <div class="row">
                    <div class="col-md-5">
                        <img id="bookImage" src="" alt="Book Image" class="img-fluid">
                    </div>
                    <div class="col-md-7 p-0 mt-4 mt-md-0">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <td>Book Name:</td>
                                    <td><p id="bookTitle" class="m-0"></p></td>
                                </tr>
                                <tr>
                                    <td>Author:</td>
                                    <td><p id="bookAuthor" class="m-0"></p></td>
                                </tr>
                                <tr>                                    
                                    <td colspan="2" class="downloadBtn"><a href="#" id="modalDownload" class="btn btn-primary">Download</a></td>
                                </tr>
                                <!-- Add more rows for other book details if needed -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



    <!-- in the box -->


     

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
    <script src="js/main_book.js"></script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
    $('.product-item').click(function () {
        var bookId = $(this).data('id');
        var book = <?php echo json_encode($books); ?>;
        
        // Find the book details by ID
        var selectedBook = book.find(function (element) {
            return element.id == bookId;
        });

        // Update modal content with selected book details
        $('#bookImage').attr('src', 'admin/' + selectedBook.cover);
        $('#bookTitle').text(selectedBook.title);
         $('#bookModalLabel').text(selectedBook.title);
          $('#bookAuthor').text( selectedBook.author);
          document.getElementById('modalDownload').href = 'download.php?id=' + selectedBook.id;
    });
});

</script>

</body>

</html>