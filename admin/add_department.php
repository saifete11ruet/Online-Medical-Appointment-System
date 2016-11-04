<?php
require_once '../admin/admin_header.php';
require_once './Admin_class.php';

$admin_object = new Admin_class();
$msg = '';
if (isset($_POST['submit'])) {
    $msg = $admin_object->add_department($_POST);
}
?>

<section id="main-content">
    <section class="wrapper site-min-height">
        <div class="row mt">
            <div class="col-lg-12">
                <div class="form-panel">
                    <h4 class="mb"><i class="fa fa-angle-right"></i> Add Medical Center</h4>
                    <?php echo $msg ? $msg : '' ?>
                    <form class="form-horizontal style-form" method="post" action="">
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Department</label>
                            <div class="col-sm-10">
                                <input type="text" name="department" class="form-control">
                            </div>
                        </div>

                        <input type="submit" name="submit" value="Submit" class="btn btn-success pull-right">
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div><!-- col-lg-12-->
        </div><!-- /row -->

    </section>
</section>











<?php require_once '../admin/admin_footer.php'; ?>

