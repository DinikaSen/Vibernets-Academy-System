<?php

/**
 * Created by PhpStorm.
 * User: Anuradha
 * Date: 9/22/2018
 * Time: 10:52 AM
 */
class enroll extends Controller
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
        $this->view->isChecked = false;
        $this->view->courseCodes = $this->model->getCourseCodes();
        $this->view->render('enroll/index');
    }

    function getStudentAndCourseDetail()
    {
        $this->view->isChecked = true;
        $this->view->Studentdetails = $this->model->getStudentDetails();
        $this->view->Coursedetails = $this->model->getCourseDetails();
        $this->view->BatchNumbers = $this->model->getBatchDetails();
        $this->view->render('enroll/index');
    }

    function getEnrolled()
    {
        $this->model->getEnrolled();
        $this->index();
    }
}