<?php
session_start();
if(!$_SESSION['is_doctor_login']){
    header('location:../login.php');
}
require_once '../db_connection.php';

require_once 'Admin_class.php';
$user_obj=new Admin_class();
$id=$_GET['id'];
$all_data=$user_obj->delete_doctor($id);
?>