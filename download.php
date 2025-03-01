<?php
if (isset($_GET["id"])) {
    // Connect to the database
    $conn = new mysqli("localhost", "root", "", "farming");

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $id = $_GET["id"];

    // Retrieve file path from the database
    $result = $conn->query("SELECT pdf FROM books WHERE id = $id");

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $pdfPath = 'admin/'.$row["pdf"];

        // Force download the PDF file
        header('Content-Type: application/pdf');
        header('Content-Disposition: attachment; filename="'.basename($pdfPath).'"');
        readfile($pdfPath);
    } else {
        echo "PDF not found.";
    }

    // Close the connection
    $conn->close();
}
?>
