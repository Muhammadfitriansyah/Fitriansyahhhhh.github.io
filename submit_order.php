<?php
include 'connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $quantity = $_POST['quantity'];
    $password = $_POST['password'];

    // Handle file upload
    $file = $_FILES['file'];
    $uploadDir = 'uploads/';
    $fileName = date('Y-m-d_H.i.s') . '.' . pathinfo($file['name'], PATHINFO_EXTENSION);
    $filePath = $uploadDir . $fileName;

    // Set max file size (5 MB)
    $maxFileSize = 5 * 1024 * 1024;
    if ($file['size'] > $maxFileSize) {
        echo "File size exceeds the maximum limit of 5 MB.";
        exit;
    }

    if (move_uploaded_file($file['tmp_name'], $filePath)) {
        $query = "INSERT INTO orders (name, quantity, password, file_path) VALUES ('$name', '$quantity', '$password', '$filePath')";
        if (mysqli_query($conn, $query)) {
            header('Location: order.php');
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($conn);
        }
    } else {
        echo "Error uploading file.";
    }
}
?>
