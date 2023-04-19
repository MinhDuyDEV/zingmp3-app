<?php
    $db = mysqli_connect("localhost","root","","web-zingmp3");
    if (!$db) {
        die("Connection failed: " . mysqli_connect_error());
    }   
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];
    if (preg_match('/[^a-zA-Z0-9]/', $username) || preg_match('/[^a-zA-Z0-9]/', $password)) {
        $res = array('success' => false, 'message' => 'Không được chứa kí tự đặc biệt');
        echo json_encode($res);
        exit();
    }

    $query = "SELECT * FROM customers WHERE username='$username'";
    $result = mysqli_query($db, $query);
    if (mysqli_num_rows($result) == 0) {
        if ($password == $confirm) {
            $hash = sha1($password);
            $query = "INSERT INTO customers (username, password) VALUES ('$username', '$hash')";
            mysqli_query($db, $query);
            $res = array('success' => true, 'message' => 'Tạo tài khoản thành công');
        }
        else{
            $res = array('success' => false, 'message' => 'Mật khẩu không khớp');
        }
    } else {
        $res = array('success' => false, 'message' => 'Tên tài khoản đã tồn tại');
    }
    echo json_encode($res);
?>