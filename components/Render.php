<?php
/**
 * Created by PhpStorm.
 * User: igroc
 * Date: 25.09.2018
 * Time: 17:37
 */

namespace components;


use components\datamapper\model\BaseModel;

class Render
{

    public function render(BaseModel $baseModel = null)
    {
        include 'view/base.php';
    }
}