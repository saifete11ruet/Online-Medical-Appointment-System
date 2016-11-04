<?php
require_once '../admin/admin_header.php';
require_once './Admin_class.php';
$admin_object = new Admin_class();
$all_data = $admin_object->get_all_medical_center();
$dept_list = $admin_object->get_dept_list();
$msg = '';
$doctors_data = $admin_object->get_doctor_table_data();
if (isset($_POST['submit'])) {
    $msg = $admin_object->add_doctor($_POST);
}

?>

<section id="main-content">
    <section class="wrapper site-min-height">
        <h3><i class="fa fa-angle-right"></i> All Doctors</h3>
        <div class="row mt">
            <div class="col-lg-12">
                <p>All Doctors List</p>
                <br>
                <a href="#" data-toggle="modal" data-target="#myModal" class="add-doc-btn"><i class="fa fa-plus"></i> Add Doctor</a>
                <br>

                <br>
               <span style="font-size: 20px;color: red;"> <?php echo @$msg ? $msg : '';echo '<br>'; ?></span>
            </div>
        </div>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Doctor Name</th>
                    <th>Doctor Degree</th>
                    <th>Doctor Chamber</th>
                    <th>Department</th>
                    <th>Shift</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($value = mysql_fetch_array($doctors_data)) { ?>
                    <tr>
                        <td><?php echo $value['doc_name']?></td>
                        <td><?php echo $value['degree']?></td>
                        <td><?php echo $value['medical_center_name']?></td>
                        <td><?php echo $value['department']?></td>
                        <td><?php echo $value['shift']==1?'Morning':'Evening';?></td>
                        <td>
                            <a href=" "  data-toggle="modal" data-target="#myModal2"><i class="fa fa-edit"></i></a>
                            <a href="delete_doctor.php?id=<?php echo $value['id'];?>"><i class="fa fa-trash-o"></i></a>
                        </td>

                    </tr>
                <?php } ?>
            </tbody>
            <tfoot>
                <tr>
                    <th>Doctor Name</th>
                    <th>Doctor Degree</th>
                    <th>Doctor Chamber</th>
                    <th>Department</th>
                    <th>Shift</th>
                    <th>Action</th>
                </tr>
            </tfoot>

        </table>
    </section>
</section>


<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Add Doctor</h4>
            </div>
            <div class="modal-body">


<?php require_once 'add.php';?>



            </div>


        </div>
    </div>
</div>

<div id="myModal2" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Add Doctor</h4>
            </div>
            <div class="modal-body">


<?php require_once 'add.php';?>



            </div>


        </div>
    </div>
</div>


<?php require_once '../admin/admin_footer.php'; ?>
