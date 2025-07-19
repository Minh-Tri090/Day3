<?php
$host = 'localhost';
$user = 'root';
$pass = '';

$conn = mysqli_connect($host, $user, $pass);
if (!$conn) {
    die('Kết nối thất bại: ' . mysqli_connect_error());
}

$sql = "CREATE DATABASE IF NOT EXISTS DAY3";
if (mysqli_query($conn, $sql)) {
    echo "Đã kiểm tra/tạo database DAY3.<br>";
} else {
    die('Lỗi tạo database: ' . mysqli_error($conn));
}

mysqli_select_db($conn, 'DAY3');

$sql = "CREATE TABLE IF NOT EXISTS products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    price FLOAT NOT NULL,
    quantity INT NOT NULL,
    image VARCHAR(255)
)";
if (mysqli_query($conn, $sql)) {
    echo "Đã kiểm tra/tạo bảng products.";
} else {
    die('Lỗi tạo bảng: ' . mysqli_error($conn));
}

mysqli_close($conn);
?> 