<?php

/**
 * Created by PhpStorm.
 * User: Anuradha
 * Date: 9/16/2018
 * Time: 11:38 AM
 */
class viewCourse extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $this->view->courses= $this->model->getCourseDetails();
        $this->view->render('viewCourse/index');
    }

}