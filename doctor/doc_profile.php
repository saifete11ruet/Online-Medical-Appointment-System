<?php
require_once './doctor_class.php';
$doc_obj = new Doctor_class();
$all_data = $doc_obj->get_profile_data();

require_once '../doctor/doctor_header.php';
?>
<section id="main-content">
    <section class="wrapper site-min-height">
        <h3><?php echo $_SESSION['doc_name']; ?>'s Profile</h3>
        <div class="row mt">
            <div class="col-lg-12 col-md-12">
                <a href="update_profile.php" class="add-doc-btn"><i class="fa fa-edit"></i> Update Profile</a>
                <br>
            </div>
        </div>
        <br>
        <br>
        <br>
        <table class="table table-bordered">
            <tr>
                <th>Doctor Image</th>
                <td>
                    <div class="img_container">
                        <img style="width: 178px;height: 198px;"  class="pic"
                            src="images/<?php echo $all_data['pro_pic'];?>"
                            alt="">
                    </div>
                </td>
            </tr>
            <tr>
                <th>Doctor Name</th>
                <td><?php echo $all_data['doc_name']; ?></td>
            </tr>
            <tr>
                <th>Doctor Degree</th>
                <td><?php echo $all_data['degree']; ?></td>
            </tr>
            <tr>
                <th>Chamber Name</th>
                <td><?php echo $all_data['medical_center_name']; ?></td>
            </tr>
            <tr>
                <th>Department</th>
                <td><?php echo $all_data['department']; ?></td>
            </tr>
            <tr>
                <th>Shift</th>
                <td><?php echo $all_data['shift']=='1'?'Morning':'Evening'; ?></td>
            </tr>
            <tr>
                <th>Visiting Time</th>
                <td><?php echo $all_data['start_time']; ?> - <?php echo $all_data['end_time']; ?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?php echo $all_data['email']; ?></td>
            </tr>
            <tr>
                <th>Password</th>
                <td>*********</td>
            </tr>
        </table>
    </section>
</section>

<?php require_once '../doctor/doctor_footer.php'; ?>

