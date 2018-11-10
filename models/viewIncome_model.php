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

//SELECT * FROM Product_sales
//WHERE From_date between '2013-01-03'
//AND '2013-01-09'

//    function getIncomes(){
//        $this->fromDate=$_POST['fromDate'];
//        $this->toDate=$_POST['toDate'];
//        if($this->fromDate > $this->toDate){
//            $message = "Date period is not properly defined";
//            echo "<script type='text/javascript'>alert('$message');window.location = \"../viewIncome/index\";</script>";
//
//        }
//        else {
//            $stmt = $this->db->prepare("SELECT * FROM incomeexpense WHERE transaction_type = :type and transaction_date between :fromDate and :toDate");
//            $stmt->execute(array(
//                ':fromDate' => $this->fromDate,
//                ':toDate' => $this->toDate,
//                ':type' => 'Income'
//            ));
//            return $stmt->fetchAll();
//        }
//    }

//    function getExpenses(){
//            $stmt = $this->db->prepare("SELECT * FROM incomeexpense WHERE transaction_type = :type and transaction_date between :fromDate and :toDate");
//            $stmt->execute(array(
//                ':fromDate' => $this->fromDate,
//                ':toDate' => $this->toDate,
//                ':type' => 'Expense'
//            ));
//            return $stmt->fetchAll();
//
//    }

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
        //SELECT sum(amount) FROM payment WHERE date_paid between '2018-10-12' and '2018-11-30'
        $stmt->execute(array(
            ':fromDate' => $this->fromDate,
            ':toDate' => $this->toDate
        ));
        //$row = $stmt->fetchAll();
        //$sum = $row->value_sum;
        return $stmt->fetchAll();
    }

    function getPeriod(){
        $period = array('from'=>$this->fromDate,
            'to'=>$this->toDate);
        return $period;
    }

}