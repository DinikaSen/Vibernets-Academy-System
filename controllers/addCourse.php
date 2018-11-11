<?php

/**
 * Created by PhpStorm.
 * User: Anuradha
 * Date: 9/16/2018
 * Time: 9:33 AM
 */
class addCourse extends Controller
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
        $this->view->render('addCourse/index');
    }
    function addNewCourse(){
        $this->model->addNewCourse();
        $this->index();

    }
}