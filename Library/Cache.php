<?php
/*
 * Cache类封了Redis和Memcached的方法
 * 其中有些方法名一致
 * 有些事redis独有的
 * 使用时需要注意
 */
namespace lib;

class Cache
{
    public $cache;

    public function __construct()
    {
        if (CACHE == 'REDIS') {
            $this->cache = new \Redis();
            $this->cache->connect(GAMEHOST, GAMEPORT);
        } else if (CACHE == "MEMCACHED") {
            $this->cache = new \Memcached();
            $this->cache->addServer(GAMEHOST, GAMEPORT);
        }
    }

    public function set($key, $value)
    {
        $this->cache->set($key, $value);
    }

    public function get($key)
    {
        return $this->cache->get($key);
    }

    public function delete($key)
    {
        $this->cache->delete($key);
    }

    public function deleteAll()
    {
        if (CACHE == 'REDIS') {
            /*
             * flushAll,时间复杂度尚未明确*
             * flushDB,时间复杂度为1
             */
            $this->cache->flushDB();
        } else if (CACHE == "MEMCACHED") {
            $this->cache->flush();
        }
    }

    /*返回的是一个boolean类型*/
    public function exists($key)
    {
        if (CACHE == "REDIS") {
            return $this->cache->exists($key);
        } else if (CACHE == "MEMCACHED") {
            echo "error!! maybe you use memcached,but it don't have" . __FUNCTION__ . "function！";
        }
    }

    public function hSet($key, $hashKey, $value)
    {
        if (CACHE == 'REDIS') {
            $this->cache->hSet($key, $hashKey, $value);
        } else if (CACHE == "MEMCACHED") {
            echo "error!! maybe you use memcached,but it don't have" . __FUNCTION__ . "function！";
        }
    }

    /*使用hMset可以简化hSet的操作，将数组以$hashKey=>$value的方式存入$key中*/
    public function hMset($key, $array)
    {
        if (CACHE == 'REDIS') {
            $this->cache->hMset($key, $array);
        } else if (CACHE == "MEMCACHED") {
            echo "error!! maybe you use memcached,but it don't have" . __FUNCTION__ . "function！";
        }
    }

    public function hGet($key, $hashKey)
    {
        if (CACHE == 'REDIS') {
            return $this->cache->hGet($key, $hashKey);
        } else if (CACHE == "MEMCACHED") {
            echo "error!! maybe you use memcached,but it don't have" . __FUNCTION__ . "function！";
        }
    }

    public function hGetAll($key)
    {
        if (CACHE == 'REDIS') {
            return $this->cache->hGetAll($key);
        } else if (CACHE == "MEMCACHED") {
            echo "error!! maybe you use memcached,but it don't have" . __FUNCTION__ . "function！";
        }
    }
}

