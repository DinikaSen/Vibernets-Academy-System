<?php

/**
 * Created by PhpStorm.
 * User: Anuradha
 * Date: 9/22/2018
 * Time: 11:04 AM
 */
class viewBatch_model extends Model
{
    function __construct()
    {
        parent::__construct();
    }

    function getBatchDetails()
    {
        $stmt= $this->db->prepare("SELECT * FROM batch");
        $stmt->execute();
        return $stmt->fetchAll();
    }

}