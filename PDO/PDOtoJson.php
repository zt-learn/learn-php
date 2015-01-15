<?php
/*把pdo查询出的结果转化为字符串*/
header("Content-type: text/html; charset=utf-8");

$dbms = 'mysql';     //数据库类型
$host = 'localhost'; //数据库主机名
$dbName = 'yii';    //使用的数据库
$user = 'root';      //数据库连接用户名
$pass = 'marvell88';          //对应的密码
$dsn = "$dbms:host=$host;dbname=$dbName";

try {
    $dbh = new PDO($dsn, $user, $pass, array(PDO::ATTR_PERSISTENT => true)); //初始化一个PDO对象
    $dbh->query('set names utf8');
    $datas = $dbh->query("select * from $table");
    foreach ($datas as $data) {
        $result[] = $data;
    }
    $dbh = null;
} catch (PDOException $e) {
    die ("Error!: " . $e->getMessage() . "<br/>");
}
echo json_encode($result, true);