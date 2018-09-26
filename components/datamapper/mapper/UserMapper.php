<?php
/**
 * Created by PhpStorm.
 * User: igroc
 * Date: 25.09.2018
 * Time: 15:55
 */

namespace components\datamapper\mapper;


use components\datamapper\model\User;

/**
 * Class UserMapper
 * @package components\datamapper\mapper
 */
class UserMapper extends AbstractMapper
{
    const MODEL_CLASS_NAME = 'components\datamapper\model\User';

    /**
     * Поиск модели по id
     *
     * @param $id
     * @return User
     */
    public function findOne($id): User
    {
        $rowUser = $this->adapter->selectOne($id);

        if ($userModel = $this->identity->get(self::MODEL_CLASS_NAME, $id)){
            return $userModel;
        }

        if ($rowUser != null){
            $userModel = $this->mapToUser($rowUser);
            $this->identity->add($userModel);
            echo 'Запрос в БД<br>';
            return $userModel;
        }
        else {
            throw new \Error('user not found');
        }

    }

    /**
     * Создаем объект User
     * @param array $rowUser
     * @return User
     */
    private function mapToUser(array $rowUser): User
    {
        return new User($rowUser);
    }


}