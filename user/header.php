<!DOCTYPE html>
<?php
?>
<html>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="../assets/img/season-change.jpg" type="image/x-icon">
        <title>Online Medical System</title>


        <link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
        <!-- <link href='http://fonts.googleapis.com/css?family=Pontano+Sans' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Alegreya+Sans:300,400,500,700' rel='stylesheet' type='text/css'> -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Dosis:300,400,500,600' rel='stylesheet' type='text/css'>


        <link rel="stylesheet" type="text/css" href="../assets/css/animate.css">
        <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../assets/css/owl.carousel.css">
        <link rel="stylesheet" type="text/css" href="../assets/css/jquery-ui.css">
        <link rel="stylesheet" type="text/css" href="../assets/css/owl.theme.css">
        <link rel="stylesheet" type="text/css" href="../assets/css/owl.transitions.css">
        <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.min.css">
        <link href="../admin/assets/css/jquery.timepicker.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../assets/css/main.css">
        <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300' rel='stylesheet' type='text/css'>
    </head>

    <body>
        <section class="navs">
            <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand logo" href="#">
                            <span><i class="fa fa-stethoscope"></i></span>
                            Online Medical System
                        </a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active"><a href="../index.php">Home</a></li>
                            <li><a href="../service.php">Services</a></li>
                            <li><a href="../doctors.php">Doctors</a></li>
                            <li><a href="appointment.php">Appointment</a></li>
                            <li><a href="../contact.php">Contact Us</a></li>
                            <li>
                                <a href="profile.php"> <?php echo $_SESSION['user_name'].'\'s ';?>Profile</a>
                            </li>
                            <li>
                                <a href="../logout.php">Logout</a>
                            </li>
                        </ul>
                    </div><!-- navbar-collapse -->
                </div><!-- container-fluid -->
            </nav>
        </section>