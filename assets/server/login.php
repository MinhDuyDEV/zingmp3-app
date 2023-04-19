<?php
    $db = mysqli_connect("localhost","root","","web-zingmp3");
    if (!$db) {
        die("Connection failed: " . mysqli_connect_error());
    }   
    $username = $_POST['username'];
    $password = $_POST['password'];
        $query = "SELECT * FROM customers WHERE username='$username' AND password='$password'";
        $result = mysqli_query($db, $query);
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            $res = array('success' => true, 'message' => 'Đăng nhập thành công!', 'username' => $row['username']);
        } else {
            $res = array('success' => false, 'message' => 'Thông tin tài khoản hoặc mật khẩu không chính xác!');
        }
    echo json_encode($res);
?>