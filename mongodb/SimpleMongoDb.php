<?php

/**
 * Created by PhpStorm.
 * User: leo
 * Date: 2015/4/14
 * Time: 16:48
 */
class SimpleMongoDB
{
    private static $_instance;
    private $mongoClient;
    private $mongoDb;
    private $collection;

    public function __construct($host, $port, $dataBase, $tableName)
    {
        $this->mongoClient = new MongoClient("$host:" . "$port");
        $this->mongoDb = $this->mongoClient->selectDB($dataBase);
        $this->collection = $this->mongoDb->selectCollection($tableName);
    }

    public function __destruct()
    {
        $this->mongoClient->close();
    }

    /*id自增长*/
    public function mid($name, $db)
    {
        $update = array('$inc' => array("id" => 1));
        $query = array('name' => $name);
        $command = array(
            'findandmodify' => 'ids', 'update' => $update,
            'query' => $query, 'new' => true, 'upsert' => true
        );
        $id = $db->command($command);
        return $id['value']['id'];
    }


    /**
     * @param $query
     * 插入数据要保证自增长
     */
    public function insert($query)
    {
        $id = $this->mid('user', $this->mongoDb);
        $query = $query;
        $query['useridx'] = $id;
        $this->collection->insert($query);
    }

    /**
     * update分为覆盖方式和非覆盖方式：
     * $where: ["useridx" => 204]
     * $set: ['name' => 'leo']
     */
    public function update($where, $set)
    {
        $this->collection->update($where, ['$set' => $set]);
    }

    /**
     * 查询条件是一个数组
     *['name' => '田雨青']
     */
    public function select($query = array())
    {
        return $this->collection->findOne($query);
    }

    /**
     * @param array $query
     *
     * 删除条件也是一个数组
     * ['name' => '田雨青']
     */
    public function delete($query = array())
    {
        $this->collection->remove($query);
    }
}


$mongoDb = new  SimpleMongoDB('10.10.10.123', '27017', 'leo', 'user');

$query = [
    "name" => "田雨青",
    "floor" => "96",
    "level" => "8",
    "episodeunlocklist" => [
        [
            "A" => "1",
            "B" => "2",
            "C" => "1",
        ],
        [
            "A" => "2",
            "B" => "2",
            "C" => "1",
        ]
    ],
];
$mongoDb->insert($query);
//var_dump($mongoDb->select($query));
//var_dump($mongoDb->delete(['useridx' => 204]));