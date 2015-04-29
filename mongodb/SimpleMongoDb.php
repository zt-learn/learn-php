<?php

define('GAMEHOST', '127.0.0.1');
define('MONGOPORT', '27017');

class SimpleMongoDB
{

    /*id自增长*/
    public static function mid($name, $db)
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
    public static function insertWithID($query)
    {
        $mongoClient = new MongoClient(GAMEHOST . ":" . MONGOPORT);
        $mongoDb = $mongoClient->selectDB("monster");
        $collection = $mongoDb->selectCollection('user');
        $id = static::mid('user', $mongoDb);

        $data = $query;
        $data['useridx'] = $id + 10000000;

        $collection->insert($data);
        $mongoClient->close();
    }

    /**
     * 插入一条记录
     */
    public static function insert($data)
    {
        $mongoClient = new MongoClient(GAMEHOST . ":" . MONGOPORT);
        $mongoDb = $mongoClient->selectDB("monster");
        $collection = $mongoDb->selectCollection('user');

        $collection->insert($data);
        $mongoClient->close();
    }

    /**
     * @param $where
     * @param $set
     *
     * 如果该结点下有$set属性：数据覆盖
     * 如果没有这个属性：添加这条属性
     */
    public static function updateWithSet($where, $set)
    {
        $mongoClient = new MongoClient(GAMEHOST . ":" . MONGOPORT);
        $mongoDb = $mongoClient->selectDB("monster");
        $collection = $mongoDb->selectCollection('stage');

        $collection->update($where, ['$set' => $set]);
        $mongoClient->close();
    }

    /**
     * @param $where
     * @param $addToSet
     */
    public static function updateWithUnset($where, $unset)
    {
        $mongoClient = new MongoClient(GAMEHOST . ":" . MONGOPORT);
        $mongoDb = $mongoClient->selectDB("monster");
        $collection = $mongoDb->selectCollection('user');

        $collection->update($where, ['$unset' => $unset]);
        $mongoClient->close();
    }


    /**
     * 查询条件是一个数组
     *['name' => '田雨青']
     */
    public static function select($query = array())
    {
        $mongoClient = new MongoClient(GAMEHOST . ":" . MONGOPORT);
        $mongoDb = $mongoClient->selectDB("monster");
        $collection = $mongoDb->selectCollection('stage');

        $data = $collection->findOne($query);
        $mongoClient->close();
        return $data;
    }

    /**
     * @param array $query
     *
     * 删除条件也是一个数组
     * ['name' => '田雨青']
     */
    public static function delete($query = array())
    {
        $mongoClient = new MongoClient(GAMEHOST . ":" . MONGOPORT);
        $mongoDb = $mongoClient->selectDB("monster");
        $collection = $mongoDb->selectCollection('user');

        $collection->remove($query);
        $mongoClient->close();
    }
}

var_dump(SimpleMongoDB::select(['useridx' => 1]));

SimpleMongoDB::insertWithID(['xxx' => 'ooo']);


switch (4) {
    case 0:
        SimpleMongoDB::updateWithUnset(
            ['name' => 'leo'],
            'wanna'
        );
        break;

    case 1:
        SimpleMongoDB::insert([
            'name' => 'leo',
            'age' => 123,
            'sex' => 'man',
            'wanna' => [
                'a' => 'women',
                'b' => 'money',
                'c' => 'power'
            ]
        ]);
        break;

    case 2:
        SimpleMongoDB::updateWithSet(
            ['useridx' => 1,],
//            [
//                'test' => [
//                    "A" => 1,
//                    "B" => 2,
//                    "C" => 3,
//                    "D" => 4,
//                    "E" => 5
//                ]
//            ]
            [
                '3' => [
                    'A' => 123123123,
                    'B' => 123123123,
                    'C' => 123123123,
                    'D' => 123123123,
                    'E' => 123123123,
                    'F' => 123123123,
                ]
            ]
        );
        break;

    case 4:
        var_dump(SimpleMongoDB::select(
            ['useridx' => 1]
        ));
        break;

    case 5:
        SimpleMongoDB::insertWithID([
            'name' => 'leo',
            'age' => 123,
            'sex' => 'man',
            'wanna' => [
                'a' => 'women',
                'b' => 'money',
                'c' => 'power'
            ]
        ]);
        break;

    case 6:
        SimpleMongoDB::delete([
            'name' => 'leo'
        ]);
        break;

    case 3:
        SimpleMongoDB::updateWithPush(
            ['name' => 'leo',],
            [
                "A" => 1,
                "B" => 2,
                "C" => 3,
                "D" => 4,
                "E" => 5
            ]
        );
        break;

    case 7:
        SimpleMongoDB::updateWithAddToSet(
            ['name' => "leo",],
            [
                5 => [
                    "A" => 1,
                    "B" => 2,
                    "C" => 3,
                    "D" => 4,
                    "E" => 5
                ],
            ]
        );
        break;

}
