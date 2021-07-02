<?php

namespace app\models;

use app\interfaces\IModel;


abstract class Model implements IModel
{
    protected $props = [];

    public function __set($name, $value)
    {
        //TODO Проверить по props можно ли вообще менять это поле
        $this->props[$name] = true;
        $this->$name = $value;
    }

    public function __get($name)
    {
        //TODO Проверить по props можно ли вообще читать это поле
        return $this->$name;
    }

    public function __isset($name)
    {
        // TODO: Implement __isset() method.
       // return isset($this->$name);
    }


}