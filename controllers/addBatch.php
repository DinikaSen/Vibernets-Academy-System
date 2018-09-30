<?php

/**
 * Created by PhpStorm.
 * User: Anuradha
 * Date: 9/22/2018
 * Time: 7:59 AM
 */
class addBatch extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $this->view->courseCodes= $this->model->getCourseCodes();
        $this->view->render('addBatch/index');
    }
    function addNewBatch(){
        $this->model->addNewBatch();
        $this->index();
    }

}