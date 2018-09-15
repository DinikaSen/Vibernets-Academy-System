<?php
/**
 * Created by PhpStorm.
 * User: DiniX
 * Date: 15-Sep-18
 * Time: 12:30 AM
 */

class login extends Controller
{

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $this->view->render('login/index',true);
    }

    function loginDo()
    {
        $this->model->loginDo();
    }

    function logout(){
        Session::set("loggedIn","false");
        //Session::destroy();
        header('Location:'.URL.'index.php');
    }

}