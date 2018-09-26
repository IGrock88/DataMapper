<?php
/**
 * Created by PhpStorm.
 * User: igroc
 * Date: 25.09.2018
 * Time: 16:49
 */

namespace components\datamapper\adapter;


use components\db\AbstractDb;

/**
 * Class AbstractAdapter
 * @package components\datamapper\adapter
 */
abstract class AbstractAdapter
{
    /**
     * @var AbstractDb
     */
    protected $db;

    /**
     * AbstractAdapter constructor.
     * @param AbstractDb $db
     */
    public function __construct(AbstractDb $db)
    {
        $this->db = $db;
    }

    /**
     * Получение строки из базы данных по id
     * @param $id
     * @return mixed
     */
    abstract public function selectOne($id);

}