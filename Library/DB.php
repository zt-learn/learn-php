<?php

namespace lib;

class DB
{
    public $db;

    public function __construct()
    {
        $this->pdo = SingletonPdo::getInstance();
    }

    /**
     * @param $sql
     * @return bool
     *
     * 执行：插入，修改，删除
     */
    public function set($sql)
    {
        return $this->pdo->execute($sql);
    }

    /**
     * @param $sql
     * @return array
     *
     * 执行：查询，返回结果集
     */
    public function get($sql)
    {
        return $this->pdo->query($sql);
    }
}

