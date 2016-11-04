<?php

class Login_class {

    public function __construct() {
        require_once './db_connection.php';
    }

    public function register($posted_data) {
        $full_name = $posted_data['full_name'];
        $gender = $posted_data['gender'];
        $age = $posted_data['age'];
        $email = $posted_data['email'];
        $username = $posted_data['username'];
        $password = md5($posted_data['password']);
        $sql="SELECT * FROM users WHERE email='$email'";
        $res=mysql_query($sql);
        $count=mysql_num_rows($res);
        if($count==1){
            $msg='Email Already Exists';
            return $msg;
        }
        else{
        $sql = "insert into users (full_name,gender,age,email,username,password,login_type)values"
                . "('$full_name','$gender','$age','$email','$username','$password','1')";

        $result = mysql_query($sql);

        if ($result) {
            $msg = 'Successfully Registered';
            return $msg;
        } else {
            $msg = 'Successfully Not Registered';
            return $msg;
        }
        }
    }

    public function login($login_parameter) {
        $email = $login_parameter['email'];
        $password = md5($login_parameter['password']);
        $login_type = $login_parameter['login_type'];

        if ($login_type == 1) {
            $sql = "select * from users where email = '$email' and password = '$password' and login_type='1'";
            $res = mysql_query($sql);
            $count=mysql_num_rows($res);



            if ($count == 1) {
                $row = mysql_fetch_assoc(mysql_query($sql));
                session_start();
                $_SESSION['is_user_login'] = TRUE;
                $_SESSION['user_name'] = $row['username'];
                $_SESSION['user_id'] = $row['id'];

                header('location: user/profile.php');
            }
        } elseif ($login_type == 2) {
            $sql = "select * from doctors where email = '$email' and password = '$password'";
            $res = mysql_query($sql);
            $count=mysql_num_rows($res);


            if ($count == 1) {
                $row = mysql_fetch_assoc(mysql_query($sql));
                session_start();
                $_SESSION['is_doctor_login'] = TRUE;
                $_SESSION['doc_name'] = $row['doc_name'];
                $_SESSION['doc_id'] = $row['id'];
                $_SESSION['doc_pro_pic'] = $row['pro_pic'];
                header('location: doctor/doc_profile.php');
            }
        } else {
            $sql = "select * from users where email = '$email' and password = '$password' and login_type='3'";


            $res = mysql_query($sql);
            $count=mysql_num_rows($res);


            if ($count == 1) {
                $row = mysql_fetch_assoc(mysql_query($sql));

                session_start();
                $_SESSION['admin_name'] = $row['username'];
                $_SESSION['admin_id'] = $row['id'];
                $_SESSION['is_admin_login'] = TRUE;

                header('location: admin/admin.php');
            }

        }
    }

    public function logout() {
        session_start();
        session_destroy();
        header('location: login.php');
    }

}
