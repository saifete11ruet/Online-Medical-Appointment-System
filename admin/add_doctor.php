<?php
require_once 'admin_header.php';
require_once './Admin_class.php';
$admin_object = new Admin_class();
$all_data = $admin_object->get_all_medical_center();
$dept_list = $admin_object->get_dept_list();

if (isset($_POST['submit'])) {
    $msg = $admin_object->add_doctor($_POST);
}
?>   
<section id="main-content">
    <section class="wrapper site-min-height">
        <div class="row mt">
            <div class="col-lg-12">
                <div class="form-panel">
                    <h4 class="mb"><i class="fa fa-angle-right"></i> Add Doctor</h4>
                    <?php echo @$msg ? $msg : '' ;?>
                    <form class="form-horizontal style-form" method="post" action="">
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Doctor Name</label>
                            <div class="col-sm-10">
                                <input type="text" name="doc_name" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Degree</label>
                            <div class="col-sm-10">
                                <input type="text" name="degree" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Chamber</label>
                            <div class="col-sm-10">
                                <select name="chamber" class="form-control">
                                    <option value="">Select Chamber</option>
                                    <?php while ($value = mysql_fetch_array($all_data)) { ?>
                                        <option value="<?php echo $value['id'] ?>"><?php echo $value['medical_center_name'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Shift</label>
                            <div class="col-sm-10">
                                <select name="shift" class="form-control">
                                    <option value="">Select Shift</option>
                                        <option value="1">Morning</option><option value="2">Evening</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Department</label>
                            <div class="col-sm-10">
                                <select name="department" class="form-control">
                                    <option value="">Select Department</option>
                                    <?php while ($value = mysql_fetch_array($dept_list)) { ?>
                                        <option value="<?php echo $value['id'] ?>"><?php echo $value['department'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                                <input type="text" name="email" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" name="password" class="form-control">
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