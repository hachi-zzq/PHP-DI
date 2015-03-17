<?php

class DB
{
    public static function getDB($host,$username,$password)
    {
          return  new PDO("mysql:$host",$username,$password);
    }
}

