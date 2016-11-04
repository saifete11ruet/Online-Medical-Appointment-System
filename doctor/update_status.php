<?php

require_once './doctor_class.php';

$doctor_object = new Doctor_class();
$id=$_GET['id'];
$user_id=$_GET['user_id'];



$msg = '';
if (isset($_POST['submit'])) {
    $msg = $doctor_object->update_patient_status($_POST,$id,$user_id);

}

$result = $doctor_object->appointment_history($id);
$all_data=mysql_fetch_assoc($result);



require_once 'doctor_header.php';
?>

    <section id="main-content">
        <section class="wrapper site-min-height">
            <div class="row mt">
                <div class="col-md-12">
                    <div class="form-panel">
                        <h2 class="mb"><i class="fa fa-angle-right"></i> Update Profile</h2>
                        <h4 style="color: red;"><?php echo $msg ? $msg : ''; ?></h4>
                        <form class="form-horizontal style-form" method="post" action="" >

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Patient Name</label>
                                <div class="col-sm-6">
                                    <h4><?php echo $all_data['full_name'];?></h4>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Disease</label>
                                <div class="col-sm-6">
                                    <input type="text" name="disease" class="form-control" value="<?php echo $all_data['disease'];?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Current Status</label>
                                <div class="col-sm-6">
                                    <textarea name="current_status"
                                              cols="30"
                                              rows="3" class="form-control" ><?php echo $all_data['current_status'];?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Prescription</label>
                                <div class="col-sm-6">
                                    <textarea
                                        name="prescription" class="form-control"
                                        cols="30"
                                        rows="10"><?php echo $all_data['prescription'];?></textarea>
                                </div>
                            </div>


                            <div class="form-group">
                                <input type="submit" name="submit" value="submit" class="btn btn-success col-sm-offset-7 col-sm-1">
                            </div>

                        </form>
                    </div>
                </div><!-- col-lg-12-->
            </div><!-- /row -->

        </section>
    </section>











<?php require_once 'doctor_footer.php'; ?>