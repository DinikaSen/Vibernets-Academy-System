<?php

/**
 * Created by PhpStorm.
 * User: DiniX
 * Date: 10-Nov-18
 * Time: 9:36 PM
 */
class addIncome extends Controller
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
        $this->view->render('addIncome/index');
    }

    function addToDB(){
        $this->model->addToDB();
        $this->index();
    }

}