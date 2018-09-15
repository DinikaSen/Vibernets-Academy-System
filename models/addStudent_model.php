<?php

/**
 * Created by PhpStorm.
 * User: Anuradha
 * Date: 9/14/2018
 * Time: 9:51 PM
 */
class addStudent_model extends Model
{
    function __construct($user_type)
    {
        parent::__construct($user_type);
    }

    /*function getNextID(){
        $sql = SHOW TABLE STATUS LIKE 'student';
        if(!$result = $this->db->query($sql)){
            die('There was an error running the query [' . $this->db->error . ']');
        }
        $row = $result->fetch_assoc();
        echo $row['Auto_increment'];

    }*/
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
                'title'=>$title,
                'first_name'=>$first_name,
                'mid_name'=>$middle_name,
                'last_name'=>$last_name,
                'gender'=> $gender,
                'DoB'=> $dob,
                'NIC' => $nic,
                'address'=>$address,
                'distric' => $district,
                'mobile' => $mobile,
                'land_phone' => $land_phone,
                'email' => $email,
                'workplace' =>$work_place,
                'designation' => $designation
                );

            $this->db->beginTransaction();
            $this->db->insert('student',$studentData);


        } catch (Exception $e) {
            $this->db->rollback();
        }
    }
}