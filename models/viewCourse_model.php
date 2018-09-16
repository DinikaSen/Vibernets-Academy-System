<?php

/**
 * Created by PhpStorm.
 * User: Anuradha
 * Date: 9/16/2018
 * Time: 11:39 AM
 */
class viewCourse_model extends Model
{
    function __construct()
    {
        parent::__construct();
    }

    function getCourseDetails(){
        $stmt= $this->db->prepare("SELECT * FROM course");
        $stmt->execute();
        return $stmt->fetchAll();
    }
    function getStoredDetails($courseID){
        $stmt= $this->db->prepare("SELECT * FROM course WHERE course_ID =:course_ID");
        $stmt->execute(array(
            ':course_ID'=>$courseID
        ));
        $count1=$stmt->rowCount();
        if($count1){
            return $stmt->fetchAll();
        }
    }

    function updateCourse(){

        $course_ID=$_POST['course_code'];
        $course_name = $_POST['course_name'];
        $coursefee = $_POST['course_fee'];
        $deadline = $_POST['course_deadline'];
        try{
            $this->db->beginTransaction();
            $stmt = $this->db->prepare('UPDATE course SET course_name=:course_name, coursefee=:coursefee,deadline=:deadline WHERE course_ID=:course_ID');
            $stmt->execute(array(':course_ID'=>$course_ID,
                ':course_name'=> $course_name,
                ':coursefee'=>$coursefee,
                ':deadline'=>$deadline));
        $this->db->commit();
    }
    catch(PDOException $e)
    {
        $this->db->rollBack();

    }

    }
}