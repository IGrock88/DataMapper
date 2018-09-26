<?php
/**
 * Created by PhpStorm.
 * User: igroc
 * Date: 25.09.2018
 * Time: 16:50
 */

namespace components\datamapper\adapter;


/**
 * Class UserAdapter
 * @package components\datamapper\adapter
 */
class UserAdapter extends AbstractAdapter
{
    /**
     * @var string
     */
    private $tableName = 'user';

    /**
     * @param $id
     * @return mixed
     */
    public function selectOne($id)
    {
        $this->db->connect();
        $result = $this->db->getRows("select * from $this->tableName where id = ?", [$id])[0];
        return $result;
    }
}