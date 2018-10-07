<?php

/**
 * Created by PhpStorm.
 * User: DiniX
 * Date: 16-Sep-18
 * Time: 8:07 PM
 */
class payment_model extends Model
{
    private $student_ID;
    private $course_ID;

    function __construct()
    {
        parent::__construct();
    }

    function getCourseCodes()
    {
        $stmt = $this->db->prepare("SELECT course_ID,deadline FROM course");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function getStudentDetails(){
        $this->student_ID=$_POST['studentID'];
        $this->course_ID=$_POST['courseID'];
        $stmt = $this->db->prepare("SELECT first_name,last_name,registrationPaid,paymentNote FROM student WHERE std_ID=:student_ID");
        $stmt->execute(array(
            ':student_ID'=>$this->student_ID));
        $count=$stmt->rowCount();
        if($count == 1)
        {
            return $stmt->fetchAll();
        }
        else{
            $message = "Sorry,Invalid student ID";
            echo "<script type='text/javascript'>alert('$message');window.location = \"../payment/index\";</script>";
        }
    }

    function getPaymentDetails(){
        $stmt= $this->db->prepare("SELECT * FROM payment WHERE course_ID =:course_ID and std_ID =:student_ID");
        $stmt->execute(array(
            ':course_ID'=>$this->course_ID,
            ':student_ID'=>$this->student_ID
        ));
        return $stmt->fetchAll();
    }

    /*course_name varchar(200),
    coursefee float,*/

    function getCourseDetails(){
        $stmt = $this->db->prepare("SELECT course_name,coursefee FROM student WHERE std_ID=:student_ID");
        $stmt->execute(array(
            ':student_ID'=>$this->student_ID));
        $count=$stmt->rowCount();
        if($count == 1)
        {
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