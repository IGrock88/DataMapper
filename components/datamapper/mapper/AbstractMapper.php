<?php
/**
 * Created by PhpStorm.
 * User: igroc
 * Date: 25.09.2018
 * Time: 10:38
 */

namespace components\datamapper\mapper;



use components\datamapper\identity\IdentityMap;
use components\datamapper\adapter\AbstractAdapter;


/**
 * Class AbstractMapper
 * @package components\datamapper\mapper
 */
abstract class AbstractMapper
{
    protected $adapter;

    protected $identity;

    /**
     * AbstractMapper constructor.
     * @param AbstractAdapter $adapter
     * @param IdentityMap $identity
     */
    public function __construct(AbstractAdapter $adapter, IdentityMap $identity)
    {
        $this->adapter = $adapter;
        $this->identity = $identity;
    }

    /**
     * Поиск модели по id
     * @param $id
     * @return mixed
     */
    abstract public function findOne($id);

}