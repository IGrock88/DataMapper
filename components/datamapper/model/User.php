<?php
/**
 * Created by PhpStorm.
 * User: igroc
 * Date: 25.09.2018
 * Time: 14:23
 */

namespace components\datamapper\model;


use components\App;
use components\datamapper\adapter\RoleAdapter;
use components\datamapper\mapper\RoleMapper;

/**
 * Class User
 * @package components\datamapper\model
 *
 * @property integer $id
 * @property string $login
 * @property string $name
 * @property string $pass
 * @property integer $id_role
 *
 */

class User extends BaseModel
{



    protected $safeProperties = ['id', 'login', 'name', 'id_role', 'role'];
    /**
     * @var Role $role
     */
    private $role = null;

    /**
     * @return Role|null
     */
    public function getRole()
    {
        if($this->role == null){
            $roleMapper = new RoleMapper(new RoleAdapter(App::$db), App::$identity);
            $this->role = $roleMapper->findOne($this->id_role);
        }
        return $this->role;

    }
}