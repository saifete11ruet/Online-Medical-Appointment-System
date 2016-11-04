<?php

require_once '../db_connection.php';


@$date=$_GET['date'];
@$all=$_GET['all'];
@$user=$_GET['user'];
require_once 'doctor_class.php';
$doc_obj=new Doctor_class();

if($date!=''){
    $res=$doc_obj->search_appointment_date_ajax($date);
}

elseif($all=='all'){
    $res=$doc_obj->appointment_history();
}

elseif($user!=''){
    $res=$doc_obj->search_by_user_ajax($user);
}

else{
    $res=$doc_obj->appointment_history();
}


while ($value = mysql_fetch_array($res)) { ?>
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

