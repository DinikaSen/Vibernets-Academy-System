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