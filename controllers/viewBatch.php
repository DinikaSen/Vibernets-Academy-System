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
    }

    function index()
    {
        $this->view->batches= $this->model->getBatchDetails();
        $this->view->render('viewBatch/index');
    }
}