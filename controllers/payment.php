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
        $this->model->getPostData();
        $this->view->studentDetails = $this->model->getStudentDetails();
        $this->view->takeDetails = $this->model->getTakeDetails();
        $this->view->paymentDetails = $this->model->getPaymentDetails();
        $this->view->courseDetails = $this->model->getCourseDetails();
        $this->view->render('payment/payments');
    }

    function makePayment(){
        /*$this->model->makePayment();
        $this->view->studentDetails = $this->model->getStudentDetails();
        $this->view->takeDetails = $this->model->getTakeDetails();
        $this->view->paymentDetails = $this->model->getPaymentDetails();
        $this->view->courseDetails = $this->model->getCourseDetails();
        $this->view->render('payment/payments');
        */
        $this->view->render('payment/receipt',true);
    }
}