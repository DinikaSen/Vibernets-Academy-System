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
    }

    function index()
    {
        $this->view->render('adminHome/index');
    }

}