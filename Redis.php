<?php
class Redis
{
    public static function getRedis($host,$port)
    {
        return Redis::connection($host,$port);
    }
}