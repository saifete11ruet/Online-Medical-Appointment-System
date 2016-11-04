<?php
session_start();
if(!$_SESSION['is_user_login']){
    header('location:../login.php');
}
require_once '../db_connection.php';
require_once 'User_class.php';
$user_obj=new User_class();
$all_data=$user_obj->appointment_history();
?>
<?php require_once './header.php'; ?>


<br>
<br>
<br>
<br>
<div class="container" style="min-height: 424px;">
<div class="row">
    <div class="col-md-12">
        <h1 class="col-sm-offset-3">Appointment History</h1>
        <br>
        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>Date</th>
                <th>Doctor Name</th>
                <th>Doctor Chamber</th>
                <th>Department</th>
                <th>Disease</th>
                <th>Shift</th>
                <th>Time</th>
                <th>Cancel Appointment</th>
            </tr>
            </thead>
            <tbody>
                <?php while ($value = mysql_fetch_array($all_data)) { ?>
                <tr>
                <td><?php echo $value['appointment_date']?></td>
                <td><?php echo $value['doc_name']?></td>
                <td><?php echo $value['medical_center_name']?></td>
                <td><?php echo $value['department']?></td>
                <td><?php echo $value['disease']?></td>
                <td><?php
                    if($value['shift']=='1'){echo 'Morning';}
                    else echo 'Evening'
                    ?>
                </td>
                <td><?php echo $value['time']?></td>
                <td>
                    <a href="delete_history.php?id=<?php echo $value['id'];?>">Cancel</a></td>
                </tr>

            <?php } ?>

            </tbody>

            <tfoot>
            <tr>
                <th>Date</th>
                <th>Doctor Name</th>
                <th>Doctor Chamber</th>
                <th>Department</th>
                <th>Disease</th>
                <th>Shift</th>
                <th>Time</th>
                <th>Cancel Appointment</th>
            </tr>
            </tfoot>

        </table>
    </div>
</div>
    </div>

<?php require_once './footer.php'; ?>




