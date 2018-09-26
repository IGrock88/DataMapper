<?php
/**
 * Created by PhpStorm.
 * User: igroc
 * Date: 25.09.2018
 * Time: 10:38
 */

namespace components\datamapper\mapper;



use components\datamapper\identity\IdentityMap;
use components\datamapper\model\BaseModel;
use components\datamapper\adapter\AbstractAdapter;


abstract class AbstractMapper
{
    protected $adapter;
    protected $identity;

    public function __construct(AbstractAdapter $adapter, IdentityMap $identity)
    {
        $this->adapter = $adapter;
        $this->identity = $identity;
    }

    abstract public function findOne($id);

}