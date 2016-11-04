<?php
session_start();
if(!$_SESSION['is_user_login']){
    header('location:../login.php');
}
?>
<?php

require_once '../admin/Admin_class.php';
$admin_obj=new Admin_class();
$dept_list=$admin_obj->get_dept_list();

require_once 'User_class.php';
$user_obj=new User_class();
if(isset($_POST['submit'])){
$msg=$user_obj->add_appointment($_POST);
    }
require_once './header.php';

?>




    <section id="main-content" style="padding: 70px 0 50px;">
        <section class="wrapper site-min-height">
            <div class="row mt container">
                <div class="col-lg-12 col-md-12">
                    <div class="form-panel">
                        <h1 class="col-sm-offset-3">Get Appointment</h1>
                        <form class="form-horizontal style-form" method="post" action="" >

                            <br>

                            <div class="form-group">

                                <label class="col-sm-2  control-label">Select Department</label>
                                <div class="col-sm-5">

                                    <select name="department" class="form-control" id="dept" required>
                                        <option
                                            value="" >Select Department</option>
                                        <?php while($value=mysql_fetch_assoc($dept_list)){?>
                                            <option value="<?php echo $value['id'];?>"><?php echo $value['department'];?> </option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2  control-label">Select Doctor</label>
                                <div class="col-sm-5">

                                    <select name="doc_name" class="form-control ajax" id="doc_name" required>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2  control-label">Disease name</label>
                                <div class="col-sm-5">

                                    <input
                                        type="text"
                                        name="disease"
                                        id="disease" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2  control-label">Your Age</label>
                                <div class="col-sm-5">

                                    <input
                                        type="text"
                                        name="age"
                                        id="age" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2  control-label">Appointment Date</label>
                                <div class="col-sm-5">

                                    <input type="text" name="date" id="datein" readonly="readonly" value="" class="form-control ajax" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2  control-label">Select Visiting Time</label>
                                <div class="col-sm-5">

                                    <select name="time" class="form-control" id="time" required>
                                    </select>
                                </div>
                            </div>

                            <br>
                            <input type="submit" name="submit" value="submit" class="btn btn-success col-sm-offset-6 col-sm-1">
                        </form>
                    </div>
                </div><!-- col-lg-12-->
            </div><!-- /row -->

        </section>
    </section>

<?php require_once './footer.php'; ?>