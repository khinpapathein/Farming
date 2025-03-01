<?php 
    session_start();
    include_once('includes/checklogin.php');
    include_once('../includes/config.php');
?>

    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
            <meta name="description" content="" />
            <meta name="author" content="" />
            <title>Ayeyar Farmer Hub || Admin</title>
            
            <!-- Favicon -->
            <link rel="icon" type="image/x-icon" href="../img/title_logo.png">

            <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
            <link href="css/styles.css" rel="stylesheet" />
            <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>

        </head>
        <body class="sb-nav-fixed">
        <?php include_once('includes/navbar.php');?>
            <div id="layoutSidenav">
            <?php include_once('includes/sidebar.php');?>
                
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                <?php 
                    $sql = "select * from registration";
                    $stmt = $conn->prepare($sql);
                    $stmt->execute();
                    $userCount = $stmt->rowCount();
                ?>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body px-3 pt-3 pb-md-1 pb-3">
                                        <p class="m-0" style="font-size:17px;">Total Registered Users</p>
                                        <span style="font-size:22px;" class="px-1 m-0"><?php echo "$userCount";?></span>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="users.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                <?php 
                    $sql = "select * from questions where status='Pending'";
                    $stmt = $conn->prepare($sql);
                    $stmt->execute();
                    $pendingCount = $stmt->rowCount();
                ?>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body px-3 pt-3 pb-1">
                                        <p class="m-0" style="font-size:17px;">Total Pending Posts</p>
                                        <span style="font-size:22px;" class="px-1 m-0"><?php echo "$pendingCount";?></span>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="pendingPosts.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                <?php 
                    $sql = "select * from questions where status='Active'";
                    $stmt = $conn->prepare($sql);
                    $stmt->execute();
                    $AcceptedCount = $stmt->rowCount();
                ?>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body px-3 pt-3 pb-1">
                                        <p class="m-0" style="font-size:17px;">Total Accepted Posts</p>
                                        <span style="font-size:22px;" class="px-1 m-0"><?php echo "$AcceptedCount";?></span>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="acceptedPosts.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                <?php 
                    $sql = "select * from articles";
                    $stmt = $conn->prepare($sql);
                    $stmt->execute();
                    $ArticleCount = $stmt->rowCount();
                ?>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-info text-white mb-4">
                                    <div class="card-body px-3 pt-3 pb-1">
                                        <p class="m-0" style="font-size:17px;">Total Articles</p>
                                        <span style="font-size:22px;" class="px-1 m-0"><?php echo "$ArticleCount";?></span>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="manage_article.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                <?php 
                    $sql = "select * from books";
                    $stmt = $conn->prepare($sql);
                    $stmt->execute();
                    $BooksCount = $stmt->rowCount();
                ?>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body px-3 pt-3 pb-md-1">
                                        <p class="m-0" style="font-size:17px;">Total Books</p>
                                        <span style="font-size:22px;" class="px-1 m-0"><?php echo "$BooksCount";?></span>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="manage_book.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </main>
            </div>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
            <script src="js/scripts.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
            <script src="js/datatables-simple-demo.js"></script>
        </body>
    </html>
