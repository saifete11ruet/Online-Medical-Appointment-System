<?php

require_once './Admin_class.php';

$admin_object = new Admin_class();
$id=$_GET['id'];
$msg = '';
if (isset($_POST['submit'])) {
    $msg = $admin_object->update_medical_center($_POST,$id);
}


$medical_data = $admin_object->get_medical_center_data($id);


require_once 'admin_header.php';
?>

    <section id="main-content">
        <section class="wrapper site-min-height">
            <div class="row mt">
                <div class="col-lg-12">
                    <div class="form-panel">
                        <h4 class="mb"><i class="fa fa-angle-right"></i> Edit Medical Center</h4>
                        <?php echo $msg ? $msg : '' ?>
                        <form class="form-horizontal style-form" method="post" action="" enctype="multipart/form-data">
                            
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Medical Center Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="medical_center_name" class="form-control" value="<?php echo $medical_data['medical_center_name'];?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Address</label>
                                <div class="col-sm-10">
                                    <input type="text" name="medical_center_address" class="form-control" value="<?php echo $medical_data['medical_center_address'];?>">
                                </div>
                            </div>
                          
                            <input type="submit" name="submit" value="submit">
                        </form>
                    </div>
                </div><!-- col-lg-12-->
            </div><!-- /row -->

        </section>
    </section>











<?php require_once 'admin_footer.php'; ?>