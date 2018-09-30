<?php

/**
 * Created by PhpStorm.
 * User: Anuradha
 * Date: 9/22/2018
 * Time: 8:06 AM
 */
class addBatch_model extends Model
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

    function getCourseDetails()
    {
        $stmt = $this->db->prepare("SELECT course_ID FROM course");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function addNewBatch()
    {
        try {
            $course_ID = $_POST['course_code'];
            $batch_No = $_POST['batch_No'];
            $start_date = $_POST['start_date'];
            $end_date = $_POST['end_date'];

            $stmt = $this->db->prepare("SELECT * FROM batch WHERE course_ID=:course_ID AND batch_No=:batch_No");
            $stmt->execute(array(
                ':course_ID' => $course_ID,
                ':batch_No'=>$batch_No));
            $count = $stmt->rowCount();
            if ($count != 0) {
                $message = "Sorry,There is an existing batch for the selected course";
                echo "<script type='text/javascript'>alert('$message');window.location = \"../addBatch/index\";</script>";
            } else {
                $batchData = array(
                    'course_ID' => $course_ID,
                    'batch_No' => $batch_No,
                    'start_date' => $start_date,
                    'end_date' => $end_date
                );

                $this->db->beginTransaction();
                $this->db->insert('batch', $batchData);
                $this->db->commit();
            }

        } catch (Exception $e) {
            echo $e;
            $this->db->rollback();
        }
    }

}