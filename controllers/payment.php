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
    }

    function index()
    {
        $this->view->render('payment/index');
    }
}