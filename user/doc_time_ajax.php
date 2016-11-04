
<?php
require_once '../db_connection.php';
$value1=$_GET['value1'];
$value2=$_GET['value2'];



if (isset($value1) && isset($value2)){
    if (!empty($value1) && !empty($value2) ) {
        if(empty($value2)){exit;}
        $sql = "SELECT id,start_time,end_time FROM doctors WHERE id='$value1' ";

        $result = mysql_query($sql);


        echo "<option >Select Time</option>";
        while ($row = mysql_fetch_assoc($result)) {


            $start = $row['start_time'];


            $end = $row['end_time'];
            $time1 = strtotime($start);
            $time2 = strtotime($end);

            for($i=$time1;$i<=$time2;){
                $j=date('h:i A',$i);
                $sql="SELECT id FROM time where time='$j'";
                $res=mysql_query($sql);
                $result=mysql_fetch_assoc($res);
                $time_id=$result['id'];

                $sql="SELECT * FROM appointment_history where time_id='$time_id' and appointment_date='$value2'";
                $res=mysql_query($sql);
                $count=mysql_num_rows($res);

                if($count<1){
                echo "<option value='".$j."' >" . $j . "</option>";
                    }
                $i = strtotime("+30 minutes", $i);

            }

        }
    }

}
?>