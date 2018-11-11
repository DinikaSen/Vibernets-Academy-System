<?php

/**
 * Created by PhpStorm.
 * User: DiniX
 * Date: 11-Nov-18
 * Time: 12:45 AM
 */
class viewIncome_model extends Model
{
    private $fromDate;
    private $toDate;

    function __construct()
    {
        parent::__construct();
    }

    function getTransactions(){
        $this->fromDate=$_POST['fromDate'];
        $this->toDate=$_POST['toDate'];
        if($this->fromDate > $this->toDate){
            $message = "Date period is not properly defined";
            echo "<script type='text/javascript'>alert('$message');window.location = \"../viewIncome/index\";</script>";

        }
        else {
            $stmt = $this->db->prepare("SELECT * FROM incomeexpense WHERE transaction_date between :fromDate and :toDate ORDER BY transaction_date ASC");
            $stmt->execute(array(
                ':fromDate' => $this->fromDate,
                ':toDate' => $this->toDate
            ));
            return $stmt->fetchAll();
        }
    }


    function getFeesPayments(){
        $stmt = $this->db->prepare("SELECT sum(amount) FROM payment WHERE date_paid between :fromDate and :toDate");
        $stmt->execute(array(
            ':fromDate' => $this->fromDate,
            ':toDate' => $this->toDate
        ));
        return $stmt->fetchAll();
    }

    function getAdmissionPayments(){
        $stmt = $this->db->prepare("SELECT sum(amount) FROM admission WHERE date_paid between :fromDate and :toDate");
        $stmt->execute(array(
            ':fromDate' => $this->fromDate,
            ':toDate' => $this->toDate
        ));
        return $stmt->fetchAll();
    }

    function getPeriod(){
        $period = array('from'=>$this->fromDate,
            'to'=>$this->toDate);
        return $period;
    }

}