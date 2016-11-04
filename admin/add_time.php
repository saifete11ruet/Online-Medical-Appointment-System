<?php require_once '../admin/admin_header.php'; ?>
<?php
    require_once 'Admin_class.php';
    $admin_obj=new Admin_class();
    if (isset($_POST['submit'])){
        $msg=$admin_obj->add_time($_POST);
    }
?>
<section id="main-content">
    <section class="wrapper site-min-height">
        <div class="row mt">
            <div class="col-lg-12">
                <div class="form-panel">
                    <h4 class="mb"><i class="fa fa-angle-right"></i> Add Time Slot</h4>
                    <form class="form-horizontal style-form" method="post" action="">
                        <?php

                            echo @$msg;

                        ?>
                        <div class="form-group">
                            <label class="col-sm-2  control-label">Add Visiting Shift</label>
                            <div class="col-sm-4">
                                <select class="form-control" name="shift">
                                    <option>Select Shift</option>
                                    <option value="1">Morning</option>
                                    <option value="2">Evening Shift</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2  control-label">Time Slot</label>

                            <div class="col-sm-4">
                                <input  type="text" name="time" class="time basicExample form-control" />
                            </div>

                        </div>
                        <div class="col-sm-6">
                        <input type="submit" name="submit" value="Submit" class="btn btn-success pull-right">
                            </div>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div><!-- col-lg-12-->      	
        </div><!-- /row -->

    </section>
</section>

<?php require_once '../admin/admin_footer.php'; ?>

