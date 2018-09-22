<?php

/**
 * Created by PhpStorm.
 * User: Anuradha
 * Date: 9/22/2018
 * Time: 11:04 AM
 */
class viewBatch_model extends Model
{
    function __construct()
    {
        parent::__construct();
    }

    function getBatchDetails()
    {
        $stmt= $this->db->prepare("SELECT * FROM batch");
        $stmt->execute();
        return $stmt->fetchAll();
    }
    function editBatch($course_ID, $batch_No){
        $stmt= $this->db->prepare("SELECT * FROM batch WHERE course_ID =:course_ID and batch_No =:batch_No");
        $stmt->execute(array(
            ':course_ID'=>$course_ID,
            ':batch_No'=>$batch_No
        ));
        $count1=$stmt->rowCount();
        if($count1){
            return $stmt->fetchAll();
        }
    }

    function updateBatch(){
        $course_ID=$_POST['course_code'];
        $batch_No = $_POST['batch_No'];
        $start_date = $_POST['start_date'];
        $end_date = $_POST['end_date'];
        $old_batch_No= $_POST['old_batch_No'];

        try{
            $this->db->beginTransaction();
            $stmt = $this->db->prepare('UPDATE batch SET course_ID=:course_ID, batch_No=:batch_No,start_date=:start_date,end_date=:end_date
 WHERE course_ID=:course_ID and batch_No=:old_batch_No');
            $stmt->execute(array(':course_ID'=>$course_ID,
                ':batch_No'=> $batch_No,
                ':start_date'=>$start_date,
                ':end_date'=>$end_date,
                ':old_batch_No'=> $old_batch_No));
            $this->db->commit();
        }
        catch(PDOException $e)
        {
            $this->db->rollBack();

        }
    }

}