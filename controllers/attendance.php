<?php

/**
 * Created by PhpStorm.
 * User: Anuradha
 * Date: 10/14/2018
 * Time: 8:23 PM
 */
class attendance extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $this->view->course_batch = $this->model->getCourse_batch_combination();
        $this->view->render('attendance/index');
    }

}