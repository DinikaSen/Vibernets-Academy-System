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
    function getStudents()
    {
        $this->view->students=$this->model->getStudents();
        $this->view->render('attendance/sheet');
    }
    function markAttendance($details){
        $details=explode(",",$details);
        $this->view->markAttendance = $this->model->markAttendance($details[0],$details[1],$details[2]);
        $this->view->studentDetails = $this->model->getStudentDetails($details[0],$details[1],$details[2]);
        $this->view->render('attendance/mark');
    }
    function addToSheet(){
        $this->model->addToSheet();
        $this->index();
    }
}