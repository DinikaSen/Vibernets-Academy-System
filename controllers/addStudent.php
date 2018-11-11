<?php

/**
 * Created by PhpStorm.
 * User: Anuradha
 * Date: 9/9/2018
 * Time: 6:19 PM
 */
class addStudent extends Controller
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
        $this->view->getStudentID = $this->model->getNextID();
        $this->view->render('addStudent/index');
    }

    function addNewStudent(){
        $this->model->addNewStudent();
        $this->index();

    }


}