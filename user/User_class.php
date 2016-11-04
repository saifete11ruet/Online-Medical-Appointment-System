<?php
class User_class{

    public function get_profile_data(){
        $id=$_SESSION['user_id'];
        $sql="SELECT * FROM users where id='$id'";

        $res = mysql_query($sql);
        $result = mysql_fetch_assoc($res);
        return $result;
    }

    public function update_profile_data($posted){
        $id=$_SESSION['user_id'];
        $full_name=$posted['full_name'];
        $gender=$posted['gender'];
        $age=$posted['age'];
        $email=$posted['email'];
        $username=$posted['username'];

        $sql="SELECT * FROM users WHERE email='$email' and id!='$id'";
        $res=mysql_query($sql);
        $count=mysql_num_rows($res);
        if($count==1){
            $msg='Email Already Exists';
            return $msg;
        }
        else{
        if($posted['password']){
        $password=md5($posted['password']);
        $sql="UPDATE users SET full_name='$full_name',gender='$gender',age='$age',email='$email',username='$username',password='$password' WHERE id='$id'";

        }
        else{
            $sql="UPDATE users SET full_name='$full_name',gender='$gender',age='$age',email='$email',username='$username' WHERE id='$id'";
        }
        $res=mysql_query($sql);
        if($res){
            $msg='Profile Updated Successfully';
            return $msg;
        }
        }
    }

    public function add_appointment($posted){

        $user_id=$_SESSION['user_id'];
        $age=$_POST['age'];
        $disease=$_POST['disease'];
        $doc_id=$_POST['doc_name'];
        $app_date=$_POST['date'];
        $time=$_POST['time'];
        $sql="SELECT id FROM time where time='$time'";
        $res=mysql_query($sql);
        $result=mysql_fetch_assoc($res);
        $time_id=$result['id'];

        $sql="INSERT into appointment_history(user_id,disease,age,doc_id,appointment_date,time_id) VALUES('$user_id','$disease','$age','$doc_id','$app_date','$time_id')";

        $res=mysql_query($sql);

        if($res){
            header('location:appointment_history.php');
        }


    }

    public function appointment_history(){
        $id=$_SESSION['user_id'];
        $sql="select appointment_history.*, doctors.doc_name, medical_center.medical_center_name, department.department, time.shift,time.time from appointment_history join doctors on appointment_history.doc_id=doctors.id join medical_center on doctors.chamber_id=medical_center.id join department on doctors.dept_id=department.id join time on appointment_history.time_id=time.id where appointment_history.user_id='$id' ORDER BY 
   appointment_history.appointment_date ASC";

        $res=mysql_query($sql);
        return $res;
    }

    public function delete_appointment_history($id){
        $sql="DELETE FROM appointment_history where id='$id'";

        $res=mysql_query($sql);

        header('location:appointment_history.php');}


}
?>