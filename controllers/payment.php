<?php

/**
 * Created by PhpStorm.
 * User: DiniX
 * Date: 16-Sep-18
 * Time: 9:08 PM
 */
class payment extends Controller
{

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $this->view->courseCodes = $this->model->getCourseCodes();
        $this->view->render('payment/index');
    }

    function getPaymentDetails(){
        $this->view->studentDetails = $this->model->getStudentDetails();
        $this->view->paymentDetails = $this->model->getPaymentDetails();
        //$this->view->courseName = $this->model->getCourseName();
        $this->view->render('payment/payments');
    }
}