<?php
        error_reporting(0);
        $al=mysqli_connect("localhost","root","","web-zingmp3");
        // define ('HOST','127.0.0.1');
        // define ('USER','root');
        // define ('PASS','');
        // define ('DB','web-zingmp3');
    
        // function open_database()
        // {
        //     $conn=new mysqli(HOST,USER,PASS,DB);
        //     if ($conn-> connect_error) // ->:con trỏ
        //     {
        //         die('Connect error:'.$conn-> connect_error);
        //     }
        //     return $conn;
        // }

        // function getData(){
        //     $sql = "select * from product";
        //     $conn = open_database();
        //     $result = $conn->query($sql);
        //     if(!$result) return array('res' => 1);
        //     $products = array();

        //     for ($i = 0; $i < $result->num_rows; $i++) 
        //     {
        //         $product = $result->fetch_assoc();
        //         $products[$i] = $product;
        //     }
        //     return array('res' => 0, 'data' => $products); 
        // }

        // function login($user,$pass)
        // {
        //     $sql="select * from account where username=?";
        //     $conn=open_database();
            
        //     $stm=$conn->prepare($sql); // tránh lỗi sql injection
        //     $stm->bind_param('s',$user);
    
        //     if(!$stm->execute())
        //     {
        //         // chạy sql thất bại do lý do gì đó
        //         return array('code'=>1,'error' =>'Can not execute command:');
        //     }
    
        //     $result=$stm->get_result();
        //     if($result->num_rows ==0)
        //     {
        //         return array('code'=>1,'error' =>'User does not exists');
        //     }
    
        //     $data=$result->fetch_assoc();
    
        //     $hashed_password=$data['password'];
        //     if(!password_verify($pass,$hashed_password))
        //     {
        //         return array('code'=>2,'error' =>'Invalid password'); // có user nhưng sai mật khẩu
        //     }
        //     // else if($data['activated']==0)
        //     // {
        //     //     return array('code'=>3,'error' =>'This account is not activated');
        //     // }
    
        //     else return array('code'=>0,'error' =>'' ,'data' => $data);
        // }

        // function is_email_exists($email)
        // {
        //     $sql='select username  from account where email=?';
        //     $conn=open_database();
    
        //     $stm=$conn->prepare($sql);
        //     $stm->bind_param('s',$email);
        //     if (!$stm->execute())
        //     {
        //         die('Query error:'.$stm->error);
        //     }
    
        //     $result=$stm->get_result();
        //     if($result->num_rows >0)
        //     {
        //         return true; // có email
        //     }
        //     else return false; 
        // }

        // function register ($user,$pass,$first,$last,$email)
        // {
        //     if(is_email_exists($email))
        //     {
        //         return array('code'=> 1,'error' => 'Email exists');
        //     }

        //     $hash=password_hash($pass,PASSWORD_DEFAULT);
        //     $rand=random_int(0,1000);
        //     $token=md5($user.'+'.$rand);
        //     $sql='insert into account (username,firstname,lastname,email,password,activate_token) values(?,?,?,?,?,?)';

        //     $conn=open_database();
        //     $stm=$conn->prepare($sql);
        //     $stm->bind_param('ssssss',$user,$first,$last,$email,$hash,$token);
            
        //     if(!$stm->execute())
        //     {
        //         return array('code'=> 2,'error' => 'Can not execute command');
        //     }

        //     return array('code'=> 0,'error' => 'Create account successful');
        // }

?>