<?php
class User
{
    protected $name = 'liukun';
    protected static $class = '209';
    public function getName()
    {
        return $this->name;
    }
    public function say()
    {
        // return User::$class . $this->getName() . '說:hello world'; 
        //静态变量方法等属于类本身，不能使用$this，只能使用User::$class
        // return self::$class . $this->getName() . '說:hello world'; //self表示当前类
        return self::getClass();
    }
    public static function getClass(){
        return self::$class;
    }
}

$obj = new User();
echo $obj->say();

//test
