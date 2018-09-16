<?php

/**
 * Created by PhpStorm.
 * User: DiniX
 * Date: 15-Sep-18
 * Time: 12:52 AM
 */
class adminHome extends Controller
{

    function __construct()
    {
        parent::__construct();
        Session::init();
        $loggedIn = Session::get('loggedIn');
        $adminName = Session::get('name');
        if($loggedIn == "true"){
            $this->view->render('adminHome/index');
            $this->view->adminName = $adminName;
        }
        else{
            Session::destroy();
            $message = "You are signed out. \\nSign in again";
            echo ("<script type = 'text/javascript' > alert('$message');window . location = \"".URL."login/index\";</script>");
            //header('location:'.URL.'login/index');
        }
    }

    function index()
    {
        //$this->view->render('adminHome/index');
    }

}