<?php
/**
 * Created by PhpStorm.
 * User: igroc
 * Date: 25.09.2018
 * Time: 15:55
 */

namespace components\datamapper\mapper;



use components\datamapper\model\BaseModel;
use components\datamapper\model\User;

class UserMapper extends AbstractMapper
{

    public function findOne($id): BaseModel
    {

        $rowUser = $this->adapter->selectOne($id);
        if ($rowUser != null){
            return $this->mapToUser($rowUser);
        }
        else {
            throw new \Error('user not found');
        }

    }

    private function mapToUser(array $rowUser): User
    {
        return new User($rowUser);
    }


}