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
use components\datamapper\model\User;

/**
 * Class RoleMapper
 * @package components\datamapper\mapper
 */
class RoleMapper extends AbstractMapper
{

    const MODEL_CLASS_NAME = 'components\datamapper\model\Role';

    /**
     * Поиск модели по id
     * @param $id
     * @return Role
     */
    public function findOne($id): Role
    {
        if ($roleModel = $this->identity->get(self::MODEL_CLASS_NAME, $id)) {
            return $roleModel;
        }

        $rowRoles = $this->adapter->selectOne($id);

        if ($rowRoles != null) {
            $roleModel = $this->mapToRole($rowRoles);
            $this->identity->add($roleModel);
            return $roleModel;
        } else {
            throw new \Error('user not found');
        }

    }

    /**
     * Создаем объект модели Role
     * @param array $roles
     * @return Role
     */
    private function mapToRole(array $roles): Role
    {
        return new Role($roles);
    }
}