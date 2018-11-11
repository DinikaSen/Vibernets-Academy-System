<?php

/**
 * Created by PhpStorm.
 * User: Anuradha
 * Date: 10/14/2018
 * Time: 8:25 PM
 */
class attendance_model extends Model
{
    function __construct()
    {
        parent::__construct();
    }

    function getCourse_batch_combination()
    {
        $stmt = $this->db->prepare("select * from course natural join batch");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function getStudents()
    {
        $course_batch = $_POST['course_batch'];
        $array = explode("/", $course_batch);
        $course = $array[0];
        $batch = $array[1];
        $stmt = $this->db->prepare("select std_ID,first_name,last_name,course_ID,batch_No from take natural join student WHERE 
      take.course_ID=:course_id and take.batch_No=:batch_no");
        $stmt->execute(array(
            ':course_id' => $course,
            ':batch_no' => $batch
        ));
        //return $stmt->fetchAll();
        $allStudentArray =array();
        $count = $stmt->rowCount();
        if($count > 0){
            foreach ($stmt->fetchAll() as $row){
                $stmt1 = $this->db->prepare("select * from take natural join attendance WHERE 
            take.std_ID=:std_ID and take.course_ID=:course_ID and take.batch_No=:batch_No");
                $stmt1->execute(array(
                    ':std_ID' => $row['std_ID'],
                    ':course_ID' => $row['course_ID'],
                    ':batch_No' => $row['batch_No']
                ));
                $totalDays = $stmt1->rowCount();
                $stmt2 = $this->db->prepare("select * from take natural join attendance WHERE 
      take.std_ID=:std_ID and take.course_ID=:course_ID and take.batch_No=:batch_No and attendance.attendance=:attendance");
                $stmt2->execute(array(
                    ':std_ID' => $row['std_ID'],
                    ':course_ID' => $row['course_ID'],
                    ':batch_No' => $row['batch_No'],
                    ':attendance' => 1
                ));
                $presentDays = $stmt2->rowCount();
                if($totalDays == 0){
                    $percentage = 0;
                }else{
                    $percentage = $presentDays/$totalDays*100;
                }

                $studentArray = array(
                    'std_ID' => $row['std_ID'],
                    'course_ID' => $row['course_ID'],
                    'batch_No' => $row['batch_No'],
                    'first_name' => $row['first_name'],
                    'last_name' => $row['last_name'],
                    'percentage' => $percentage
                );
                array_push($allStudentArray,$studentArray);
            }
        }
        return $allStudentArray;
    }

    function markAttendance($std_ID,$course_ID,$batch_No)
    {
        $stmt = $this->db->prepare("select * from attendance where std_ID=:std_ID and 
        course_ID=:course_ID and batch_No=:batch_No");
        $stmt->execute(array(
            ':std_ID' => $std_ID,
            ':course_ID' => $course_ID,
            ':batch_No' => $batch_No
        ));
        return $stmt->fetchAll();
    }

    function getStudentDetails($std_ID,$course_ID,$batch_No){
        $stmt = $this->db->prepare("SELECT std_ID,first_name,last_name,course_ID,batch_No FROM student natural join take WHERE std_ID=:std_ID 
        and course_ID=:course_ID and batch_No=:batch_No");
        $stmt->execute(array(
            ':std_ID'=>$std_ID,
            ':course_ID'=>$course_ID,
            ':batch_No'=>$batch_No));
        $count=$stmt->rowCount();
        if($count == 1)
        {
            return $stmt->fetchAll();
        }
        else{
            $message = "Sorry,Invalid student ID/Course ID/Bathc No";
            echo "<script type='text/javascript'>alert('$message');window.location = \"../attendance/index\";</script>";
        }
    }

    function addToSheet(){
        $std_ID=$_POST['std_ID'];
        $course_ID=$_POST['course_ID'];
        $batch_No=$_POST['batch_No'];
        $class_date = $_POST['date'];
        $att_mark = $_POST['attendance'];
        if($att_mark == 'yes'){
            $attendance = 1;
        }
        elseif ($att_mark == 'no'){
            $attendance = 0;
        }
        $stmt = $this->db->prepare("select * from attendance where std_ID=:std_ID and 
        course_ID=:course_ID and batch_No=:batch_No and class_date=:class_date");
        $stmt->execute(array(
            ':std_ID' => $std_ID,
            ':course_ID' => $course_ID,
            ':batch_No' => $batch_No,
            ':class_date'=>$class_date
        ));
        $count = $stmt->rowCount();
        if ($count == 0) {
            try {
                $attendanceData = array(
                    'std_ID' => $std_ID,
                    'course_ID' => $course_ID,
                    'batch_No' => $batch_No,
                    'class_date' => $class_date,
                    'attendance' => $attendance
                );
                $this->db->beginTransaction();
                $this->db->insert('attendance', $attendanceData);
                $this->db->commit();
            } catch (Exception $e) {
                echo $e;
                $this->db->rollback();
            }
        } else if($count == 1) {
            try {
                $this->db->beginTransaction();
                $stmt = $this->db->prepare('UPDATE attendance SET  std_ID=:std_ID,course_ID=:course_ID,batch_No=:batch_No,class_date=:class_date,
            attendance=:attendance WHERE course_ID=:course_ID and batch_No=:batch_No and std_ID=:std_ID and class_date=:class_date');
                $stmt->execute(array(':course_ID' => $course_ID,
                    ':batch_No' => $batch_No,
                    ':class_date' => $class_date,
                    ':std_ID' => $std_ID,
                    ':attendance' => $attendance));
                $this->db->commit();
            } catch (Exception $e) {
                echo $e;
                $this->db->rollback();
            }
        }else{
            $message = "Sorry, Error occured";
            echo "<script type='text/javascript'>alert('$message');window.location = \"../attendance/index\";</script>";
        }
    }
}