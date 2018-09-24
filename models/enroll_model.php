<?php

/**
 * Created by PhpStorm.
 * User: Anuradha
 * Date: 9/22/2018
 * Time: 10:53 AM
 */
class enroll_model extends Model
{
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

    function getStudentDetails()
    {
        $std_ID = $_POST['student_ID'];

        $stmt = $this->db->prepare("SELECT * FROM student WHERE std_ID=:std_ID");
        $stmt->execute(array(
            ':std_ID' => $std_ID));
        $count=$stmt->rowCount();
        if($count == 1)
        {
            return $stmt->fetchAll();
        }
        else{
            $message = "Sorry,Invalid student ID";
            echo "<script type='text/javascript'>alert('$message');window.location = \"../enroll/index\";</script>";
        }
    }

    function getCourseDetails()
    {
        $course_ID = $_POST['course_ID'];
        $stmt = $this->db->prepare("SELECT * FROM course WHERE course_ID=:course_ID");
        $stmt->execute(
            array(
                ':course_ID' => $course_ID)
        );
        return $stmt->fetchAll();
    }

    function getBatchDetails()
    {
        $course_ID = $_POST['course_ID'];
        $stmt = $this->db->prepare("SELECT * FROM batch WHERE course_ID=:course_ID");
        $stmt->execute(
            array(
                ':course_ID' => $course_ID)
        );
        return $stmt->fetchAll();
    }

    function getEnrolled()
    {
                try {
                    $course_ID=$_POST['course_id'];
                    $batch_No = $_POST['batch_No'];
                    $student_ID = $_POST['student_id'];
                    $course_fee = $_POST['course_fee'];
                    $discount = $_POST['discount'];
                    if($discount == null){
                        $discount =0;
                    }
                    $fee = ($course_fee*(100-$discount))/100;

                    $stmt = $this->db->prepare("SELECT * FROM take WHERE course_ID=:course_ID AND batch_No=:batch_No AND std_ID=:std_ID");
                    $stmt->execute(array(
                        ':course_ID' => $course_ID,
                        ':batch_No'=> $batch_No,
                        'std_ID'=>$student_ID));
                    $count=$stmt->rowCount();
                    if($count != 0)
                    {
                        $message = "Sorry,This Student has attended to the selected batch";
                        echo "<script type='text/javascript'>alert('$message');window.location = \"../enroll/index\";</script>";
                    }
                    else {

                        $takeData = array(
                            'std_ID' => $student_ID,
                            'course_ID' => $course_ID,
                            'batch_No' => $batch_No,
                            'fee' => $fee
                        );

                        $this->db->beginTransaction();
                        $this->db->insert('take', $takeData);
                        $stmt = $this->db->prepare("SELECT * FROM batch WHERE course_ID=:course_ID and batch_No=:batch_No");
                        $stmt->execute(array(
                            ':course_ID' => $course_ID,
                            ':batch_No' => $batch_No));
                        $array = $stmt->fetchAll();
                        $student_count = 0;
                        foreach ($array as $row) {
                            $student_count = $row['student_count'];
                        }
                        $student_count = $student_count + 1;
                        $st = $this->db->prepare('UPDATE batch SET student_count=:student_count WHERE course_ID=:course_ID and batch_No=:batch_No');
                        $st->execute(array(
                            ':student_count' => $student_count,
                            ':course_ID' => $course_ID,
                            ':batch_No' => $batch_No));
                        $this->db->commit();
                    }
                }
                catch (Exception $e) {
                    echo $e;
                    $this->db->rollback();
                }
    }
}