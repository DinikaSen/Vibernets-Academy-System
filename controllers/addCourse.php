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