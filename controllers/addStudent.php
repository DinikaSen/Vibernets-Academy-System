<?php

/**
 * Created by PhpStorm.
 * User: Anuradha
 * Date: 9/9/2018
 * Time: 6:19 PM
 */
class addStudent extends Controller
{

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $this->view->getStudentID = $this->model->getNextID();
        $this->view->render('addStudent/index');
    }

    function addNewStudent(){
        $this->model->addNewStudent();
        $this->index();

    }


}