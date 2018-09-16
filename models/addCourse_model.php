<?php

/**
 * Created by PhpStorm.
 * User: Anuradha
 * Date: 9/16/2018
 * Time: 9:34 AM
 */
class addCourse_model extends Model
{
    function __construct()
    {
        parent::__construct();
    }

    function addNewCourse(){
        try {
            $course_code=$_POST['course_code'];
            $course_name = $_POST['course_name'];
            $course_fee = $_POST['course_fee'];

            $courseData = array(
                'course_ID'=>$course_code,
                'course_name'=>$course_name,
                'coursefee'=>$course_fee
            );

            $this->db->beginTransaction();
            $this->db->insert('course',$courseData);
            $this->db->commit();
        }
        catch (Exception $e) {
            echo $e;
            $this->db->rollback();
        }
    }


}