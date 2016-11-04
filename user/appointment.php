<?php
session_start();
if(!$_SESSION['is_user_login']){
    header('location:../login.php');
}
?>
<?php require_once './header.php'; ?>
    <br>
    <br>
    <br>
<div class="profile-menu" style="min-height: 244px;">
    <a href="get_appointment.php">Get Appoinment</a>
    <a href="appointment_history.php">See All Appoinment History</a>
</div>
<?php require_once './footer.php'; ?>