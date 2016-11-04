<?php
require_once '../admin/admin_header.php';

require_once './Admin_class.php';
$admin_object = new Admin_class();
$all_data = $admin_object->get_dept_list();
?>
<section id="main-content">
    <section class="wrapper site-min-height">
        <h3><i class="fa fa-angle-right"></i> All Department</h3>
        <div class="row mt">
            <div class="col-lg-12">
                <p>All Department List</p>
                <br>
                <a href="add_department.php" class="add-doc-btn"><i class="fa fa-plus"></i> Add Department</a>
                <br>
                <br>
            </div>
        </div>
        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>Department</th>

                <th>Action</th>
            </tr>
            </thead>
            <tbody>

            <?php while ($row = mysql_fetch_array($all_data)) { ?>
                <tr>
                    <td><?php echo $row['department']?></td>

                    <td>
                        <a href=""><i class="fa fa-edit"></i></a>
                        <a href=""><i class="fa fa-trash-o"></i></a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
            <tfoot>
            <tr>
                <th>Department</th>

                <th>Action</th>
            </tr>

            </tfoot>

        </table>
    </section>
</section>
<?php require_once '../admin/admin_footer.php'; ?>
