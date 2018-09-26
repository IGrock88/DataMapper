<?php
/**
 * Created by PhpStorm.
 * User: igroc
 * Date: 25.09.2018
 * Time: 11:24
 */

namespace components\datamapper\model;


abstract class BaseModel
{

    protected $safeProperties = [];

    public function __construct(array $properties)
    {
        foreach ($properties as $name => $value){
            $this->$name = $value;
        }
    }

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

    final public function __set($name, $value)
    {
        if ($this->isSafeProperty($name)){
            $this->$name = $value;
        }

    }

    private function isSafeProperty($name)
    {
        return in_array($name, $this->safeProperties);
    }

}