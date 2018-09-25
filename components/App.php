<?php
/**
 * Created by PhpStorm.
 * User: igroc
 * Date: 25.09.2018
 * Time: 16:57
 */

namespace components;


use components\datamapper\adapter\UserAdapter;
use components\datamapper\mapper\UserMapper;
use components\db\DB;


class App
{

    public function init()
    {
        $this->loadUser();

    }

    private function loadUser()
    {
        $userId = 1;
        $db = new DB();
        $userAdapter = new UserAdapter($db);

        $userMapper = new UserMapper($userAdapter);
        $user = $userMapper->findOne($userId);

        $render = new Render();
        $render->render($user);
    }
}