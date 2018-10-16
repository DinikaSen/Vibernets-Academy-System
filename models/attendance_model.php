<?php

/**
 * Created by PhpStorm.
 * User: Anuradha
 * Date: 10/14/2018
 * Time: 8:25 PM
 */
class attendance_model extends Model
{
    function __construct()
    {
        parent::__construct();
    }

    function getCourse_batch_combination()
    {
        $stmt = $this->db->prepare("select * from course natural join batch");
        $stmt->execute();
        return $stmt->fetchAll();
    }


}