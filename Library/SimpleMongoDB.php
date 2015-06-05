<?php

namespace lib;
class SimpleMongoDB
{
    private $host;//数据库主机名
    private $dbName;//使用的数据库
    private $port;
    private $user;//数据库连接用户名
    private $pass;//对应的密码
    private $collect;

    private $mongoClient;
    private $mongoDB;
    private $mongoCollection;
    private static $_instance; //存储对象

    public function __construct($collect)
    {
        $this->host = HOST;        //数据库主机名
        $this->dbName = DBNAME;    //使用的数据库
        $this->port = MONGOPORT;
        $this->user = USER;     //数据库连接用户名
        $this->pass = PASS;          //对应的密码
        $this->collect = $collect;//数据库对应的表

        $this->mongoClient = new \MongoClient(GAMEHOST . ":" . MONGOPORT);//集合
        $this->mongoDB = $this->mongoClient->selectDB($this->dbName);
        $this->mongoCollection = $this->mongoDB->selectCollection($collect);
    }

    public function __destruct()
    {
        $this->mongoClient->close();
    }

    /**
     * @param $name
     * @param $db
     * @return mixed
     * id自增长
     */
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
     *
     * 插入数据要保证自增长
     * 在初始化一个文档节点时使用
     */
    public function insertWithID($query, $siteId)
    {
        $id = $this->mid($this->collect, $this->mongoDB) + 10000000;

        $data = $query;
        $data['useridx'] = "$id";
        $data['siteId'] = "$siteId";
        $this->mongoCollection->insert($data);
    }

    /**
     * @param $data
     * 插入一条记录,一个全新的文档，相当于新增用户
     *
     * $mongo->insert($data);
     */
    public function insert($data)
    {
        $this->mongoCollection->insert($data);
    }

    /**
     * @param $where
     * @param $set
     *
     * 修改一个文档内容，可以修改或者添加改文档下面的一个记录
     * 插入和更新，一个关卡的新纪录
     *
     * $mongo2->updateWithSet(['siteId' => 1], ['1' => [
     * "star" => "3",
     * "bestscore" => "000000",
     * "hero" => "0",
     * "hero_bestscore" => "0",
     * "playcount" => "2",
     * "hero_playcount" => "0"
     * ]]);
     */
    public function updateWithSet($where, $set)
    {
        $this->mongoCollection->update($where, ['$set' => $set]);
    }

    /**
     * @param $where
     * @param $unset
     *
     * 把第二个数组给参数删除：注意即使是删除，也要写成数组形式,只要键相等即可
     * $mongo->updateWithUnset(['a' => '1111'], ['b' => '1']);
     *
     * $this->mongo->updateWithUnset(['siteId' => $siteId], ["$giftId" => '']);
     */
    public function updateWithUnset($where, $unset)
    {
        $this->mongoCollection->update($where, ['$unset' => $unset]);
    }

    /**
     * @param $query
     * @return mixed
     *
     *查询条件是一个数组
     * ['name' => 'zhentaoo']
     */
    public function select($query)
    {
        $data = $this->mongoCollection->findOne($query);
        return $data;
    }

    /**
     * @param $query
     *
     * 删除条件也是一个数组
     *
     * $mongo->delete(['2' => '1111']);
     */
    public function deleteOne($query)
    {
        $this->mongoCollection->remove($query);
    }

    public function deleteAll()
    {
        $this->mongoCollection->remove();
    }
}
