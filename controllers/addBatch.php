<?php

/**
 * Created by PhpStorm.
 * User: Anuradha
 * Date: 9/22/2018
 * Time: 7:59 AM
 */
class addBatch extends Controller
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
        $this->view->courseCodes= $this->model->getCourseCodes();
        $this->view->render('addBatch/index');
    }
    function addNewBatch(){
        $this->model->addNewBatch();
        $this->index();
    }

}