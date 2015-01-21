<?php
header("Content-type: text/html; charset=utf-8");

$dbms = 'mysql';     //数据库类型
$host = 'localhost'; //数据库主机名
$dbName = 'monster';    //使用的数据库
$user = 'root';      //数据库连接用户名
$pass = '123456';          //对应的密码
$dsn = "$dbms:host=$host;dbname=$dbName";

//默认这个不是长连接，如果需要数据库长连接，需要最后加一个参数：array(PDO::ATTR_PERSISTENT => true) 变成这样：
//header(ContentType = 'utf-8');
try {
    $dbh = new PDO($dsn, $user, $pass, array(PDO::ATTR_PERSISTENT => true)); //初始化一个PDO对象
    echo "连接成功<br/>";

    $dbh->query('set names utf8');
    $datas = $dbh->query("select isnew from user where user_id='1000020'");
//    $datas = $dbh->query('select * from user');

    $result = array();
    $i = 0;
    try {
        foreach ($datas as $data) {
            foreach ($data as $k => $v) {
                if (!is_numeric($k))
                    $result[$i][$k] = $v;
            }
            $i++;
        }
    } catch (Exception $e) {
        echo 'aheheh';
    }

    /*你还可以进行一次搜索操作
    foreach ($dbh->query('SELECT * from FOO') as $row) {
        print_r($row); //你可以用 echo($GLOBAL); 来看到这些值
    }
    */
    $dbh = null;
} catch (PDOException $e) {
    die ("Error!: " . $e->getMessage() . "<br/>");
}

var_dump($result);
?>