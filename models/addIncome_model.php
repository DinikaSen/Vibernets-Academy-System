<?php

/**
 * Created by PhpStorm.
 * User: DiniX
 * Date: 11-Nov-18
 * Time: 12:08 AM
 */
class addIncome_model extends Model
{
    function __construct()
    {
        parent::__construct();
    }

    function addToDB(){
        try {
            $transaction=$_POST['transaction'];
            $transDate = $_POST['transDate'];
            $amount = $_POST['amount'];
            $description=$_POST['description'];
            $incomeData = array(
                'transaction_type'=>$transaction,
                'description'=>$description,
                'amount'=>$amount,
                'transaction_date'=>$transDate
            );

            $this->db->beginTransaction();
            $this->db->insert('incomeexpense',$incomeData);
            $this->db->commit();
            $message = "Data added successfully...!!";
            echo "<script type='text/javascript'>alert('$message');window.location = \"../addIncome/index\";</script>";
        }

        catch (Exception $e) {
            echo $e;
            $this->db->rollback();
        }
    }

}