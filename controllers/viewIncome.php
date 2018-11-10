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
    }

    function index()
    {
        $this->view->render('viewIncome/index');
    }

    function getTransactions(){
        $this->view->transactions = $this->model->getTransactions();
        $this->view->period = $this->model->getPeriod();
        $this->view->payment = $this->model->getFeesPayments();
        $this->view->render('viewIncome/showIncome');
    }

    function printPage(){
        $this->view->transactions = $this->model->getTransactions();
        $this->view->period = $this->model->getPeriod();
        $this->view->payment = $this->model->getFeesPayments();
        $this->view->render('viewIncome/printable',true);

    }

}