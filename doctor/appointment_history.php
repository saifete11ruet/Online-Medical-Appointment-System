<?php
session_start();
if(!$_SESSION['is_doctor_login']){
    header('location:../login.php');
}
require_once '../db_connection.php';
require_once 'doctor_class.php';
$doctor_obj=new doctor_class();
$all_data=$doctor_obj->appointment_history();
?>
<?php require_once './doctor_header.php'; ?>





<section
    id="main-content"
    xmlns="http://www.w3.org/1999/html">
    <section class="wrapper site-min-height">
        <div class="row mt">
            <div class="col-sm-12">
                <h1 class="col-sm-offset-3">Appointment History</h1>

                <div class="row mt">
                    <div class="col-sm-2">
                        <a style="margin-top: 28px;" href="#" class="btn btn-primary all">All Appointments</a>

                    </div>

                    <div class="col-sm-2 col-sm-offset-1">
                        <a style="margin-top: 28px;" href="#" class="btn btn-primary today"> Today's Appointments</a>

                    </div>
                    <div class="col-sm-offset-1 col-sm-3">
                        <h4>Search by Date</h4>
                        <input
                            type="text"
                            name="date"
                            id="datein">

                    </div>
                    <div class="col-sm-3">
                        <h4>Search by Patient</h4>
                        <input
                            type="text"
                            name=""
                            class="user"
                            id="">

                    </div>
                </div>
                <br><br>

                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Date</th>
                        <th>Patient Name</th>
                        <th>Gender</th>
                        <th>Age</th>
                        <th>Disease</th>
                        <th>Time</th>
                        <th>Current Status</th>
                        <th>Prescription</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody class="ajax">
                    <?php while ($value = mysql_fetch_array($all_data)) { ?>
                        <tr>
                            <td><?php echo $value['appointment_date']?></td>
                            <td><?php echo $value['full_name']?></td>
                            <td><?php echo $value['gender']=='1'?'Male':'Female';?></td>
                            <td><?php echo $value['age']?></td>
                            <td><?php echo $value['disease']?></td>
                            <td><?php echo $value['time']?></td>
                            <td><?php echo $value['current_status']?></td>
                            <td><?php echo $value['prescription']?></td>
                            <td>
                                <a class="btn btn-primary" style="padding: 3px;" href="update_status.php?id=<?php echo
                                $value['id'];?>&user_id=<?php echo $value['user_id'];?>">Update Status</a>
                                <a style="padding: 3px;"  class="btn btn-danger" href="delete_history.php?id=<?php echo
                                $value['id'];?>">Cancel Appointment</a></td>
                        </tr>

                    <?php } ?>

                    </tbody>

                    <tfoot>
                    <tr>
                        <th>Date</th>
                        <th>Patient Name</th>
                        <th>Gender</th>
                        <th>Age</th>
                        <th>Disease</th>
                        <th>Time</th>
                        <th>Current Status</th>
                        <th>Prescription</th>
                        <th>Action</th>
                    </tr>
                    </tfoot>

                </table>
            </div><!-- col-lg-12-->
        </div><!-- /row -->

    </section>
</section>





<?php require_once './doctor_footer.php'; ?>




