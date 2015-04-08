<?php
require_once "curd.php";

/**
 * 当没有数据库和集合的时候：
 * mongodb会自己创建一个数据库和集合
 */

$dbname = 'leo';
$collection = "user";

try {
    $mongoClient = new MongoClient(); // 连接到本地数据库，默认端口为27017.即：localhost:27017
//    $mongoClient = new MongoClient("mongodb://example.com"); // 连接远程数据库，默认端口为27017
//    $mongoClient = new MongoClient("mongodb://example.com:65432"); // 连接远程数据库，端口号为指定的端口号。
    $mongoDB = $mongoClient->selectDB($dbname);
//    $mongoDB->authenticate($user, $pwd);
    $collection = $mongoDB->selectCollection($collection);
    $collection->ensureIndex(array("id" => 1));

    /*插入:*/
    /*    $file = file_get_contents("levelList.json");
        $fileArray = json_decode($file, true);
        $ret = $collection->insert($fileArray);*/

    /*查询: $query是查询条件*/
    $query = array("packet_status" => 1);
    $data = $collection->find($query);

//    $data = $collection->findOne()['_id'];
    while ($data->hasNext()) {
        var_dump($data->getNext()['startupitem']);
    }

    /*删除:*/
    $arr = array("name" => "user2s");
    if ($collection->remove($arr))
        echo '<hr>delete ok<hr>';

    /*修改:*/


    /*自增长:*/

} catch (Exception $e) {
    die($e->getMessage());
}