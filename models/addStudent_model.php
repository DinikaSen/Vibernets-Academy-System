<?php

/**
 * Created by PhpStorm.
 * User: Anuradha
 * Date: 9/14/2018
 * Time: 9:51 PM
 */
class addStudent_model extends Model
{
    function __construct()
    {
        parent::__construct();
    }

    function getNextID(){
        $stmt = $this->db->prepare("SELECT std_ID FROM student");
        $stmt->execute();
        $row = $stmt->rowCount();
        echo $row+1000;
        return $row+1000;
    }
    function addNewStudent()
    {
        try {
            $student_ID=$_POST['student_id'];
            $nic = $_POST['NIC'];
            $title = $_POST['title'];
            $first_name = $_POST['first_name'];
            $middle_name = $_POST['middle_name'];
            $last_name = $_POST['last_name'];
            $gender = $_POST['gender'];
            $dob = $_POST['dob'];
            $mobile = $_POST['mobile'];
            $land_phone = $_POST['land_phone'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            $district = $_POST['district'];
            $work_place = $_POST['work_place'];
            $designation = $_POST['designation'];

            $studentData = array(
                'std_ID'=>$student_ID,
                'title'=>$title,
                'first_name'=>$first_name,
                'mid_name'=>$middle_name,
                'last_name'=>$last_name,
                'gender'=> $gender,
                'DoB'=> $dob,
                'NIC' => $nic,
                'address'=>$address,
                'district' => $district,
                'mobile' => $mobile,
                'land_phone' => $land_phone,
                'email' => $email,
                'workplace' =>$work_place,
                'designation' => $designation
                );
            $this->db->beginTransaction();
            $this->db->insert('student',$studentData);
            $this->db->commit();
        }
        catch (Exception $e) {
            echo $e;
            $this->db->rollback();
        }
    }
}