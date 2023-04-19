<?php
// Kết nối đến cơ sở dữ liệu
    $db = mysqli_connect("localhost","root","","web-zingmp3");

// Lấy giá trị nhập vào từ form đăng nhập
    $username = $_POST['username'];
    $password = $_POST['password'];
    if(isset($username) && isset($password)){
    // Kiểm tra tài khoản trong cơ sở dữ liệu
        $query = "SELECT * FROM customers WHERE username='$username' AND password='$password'";
        $result = mysqli_query($db, $query);

        if (mysqli_num_rows($result) == 1) {
            // Tài khoản tồn tại
            $mess = "Đăng nhập thành công!";
        } else {
            // Tài khoản không tồn tại
            $mess = "Đăng nhập thất bại!";
        }
    }
    else {
        $mess = "Không lấy được thông tin";
    }
    echo $mess;
    mysqli_close($db);
?>