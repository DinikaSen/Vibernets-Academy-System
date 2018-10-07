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
    private $batch_No;
    private $amount_paid;

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

    function getPostData(){
        $this->student_ID=$_POST['studentID'];
        $this->course_ID=$_POST['courseID'];
    }

    function getStudentDetails(){
        $stmt = $this->db->prepare("SELECT std_ID,first_name,last_name,registrationPaid,paymentNote FROM student WHERE std_ID=:student_ID");
        $stmt->execute(array(
            ':student_ID'=>$this->student_ID));
        $count=$stmt->rowCount();
        if($count == 1)
        {
            return $stmt->fetchAll();
        }
        else{
            $message = "Sorry,Invalid student ID";
            //echo "<script type='text/javascript'>alert('$message');window.location = \"../payment/index\";</script>";
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

    function makePayment(){
        /*payment_ID int NOT NULL AUTO_INCREMENT,
    std_ID int,
    course_ID varchar(30),
    batch_No varchar(30),
    amount float not null,
    date_paid date not null
        */
        $this->student_ID=$_POST['studentID'];
        $this->course_ID=$_POST['courseID'];
        $this->amount_paid=$_POST['amount_paid'];
        $this->batch_No=$_POST['batch_No'];
        //amount_paid
        try {
            $paymentData = array(
                'std_ID' => $this->student_ID,
                'course_ID' => $this->course_ID,
                'batch_No' => $this->batch_No,
                'amount' => $this->amount_paid,
                'date_paid' => getdate()
            );

            $this->db->beginTransaction();
            $this->db->insert('payment', $paymentData);
            $this->db->commit();

        } catch (Exception $e) {
            echo $e;
            $this->db->rollback();
        }
    }

    function getCourseDetails(){
        $stmt = $this->db->prepare("SELECT course_ID,course_name,coursefee FROM course WHERE course_ID =:course_ID");
        $stmt->execute(array(
            ':course_ID'=>$this->course_ID));
        $count=$stmt->rowCount();
        if($count == 1)
        {
            return $stmt->fetchAll();
        }

    }

}