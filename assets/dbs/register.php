<?php
    include("db.php");
    $n = $_POST['name'];
    $e = $_POST['email'];
    $c = $_POST['contact'];
    $p = sha1($_POST['pass']);
    $pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";  
    $length = strlen ($p);  
    if ($n != NULL && $e != NULL && $c != NULL && $_POST['pass'] != NULL) {

        if (!preg_match ("/^[a-zA-z]*$/", $n) && !preg_match('/^[^ ].* .*[^ ]$/', trim($n))) {  

            $info = "Name only alphabets and whitespace are allowed.";  

        }else if(!preg_match ("/^[0-9]*$/", $c)){

            $info = "Contact Only numeric value is allowed.";  

        }else if(!preg_match ($pattern, $e)){

            $info = "Email is not valid.";

        }else if(strlen($_POST['pass']) <= '8'){

            $info = "Password must more than 8 characters";  

        }else if(strlen($_POST['contact']) < '10' || strlen($_POST['contact']) > '10'){

            $info = "Contact must have 10 digits";  
        }
        else{
            $result = mysqli_query($al,"SELECT * from customers where email = '$e' ");
            if(mysqli_num_rows($result) >0){
                $info = "Email ID Already Exists";
            }else{
                $sql = mysqli_query($al, "INSERT INTO customers(name,email,contact,password) VALUES('$n','$e','$c','$p')");
                if($sql){
                    $info = "Successfully Registered";
                }else {
                    $info = "Email ID Already Exists";
                }
            }
        }
    }
?>