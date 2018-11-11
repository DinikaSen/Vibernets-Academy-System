<?php

/**
 * Created by PhpStorm.
 * User: DiniX
 * Date: 11-Nov-18
 * Time: 12:42 AM
 */
class viewIncome extends Controller
{

    function __construct()
    {
        parent::__construct();
        Session::init();
        $loggedIn = Session::get('loggedIn');
        $adminName = Session::get('name');
        if($loggedIn != "true"){
            Session::destroy();
            $message = "You are signed out. \\nSign in again";
            echo ("<script type = 'text/javascript' > alert('$message');window . location = \"".URL."login/index\";</script>");
        }
    }

    function index()
    {
        $this->view->render('viewIncome/index');
    }

    function getTransactions(){
        $this->view->transactions = $this->model->getTransactions();
        $this->view->period = $this->model->getPeriod();
        $this->view->payment = $this->model->getFeesPayments();
        $this->view->admission = $this->model->getAdmissionPayments();
        $this->view->render('viewIncome/showIncome');
    }

    function printPage(){
        $this->view->transactions = $this->model->getTransactions();
        $this->view->period = $this->model->getPeriod();
        $this->view->payment = $this->model->getFeesPayments();
        $this->view->admission = $this->model->getAdmissionPayments();
        $this->view->render('viewIncome/printable',true);

    }

}