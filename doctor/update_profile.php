<?php

require_once './doctor_class.php';
require_once '../admin/Admin_class.php';
$doctor_object = new Doctor_class();
$mlist_object = new Admin_class();
$all_data = $doctor_object->get_profile_data();
$medical_list=$mlist_object->get_all_medical_center();

$msg = '';
if (isset($_POST['submit'])) {
    $msg = $doctor_object->update_profile_data($_POST);
    $all_data = $doctor_object->get_profile_data();
}

require_once 'doctor_header.php';
?>

    <section id="main-content">
        <section class="wrapper site-min-height">
            <div class="row mt">
                <div class="col-md-12">
                    <div class="form-panel">
                        <h2 class="mb"><i class="fa fa-angle-right"></i> Update Profile</h2>
                        <h4 style="color: red;"><?php echo $msg ? $msg : ''; ?></h4>
                        <form class="form-horizontal style-form" method="post" action="" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="col-sm-2  control-label">Profile picture</label>
                                <div class="col-sm-6">
                                    <input type="file" name="image" class="form-control"
                                    value="<?php echo '';?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Doctor Name</label>
                                <div class="col-sm-6">
                                    <input type="text" name="doc_name" class="form-control"
                                           value="<?php echo $all_data['doc_name'];?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Degree</label>
                                <div class="col-sm-6">
                                    <input type="text" name="degree" class="form-control" value="<?php echo $all_data['degree'];?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Chamber</label>
                                <div class="col-sm-6">





                                    <select name="chamber" class="form-control col-sm-6" required>
                                        <option value="">Select Chamber</option>
                                        <?php while ($value = mysql_fetch_array($medical_list)) { ?>
                                            <option value="<?php echo $value['id'] ?>" <?php if ($all_data['chamber_id']==$value['id']) echo 'selected';?>><?php echo $value['medical_center_name'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Email</label>
                                <div class="col-sm-6">
                                    <input type="text" name="email" class="form-control " value="<?php echo $all_data['email'];?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Password</label>
                                <div class="col-sm-6">
                                    <input type="password" name="password" class="form-control" placeholder="Give new password"  >
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