<?php
require_once "DB.php";
require_once "Redis.php";


class DI
{
    private $di = array();

    public function __set($key,$value)
    {
        $this->di[$key] = $value;
    }

    public function __get($key)
    {
        return $this->di[$key]($this);
    }
}

$di = new DI();

$di->db = function(){
    return DB::getDB('localhost','root','root');
};

class User3
{
    private $di;

    public function __construct($di)
    {
        $this->di = $di;
    }
    public function getList()
    {
        return $this->di->db->exec("create database uuuuu");
    }


}

$user3 = new User3($di);
var_dump($user3->getList());









































