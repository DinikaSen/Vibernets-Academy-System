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
    }

    function index()
    {
        $this->view->render('enroll/index');
    }
}