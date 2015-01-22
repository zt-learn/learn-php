<?php

/*
* mysql 单例
*/

class mysql
{
    private $host = 'localhost'; //数据库主机
    private $user = 'root'; //数据库用户名
    private $pwd = '123456'; //数据库用户名密码
    private $database = 'monster'; //数据库名
    private $charset = 'utf8'; //数据库编码，GBK,UTF8,gb2312
    private $link;             //数据库连接标识;
    private $rows;             //查询获取的多行数组
    static $_instance; //存储对象

    /**
     * 构造函数
     * 私有
     */
    private function __construct($pconnect = false)
    {
        if (!$pconnect) {
            $this->link = @ mysql_connect($this->host, $this->user, $this->pwd) or $this->err();
        } else {
            $this->link = @ mysql_pconnect($this->host, $this->user, $this->pwd) or $this->err();
        }
        mysql_select_db($this->database) or $this->err();
        $this->query("SET NAMES '{$this->charset}'", $this->link);
        return $this->link;
    }

    /**
     * 防止被克隆
     *
     */
    private function __clone()
    {
    }

    public static function getInstance($pconnect = false)
    {
        if (FALSE == (self::$_instance instanceof self)) {
            self::$_instance = new self($pconnect);
        }
        return self::$_instance;
    }

    /**
     * 查询
     */
    public function query($sql, $link = '')
    {
        $this->result = mysql_query($sql, $this->link) or $this->err($sql);
        return $this->result;
    }

    /**
     * 单行记录
     */
    public function getRow($sql, $type = MYSQL_ASSOC)
    {
        $result = $this->query($sql);
        return @ mysql_fetch_array($result, $type);
    }

    /**
     * 多行记录
     */
    public function getRows($sql, $type = MYSQL_ASSOC)
    {
        $result = $this->query($sql);
        while ($row = @ mysql_fetch_array($result, $type)) {
            $this->rows[] = $row;
        }
        return $this->rows;
    }

    /**
     * 错误信息输出
     */
    protected function err($sql = null)
    {
        //这里输出错误信息
        echo 'error';
        exit();
    }
}

//用例
$db = mysql::getInstance();
$db2 = mysql::getInstance();
$data = $db->getRows('select * from user');
print_r($data);
//判断两个对象是否相等
if ($db === $db2) {
    echo 'true';
}
?>
