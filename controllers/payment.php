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
        $this->view->receiptDetails = $this->model->makePayment();
        $this->view->render('payment/receipt',true);
    }
}