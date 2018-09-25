<?php
/**
 * Created by PhpStorm.
 * User: igroc
 * Date: 25.09.2018
 * Time: 16:50
 */

namespace components\datamapper\adapter;


class RoleAdapter extends AbstractAdapter
{

    private $tableName = 'user_role';

    public function selectOne($id)
    {
        $this->db->connect();
        $result = $this->db->getRows("select * from $this->tableName where id_role = ?", [$id])[0];
        return $result;
    }
}