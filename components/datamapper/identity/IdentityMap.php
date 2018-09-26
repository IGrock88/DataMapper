<?php
/**
 * Created by PhpStorm.
 * User: igroc
 * Date: 26.09.2018
 * Time: 10:44
 */

namespace components\datamapper\identity;

use components\datamapper\model\BaseModel;

class IdentityMap
{
    private $identityMap = [];

    public function add(BaseModel $obj)
    {
        $key = $this->getGlobalKey(get_class($obj), $obj->id);
        $this->identityMap[$key] = $obj;
    }

    public function get(string $className, int $id)
    {
        $key = $this->getGlobalKey($className, $id);
        if ($this->isExistObject($key)) {
            return $this->identityMap[$key];
        }
    }

    private function isExistObject($key)
    {
        if (isset($this->identityMap[$key])) {
            return true;
        }
        return false;
    }

    private function getGlobalKey(string $className, int $id)
    {
        return sprintf('%s.%d', $className, $id);
    }
}
