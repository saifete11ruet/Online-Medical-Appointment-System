<?php

require_once './Admin_class.php';

$admin_object = new Admin_class();
$id=$_GET['id'];
$msg = '';
if (isset($_POST['submit'])) {
    $msg = $admin_object->edit_doctor($_POST,$id);
}
$all_data = $admin_object->get_all_medical_center();
$dept_list = $admin_object->get_dept_list();

$doctors_data = $admin_object->get_single_doctor_data($id);


require_once 'admin_header.php';
?>
    <section id="main-content">
        <section class="wrapper site-min-height">
            <div class="row mt">
                <div class="col-lg-12">
                    <div class="form-panel">
                        <h4 class="mb"><i class="fa fa-angle-right"></i> Edit Doctor</h4>
                        <?php echo $msg ? $msg : '' ?>
                        <form class="form-horizontal style-form" method="post" action="">
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Doctor Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="doc_name" value="<?php echo $doctors_data['doc_name'];?>" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Degree</label>
                                <div class="col-sm-10">
                                    <input type="text" name="degree" value="<?php echo $doctors_data['degree'];?>" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Chamber</label>
                                <div class="col-sm-10">
                                    <select name="chamber" class="form-control">
                                        <option value="">Select Chamber</option>
                                        <?php while ($value = mysql_fetch_array($all_data)) { ?>
                                            <option value="<?php echo $value['id'] ?>" <?php echo $value['id']==$doctors_data['chamber_id']?'selected':'';?>><?php echo $value['medical_center_name'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Shift</label>
                                <div class="col-sm-10">
                                    <select name="shift" class="form-control">
                                        <option value="">Select Shift</option>
                                        <option value="1" <?php echo $doctors_data['shift']==1?'selected':'';?>>Morning</option><option value="2" <?php echo $doctors_data['shift']==2?'selected':'';?>>Evening</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Department</label>
                                <div class="col-sm-10">
                                    <select name="department" class="form-control">
                                        <option value="">Select Department</option>
                                        <?php while ($value = mysql_fetch_array($dept_list)) { ?>
                                            <option value="<?php echo $value['id'] ?>"  <?php echo $doctors_data['dept_id']==$value['id']?'selected':'';?>><?php echo $value['department'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="text" name="email" value="<?php echo $doctors_data['email'];?>" class="form-control">
                                </div>
                            </div>

                            <input type="submit" name="submit" value="Submit">
                        </form>
                    </div>
                </div><!-- col-lg-12-->
            </div><!-- /row -->

        </section>
    </section>











<?php require_once '../admin/admin_footer.php'; ?>