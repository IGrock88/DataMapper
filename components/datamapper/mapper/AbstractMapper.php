<?php
/**
 * Created by PhpStorm.
 * User: igroc
 * Date: 25.09.2018
 * Time: 10:38
 */

namespace components\datamapper\mapper;



use components\datamapper\model\BaseModel;
use components\datamapper\adapter\AbstractAdapter;


abstract class AbstractMapper
{
    protected $adapter;

    public function __construct(AbstractAdapter $adapter)
    {
        $this->adapter = $adapter;
    }

    abstract public function findOne($id): BaseModel;

}