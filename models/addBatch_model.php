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
    function getCourseCodes(){
        $stmt= $this->db->prepare("SELECT course_ID,deadline FROM course");
        $stmt->execute();
        return $stmt->fetchAll();
    }
    function getCourseDetails(){
        $stmt= $this->db->prepare("SELECT course_ID FROM course");
        $stmt->execute();
        return $stmt->fetchAll();
    }
    function addNewBatch(){
        try {
            $course_ID=$_POST['course_code'];
            $batch_No = $_POST['batch_No'];
            $start_date = $_POST['start_date'];
            $end_date = $_POST['end_date'];

            $batchData = array(
                'course_ID'=>$course_ID,
                'batch_No'=>$batch_No,
                'start_date'=>$start_date,
                'end_date'=>$end_date
            );

            $this->db->beginTransaction();
            $this->db->insert('batch',$batchData);
            $this->db->commit();
        }
        catch (Exception $e) {
            echo $e;
            $this->db->rollback();
        }
    }

}