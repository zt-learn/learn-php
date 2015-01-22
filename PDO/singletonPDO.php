<?php

class SingletonPDO
{
    private $dbms;//数据库类型
    private $host;//数据库主机名
    private $dbName;//使用的数据库
    private $user;//数据库连接用户名
    private $pass;//对应的密码
    private $dsn;
    private $pdo;
    private static $_instance; //存储对象

    private function __construct()
    {
        $this->dbms = 'mysql';     //数据库类型
        $this->host = 'localhost'; //数据库主机名
        $this->dbName = 'monster';    //使用的数据库
        $this->user = 'root';      //数据库连接用户名
        $this->pass = '123456';          //对应的密码
        $this->dsn = "$this->dbms:host=$this->host;dbname=$this->dbName";
        $this->pdo = new PDO($this->dsn, $this->user, $this->pass, array(PDO::ATTR_PERSISTENT => true));
        $this->pdo->query('set names uft-8');
    }

    private function __clone()
    {
    }

    public static function getInstance()
    {
        if (self::$_instance == null) {
//            self::$_instance = new SingletonPDO();
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    public function query($sql)
    {
        $rows = $this->pdo->query($sql);
        $result = array();

        $i = 0;
        foreach ($rows as $row) {
            foreach ($row as $k => $v) {
                if (!is_numeric($k))
                    $result[$i][$k] = $v;
            }
            $i++;
        }
        return $result;
    }

    public function update($sql)
    {
        $this->pdo->query($sql);
    }
}

$test = SingletonPDO::getInstance();
//var_dump($test->query("select * from user where name='test'"));
var_dump($test->query("select * from user"));

$test2 = SingletonPDO::getInstance();

if ($test == $test2) {
    echo 'ok';
} else {
    echo 'hehe';
}
