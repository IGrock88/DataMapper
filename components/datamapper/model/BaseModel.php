<?php
/**
 * Created by PhpStorm.
 * User: igroc
 * Date: 25.09.2018
 * Time: 11:24
 */

namespace components\datamapper\model;

/**
 * Класс базовой модели, от неё должны наследоваться все доменные модели
 * @package components\datamapper\model
 */
abstract class BaseModel
{

    /**
     * Массив с элементами полей разрешенных для заполнения в свойства модели
     * @var array $safeProperties массив
     */
    protected $safeProperties = [];

    /**
     * BaseModel constructor.
     *
     *
     * @param array $properties <p>
     * ассоциативный массив, ключи - имена столбцов таблицы бд, значения - значения этих стобцов
     * </p>
     */
    public function __construct(array $properties)
    {
        foreach ($properties as $name => $value){
            $this->$name = $value;
        }
    }

    /**
     * @param $name
     * @return mixed
     */
    final public function __get($name)
    {
        if (empty($this->$name)){
            throw new \Error('variable ' . $name . ' not defined');
        }
        if ($this->isSafeProperty($name)){
            return $this->$name;
        }
        else {
            throw new \Error($name . ' is not safe property');
        }

    }

    /**
     * @param $name
     * @param $value
     */
    final public function __set($name, $value)
    {
        if ($this->isSafeProperty($name)){
            $this->$name = $value;
        }

    }

    /**
     * @param $name
     * @return bool
     */
    private function isSafeProperty($name)
    {
        return in_array($name, $this->safeProperties);
    }

}