<?php

/**
 * Created by PhpStorm.
 * User: Anuradha
 * Date: 9/16/2018
 * Time: 11:39 AM
 */
class viewCourse_model extends Model
{
    function __construct()
    {
        parent::__construct();
    }

    function getCourseDetails(){
        $stmt= $this->db->prepare("SELECT * FROM course");
        $stmt->execute();
        return $stmt->fetchAll();
    }
}