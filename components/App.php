<?php
/**
 * Created by PhpStorm.
 * User: igroc
 * Date: 25.09.2018
 * Time: 16:57
 */

namespace components;


use components\datamapper\adapter\UserAdapter;
use components\datamapper\identity\IdentityMap;
use components\datamapper\mapper\UserMapper;
use components\db\DB;


class App
{

    public static $identity;
    public static $db;

    public function init()
    {
        self::$identity = new IdentityMap();
        self::$db = new DB();
        $this->loadUser();
    }

    private function loadUser()
    {
        $userId = $_POST['idUser'];

        if (isset($userId)){
            $userAdapter = new UserAdapter(self::$db);

            $userMapper = new UserMapper($userAdapter, self::$identity);
            $user = $userMapper->findOne($userId);

            // тест на второе обращение
            $user = $userMapper->findOne($userId);

            // ленивая загрузка
            $user->getRole();
        }


        $render = new Render();
        $render->render($user);
    }
}