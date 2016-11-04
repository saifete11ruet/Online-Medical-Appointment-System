<?php
session_start();
if(!$_SESSION['is_user_login']){
    header('location:../login.php');
}
require_once '../db_connection.php';
require_once 'User_class.php';
$user_obj=new User_class();
$id=$_GET['id'];
$all_data=$user_obj->delete_appointment_history($id);
?>