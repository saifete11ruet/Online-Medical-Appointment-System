<?php

class Doctor_class {

    public function __construct() {
        require_once '../db_connection.php';
    }

    public function get_profile_data() {
        @session_start();
        $id = $_SESSION['doc_id'];

        $sql = "select doctors.*,medical_center.medical_center_name,department.department from doctors join medical_center on medical_center.id = doctors.chamber_id join department on department.id=doctors.dept_id where doctors.id = $id ";

        $res = mysql_query($sql);
        $result = mysql_fetch_assoc($res);

        return $result;
    }

    public function get_time($val){
        $sql = "SELECT time FROM time WHERE shift='$val' ";
        $result = mysql_query($sql);
        return $result;
    }

    public function update_profile_data($posted_data){
        if ($_FILES['image']['size']>0){
            $fileName=$_FILES["image"]["name"];
            $tmpName=$_FILES["image"]["tmp_name"];
            $image_info=pathinfo($fileName);
            $image_extension=$image_info["extension"];
            $new_file_name=time().'_'.rand(0,99999999).'.'.$image_extension;
            $upload_path='images/';
            $upload_success=move_uploaded_file($tmpName, $upload_path.$new_file_name);
            if($upload_success){
                $pro_pic=$new_file_name;
                $sql="UPDATE doctors
                SET pro_pic='$pro_pic'
                WHERE id='$_SESSION[doc_id]';";
                $res = mysql_query($sql);
                $_SESSION['doc_pro_pic']=$pro_pic;
                
            }
        }


        $id=$_SESSION['doc_id'];
        $name = $posted_data['doc_name'];
            $degree = $posted_data['degree'];
            $chamber = $posted_data['chamber'];
            $email = $posted_data['email'];
        $sql="SELECT * FROM doctors WHERE email='$email' and id!='$id'";
        $res=mysql_query($sql);
        $count=mysql_num_rows($res);
        if($count==1){

            $msg='Email Already Exists';
            return $msg;
        }

        else{
            if($posted_data['password']){
            $password = md5($posted_data['password']);
            $sql="UPDATE doctors
            SET doc_name='$name',degree='$degree',chamber_id='$chamber',email='$email',password='$password'
            WHERE id='$_SESSION[doc_id]'";
            }
            else{
                $sql="UPDATE doctors
            SET doc_name='$name',degree='$degree',chamber_id='$chamber',email='$email'
            WHERE id='$_SESSION[doc_id]'";
            }
            $res = mysql_query($sql);

            if ($res) {
                $msg = "Successfully Updated";

                return $msg;
            }
        }
    }

    public function add_visiting_hour($posted){
        @session_start();
        $id = $_SESSION['doc_id'];
        $start=$posted['t1'];
        $end=$posted['t2'];
        $sql="UPDATE doctors SET start_time='$start',end_time='$end' WHERE id='$id'";
        $res=mysql_query($sql);
        if ($res){
            $msg='Added Successfully';
        }
        return $msg;
    }

    public function appointment_history($app_id=''){
        @session_start();
        $id=$_SESSION['doc_id'];
        $sql="select appointment_history.*, users.full_name,users.gender,time.time from appointment_history join users on appointment_history.user_id=users.id join time on appointment_history.time_id=time.id where appointment_history.doc_id='$id'";
        if ($app_id){
            $sql.=" and appointment_history.id='$app_id'";
        }
        else{
        $sql.=" ORDER BY appointment_history.appointment_date ASC";
            }



        $res=mysql_query($sql);
        return $res;
    }

    public function delete_appointment_history($id){
        $sql="DELETE FROM appointment_history where id='$id'";

        $res=mysql_query($sql);

        header('location:appointment_history.php');
    }

    public function search_appointment_date_ajax($date)
    {
        session_start();
        $id=$_SESSION['doc_id'];
        $sql="select appointment_history.*, users.full_name,users.gender,time.time from appointment_history join users on appointment_history.user_id=users.id join time on appointment_history.time_id=time.id where appointment_history.doc_id='$id' and 
   appointment_history.appointment_date='$date'";
        $res=mysql_query($sql);
        return $res;
    }

    public function search_by_user_ajax($user)
    {
        session_start();
        $id=$_SESSION['doc_id'];
        $sql="select appointment_history.*, users.full_name,users.gender,time.time from appointment_history join users on appointment_history.user_id=users.id join time on appointment_history.time_id=time.id where appointment_history.doc_id='$id' and 
   users.full_name like '%$user%' order by 
   appointment_history.appointment_date desc";

        $res=mysql_query($sql);
        return $res;

    }

    public function update_patient_status($posted,$id,$user_id)
    {
        $disease=$posted['disease'];
        $curr_stat=$posted['current_status'];
        $presc=$posted['prescription'];
        $sql="UPDATE appointment_history
            SET disease='$disease',prescription='$presc',current_status='$curr_stat'
            WHERE id='$id' and user_id='$user_id'";

        $res=mysql_query($sql);
        if($res){
            $msg="Updated Successfully";
            return $msg;
        }
    }


}
