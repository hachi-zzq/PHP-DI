<?php
require_once "DB.php";
require_once "Redis.php";


class DI
{
    private $arrDi;

    public function set($key,$value)
    {
        $this->arrDi[$key] = $value;
    }


    public function get($key)
    {
        return $this->arrDi[$key];
    }
}

$di = new DI();
$di->set('db',DB::getDB('localhost','root','root'));

$di->set('redis',function(){
    return new Redis();
});

class User3
{
    private $di;

    public function __construct($di)
    {
        $this->di = $di;
    }
    public function getList()
    {
        return $this->di->get('db')->exec("create database yyy");
    }


}

$user3 = new User3($di);
var_dump($user3->getList());









































