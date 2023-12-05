<?php
// Kiểm tra xem form đã được submit chưa
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy dữ liệu từ form
    $email = $_POST["email"];
    $password = $_POST["pass"];

    // Thực hiện kiểm tra thông tin đăng nhập (trong ví dụ này, kiểm tra mật khẩu là "admin123")
    if ($email == "nminhphuong685@gmail.com" && $password == "123456@") {
        header("Location:admin.html");
        exit();
    } else {
        echo "Đăng nhập thất bại. Vui lòng kiểm tra lại thông tin đăng nhập.";
    }
}
?>