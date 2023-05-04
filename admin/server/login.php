<?php
    $db = mysqli_connect("localhost","root","","web-zingmp3");
    if (!$db) {
        die("Connection failed: " . mysqli_connect_error());
    }   
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (preg_match('/[^a-zA-Z0-9]/', $username) || preg_match('/[^a-zA-Z0-9]/', $password)) {
        $res = array('success' => false, 'message' => 'Không được chứa kí tự đặc biệt');
        echo json_encode($res);
        exit();
    }

    $password = $p = sha1($password);
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password' and role='admin'";
    $result = mysqli_query($db, $query);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $res = array('success' => true, 'message' => 'Đăng nhập thành công!', 'username' => $row['username']);
    } else {
        $res = array('success' => false, 'message' => 'Thông tin không chính xác!');
    }
    echo json_encode($res);
?>