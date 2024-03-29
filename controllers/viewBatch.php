<?php

/**
 * Created by PhpStorm.
 * User: Anuradha
 * Date: 9/22/2018
 * Time: 11:03 AM
 */
class viewBatch extends Controller
{
    function __construct()
    {
        parent::__construct();
        Session::init();
        $loggedIn = Session::get('loggedIn');
        $adminName = Session::get('name');
        if($loggedIn != "true"){
            Session::destroy();
            $message = "You are signed out. \\nSign in again";
            echo ("<script type = 'text/javascript' > alert('$message');window . location = \"".URL."login/index\";</script>");
        }
    }

    function index()
    {
        $this->view->batches= $this->model->getBatchDetails();
        $this->view->render('viewBatch/index');
    }
    function editBatch($batchDetail){
        $details=explode(",",$batchDetail);
        $this->view->batchDetails = $this->model->editBatch($details[0], $details[1]);
        $this->view->render('viewBatch/edit');
    }
    function updateBatch(){
        $this->model->updateBatch();
        $this->index();
    }
}