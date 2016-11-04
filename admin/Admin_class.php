<?php

class Admin_class {

    public function __construct() {
        require_once '../db_connection.php';
    }

    public function add_medical($posted_data) {
        $center_name = $posted_data['medical_center_name'];
        $center_address = $posted_data['medical_center_address'];
        $sql = "insert into medical_center (medical_center_name,medical_center_address)values('$center_name','$center_address')";
        $res = mysql_query($sql);

        if ($res) {
            $msg = "Successfully Inserted";
            return $msg;
        }
    }

    public function add_department($posted_data) {
        $dept = $posted_data['department'];
        $sql = "insert into department (department)values('$dept')";
        $res = mysql_query($sql);

        if ($res) {
            $msg = "Successfully Inserted";
            return $msg;
        }
    }

    public function get_doctor_table_data() {
        $sql = "select doctors.*,medical_center.medical_center_name,department.department from doctors join medical_center on medical_center.id = doctors.chamber_id join department on department.id=doctors.dept_id ";
        $res = mysql_query($sql);
        return $res;
    }

    public function get_single_doctor_data($id) {
        $sql = "select doctors.*,medical_center.medical_center_name,department.department from doctors join medical_center on medical_center.id = doctors.chamber_id join department on department.id=doctors.dept_id where doctors.id='$id'";

        $res = mysql_query($sql);
        $result=mysql_fetch_assoc($res);

        return $result;
    }



    public function add_doctor($posted_data) {
        $name = $posted_data['doc_name'];
        $degree = $posted_data['degree'];
        $chamber = $posted_data['chamber'];
        $shift = $posted_data['shift'];
        $department = $posted_data['department'];
        $email = $posted_data['email'];
        $password = md5($posted_data['password']);

        $sql="SELECT * FROM doctors WHERE email='$email'";
        $res=mysql_query($sql);
        $count=mysql_num_rows($res);
        if($count==1){

            $msg='Email Already Exists';
            return $msg;
        }
        else{
        $sql = "insert into doctors (doc_name,degree,chamber_id,shift,dept_id,email,password)"
                . "values('$name','$degree','$chamber','$shift','$department','$email','$password')";
        $res = mysql_query($sql);

        if ($res) {
            $msg = "Successfully Inserted";
            return $msg;
        }
        }
    }

    public function edit_doctor($posted,$id){
        $doc_name=$posted['doc_name'];
        $degree=$posted['degree'];
        $chamber_id=$posted['chamber'];
        $shift=$posted['shift'];
        $dept_id=$posted['department'];
        $email=$posted['email'];

        $sql="UPDATE doctors
            SET doc_name='$doc_name',degree='$degree',chamber_id='$chamber_id',email='$email',dept_id='$dept_id',shift='$shift'
            WHERE id='$id'";
        $res=mysql_query($sql);

        if($res){
            $msg="Successfully Updated";
            return $msg;
        }

    }

    public function delete_doctor($id){
        $sql="DELETE FROM doctors where id='$id'";

        $res=mysql_query($sql);

        header('location:all_doctors.php');
    }

    public function get_all_medical_center() {
        $sql = "select * from medical_center";
        $res = mysql_query($sql);
        return $res;
    }


    public function get_dept_list() {
        $sql = "select * from department";
        $res = mysql_query($sql);
        return $res;
    }
    
    
    public function get_medical_center_data($id) {
        $sql = "select * from medical_center where id='$id'";

        $res = mysql_query($sql);
        $result=mysql_fetch_assoc($res);

        return $result;
    }
    
    public function update_medical_center($posted,$id){
        $medical_center_name=$posted['medical_center_name'];
        $medical_center_address=$posted['medical_center_address'];

        $sql="UPDATE medical_center
            SET medical_center_name='$medical_center_name',medical_center_address='$medical_center_address'
            WHERE id='$id'";
        $res=mysql_query($sql);

        if($res){
            $msg="Successfully Updated";
            return $msg;
        }
        


    }
    
    public function delete_medical_center($id){
        $sql="DELETE FROM medical_center where id='$id'";
        $res=mysql_query($sql);
        header('location:medical_center_list.php');
    }
    
    
    public function get_department_data($id) {
        $sql = "select * from department where id='$id'";

        $res = mysql_query($sql);
        $result=mysql_fetch_assoc($res);

        return $result;
    }
    
    public function update_department($posted,$id){
        $department=$posted['department'];

        $sql="UPDATE department
            SET department='$department'
            WHERE id='$id'";
        $res=mysql_query($sql);

        if($res){
            $msg="Successfully Updated";
            return $msg;
        }
    }
    
    public function delete_department($id) {
       $sql="DELETE FROM department where id='$id'";
       $res=  mysql_query($sql);
       header('location:department_list.php');
    }

    public function add_time($posted){
        $shift=$posted['shift'];
        $time=$posted['time'];

        $sql="insert into time (shift,time) values('$shift','$time')";
            $res = mysql_query($sql);




        if ($res) {
            $msg = "Successfully Added";
            return $msg;
        }
    }

}
