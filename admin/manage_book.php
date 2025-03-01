<?php 
    session_start();
    include_once('includes/checklogin.php');
    include_once('../includes/config.php');
    
    // Delete
   


if (isset($_GET["pid"])) {
    // Retrieve the book ID
    $id = $_GET["pid"];

    // Connect to the database
    $conn = new PDO("mysql:host=localhost;dbname=farming", "root", "");

    // Check for errors in connection
    if ($conn === false) {
        die("Connection failed");
    }

    // Delete book from the database
    $sql = "DELETE FROM books WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id);

    if ($stmt->execute()) {
        echo "<script>alert('Deleted successful');</script>";
        header("refresh:0; url=manage_book.php");
        exit(); // Ensure no other output interferes with the redirect
    } else {
        $errorInfo = $stmt->errorInfo();
        echo "Error deleting book: " . $errorInfo[2];
    }

    // Close the connection (if necessary)
    $conn = null;
}
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
                        <h1 class="mt-4">Added Books</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Added</li>
                        </ol>
                        <div class="d-flex justify-content-end mb-3 mx-3">
                            <button class="btn btn-success fw-bold py-2" type="button">
                                <a href="add_books.php" class="text-decoration-none text-white">Add</a>
                            </button>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Book Details
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple" class="table-hover">
                                    <thead>
                                        <tr>
                                            <th>စဉ်</th>
                                            <th>cover</th>
                                            <th>title</th>
                                            <th>author</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                        <?php
// Loop through the book data instead of accepted posts
$sqlBooks = "SELECT * FROM books";
$resultBooks = $conn->prepare($sqlBooks);
$resultBooks->execute();
$booksData = $resultBooks->fetchAll(PDO::FETCH_ASSOC);
$count = 1;
foreach ($booksData as $book) {
    echo '<tr>';
    echo '<td>' . $count++ . '</td>';
    echo '<td class="text-break">';
    echo '<img src="' . $book['cover'] . '" alt="" width="110px" height="70px">';
    echo '</td>';
    echo '<td class="text-break text-truncate" style="max-width: 200px;">' . $book['title'] . '</td>';
    echo '<td class="text-break text-truncate" style="max-width: 100px;">' . $book['author'] . '</td>';
    // Assuming 'content' refers to book content
    
    // Assuming there is no corresponding 'time' for books
    
    echo '<td>';
    echo '<a href="book_details.php?pid=' . $book['id'] . '" class="px-1 text-decoration-none">';
    echo '<i class="fas fa-edit"></i>';
    echo '</a>';
    echo '<a href="manage_book.php?pid=' . $book['id'] . '" onClick="return confirm(\'Are you sure to delete\');">';
    echo '<i class="fa fa-trash" aria-hidden="true"></i>';
    echo '</a>';
    echo '</td>';
    echo '</tr>';
}
?>

                    
                                    </tbody>
                                </table>
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