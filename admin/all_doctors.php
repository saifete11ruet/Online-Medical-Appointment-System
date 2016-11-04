<?php
require_once '../admin/admin_header.php';
require_once './Admin_class.php';
$admin_object = new Admin_class();
$doctors_data = $admin_object->get_doctor_table_data();
?>
<section id="main-content">
    <section class="wrapper site-min-height">
        <h3><i class="fa fa-angle-right"></i> All Doctors</h3>
        <div class="row mt">
            <div class="col-lg-12">
                <p>All Doctors List</p>
                <br>
                <a href="add_doctor.php" class="add-doc-btn"><i class="fa fa-plus"></i> Add Doctor</a>
                <br>
                <br>
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
                            <a href="edit_doctor.php?id=<?php echo $value['id'];?>"><i class="fa fa-edit"></i></a>
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
<?php require_once '../admin/admin_footer.php'; ?>
