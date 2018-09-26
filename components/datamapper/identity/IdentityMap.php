<?php
/**
 * Created by PhpStorm.
 * User: igroc
 * Date: 26.09.2018
 * Time: 10:44
 */

namespace components\datamapper\identity;

use components\datamapper\model\BaseModel;

/**
 * Class IdentityMap
 * @package components\datamapper\identity
 */
class IdentityMap
{
    /**
     * Ассоциативный массив моделей с идентификаторами в ввиде ключей массива
     * @var array
     */
    private $identityMap = [];

    /**
     * Добавление модели в массив
     * @param BaseModel $obj
     */
    public function add(BaseModel $obj)
    {
        $key = $this->getGlobalKey(get_class($obj), $obj->id);
        $this->identityMap[$key] = $obj;
    }

    /**
     * Получение модели из массива
     * @param string $className
     * @param int $id
     * @return mixed
     */
    public function get(string $className, int $id)
    {
        $key = $this->getGlobalKey($className, $id);
        if ($this->isExistObject($key)) {
            return $this->identityMap[$key];
        }
    }

    /**
     * Проверка есть ли модель в массиве по ключу
     * @param $key
     * @return bool
     */
    private function isExistObject($key)
    {
        if (isset($this->identityMap[$key])) {
            return true;
        }
        return false;
    }

    /**
     * Получение идентификатора модели из полного имени класса и id
     * @param string $className
     * @param int $id
     * @return string
     */
    private function getGlobalKey(string $className, int $id)
    {
        return sprintf('%s.%d', $className, $id);
    }
}
