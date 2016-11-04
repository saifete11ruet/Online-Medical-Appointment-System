<?php

require_once 'doctor_header.php';
require_once 'doctor_class.php';
$doc_object=new Doctor_class();
$value=$doc_object->get_profile_data();
$time1=$doc_object->get_time($value['shift']);
$time2=$doc_object->get_time($value['shift']);
if(isset($_POST['submit'])){
    $msg=$doc_object->add_visiting_hour($_POST);
}

?>
<section
    id="main-content"
    xmlns="http://www.w3.org/1999/html">
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
                            <span class="col-sm-2 col-sm-2 control-label">Visiting Shift:</span>
                            <h4 class="col-sm-6"><?php echo $value['shift']==1?'Morning':'Evening';?></h4>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2  control-label">Time Slot</label>

                            <div class="col-sm-3">
                                <label class="  control-label">From</label>
                                <select name="t1" class="form-control" id="t1">
                                   <?php while ($row = mysql_fetch_array($time1)) {

                                    echo "<option value='".$row['time']."' >" . $row['time'] . "</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-sm-3 ">
                            <label class="col-sm-offset-1  control-label">To</label>

                                <select id="t2" name="t2" class="form-control" >
                                    <?php while ($row = mysql_fetch_array($time2)) {

                                        echo "<option value='".$row['time']."' >" . $row['time'] . "</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <input type="submit" name="submit" value="Submit" class="btn btn-success col-sm-offset-7 col-sm-1">
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div><!-- col-lg-12-->
        </div><!-- /row -->

    </section>
</section>

<?php require_once 'doctor_footer.php'; ?>

