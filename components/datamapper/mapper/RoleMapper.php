<?php
/**
 * Created by PhpStorm.
 * User: igroc
 * Date: 25.09.2018
 * Time: 16:24
 */

namespace components\datamapper\mapper;


use components\datamapper\model\BaseModel;
use components\datamapper\model\Role;

class RoleMapper extends AbstractMapper
{

    public function findOne($id): BaseModel
    {
        // TODO: Implement findOne() method.
    }

    private function mapToRole(array $role): Role
    {
        return new Role($role);
    }
}