<?php

/**
 * Created by PhpStorm.
 * User: DiniX
 * Date: 16-Sep-18
 * Time: 8:07 PM
 */
class payment_model extends Model
{
    function __construct()
    {
        parent::__construct();
    }

    /* std_ID int,
    course_ID varchar(30),
    batch_No varchar(30),
    amount float not null,
    date_paid date not null*/

    function getPaymentDetails(){
        $student_ID=$_POST['studentID'];
        $course_ID=$_POST['courseID'];
        $stmt= $this->db->prepare("SELECT * FROM payment WHERE course_ID =:course_ID and std_ID =:student_ID");
        $stmt->execute(array(
            ':course_ID'=>$course_ID,
            ':student_ID'=>$student_ID
        ));
        $count=$stmt->rowCount();
        if($count){
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