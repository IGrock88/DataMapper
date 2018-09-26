<?php
/**
 * Created by PhpStorm.
 * User: igroc
 * Date: 25.09.2018
 * Time: 15:55
 */

namespace components\datamapper\mapper;


use components\datamapper\model\User;

class UserMapper extends AbstractMapper
{
    const MODEL_CLASS_NAME = 'components\datamapper\model\User';

    public function findOne($id): User
    {
        $rowUser = $this->adapter->selectOne($id);

        if ($userModel = $this->identity->get(self::MODEL_CLASS_NAME, $id)){
            return $userModel;
        }

        if ($rowUser != null){
            $userModel = $this->mapToUser($rowUser);
            $this->identity->add($userModel);
            echo 'db';
            return $userModel;
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