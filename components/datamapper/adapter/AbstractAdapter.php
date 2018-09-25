<?php
/**
 * Created by PhpStorm.
 * User: igroc
 * Date: 25.09.2018
 * Time: 16:49
 */

namespace components\datamapper\adapter;


use components\db\AbstractDb;

abstract class AbstractAdapter
{
    protected $db;

    public function __construct(AbstractDb $db)
    {
        $this->db = $db;
    }

    abstract public function selectOne($id);

}