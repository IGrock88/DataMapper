<?php
/**
 * Created by PhpStorm.
 * User: igroc
 * Date: 25.09.2018
 * Time: 15:49
 */

namespace components\datamapper\model;


/**
 * Class Role
 * @package components\datamapper\model
 */
class Role extends BaseModel
{

    /**
     * @property integer $id_role
     * @property string $role
     */
    protected $safeProperties = ['id', 'role'];

}