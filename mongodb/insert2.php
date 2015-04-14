<?php

/**
 * Created by PhpStorm.
 * User: leo
 * Date: 2015/3/24
 * Time: 9:54
 */
class MongoDebug
{
    public static function insert($query)
    {
        try {
            $dbname = 'leo';
            $collection = "user";

            $mongoClient = new MongoClient("10.10.10.123");
            $mongoDB = $mongoClient->selectDB($dbname);
            $collection = $mongoDB->selectCollection($collection);
            $collection->insert($query);
        } catch (MongoConnectionException $e) {
            var_dump($e);
        }
    }

    public static function update($query)
    {
        try {
            $dbname = 'leo';
            $collection = "user";

            $mongoClient = new MongoClient("10.10.10.123");
            $mongoDB = $mongoClient->selectDB($dbname);
            $collection = $mongoDB->selectCollection($collection);
            $collection->insert($query);
        } catch (MongoConnectionException $e) {
            var_dump($e);
        }
    }
}

$time = time();
for ($i = 0; $i < 10000; $i++) {
    $query = [
        '_id' => $i,
        'age' => 12,
        'name' => 'leo',
        'text' => "sdfadskkkkkkkkkkkkkkkkkkkkkkkkkkkkkahsdjfkasdfasdfasdfasdfasdfsadfasdfasdfasdfasdfasdfasdfasdfasdf",
        'text1' => "sdfadskkkkkkkkkkkkkkkkkkkkkkkkkkkkkahsdjfkasdfasdfasdfasdfasdfsadfasdfasdfasdfasdfasdfasdfasdfasdf",
        'text2' => "sdfadskkkkkkkkkkkkkkkkkkkkkkkkkkkkkahsdjfkasdfasdfasdfasdfasdfsadfasdfasdfasdfasdfasdfasdfasdfasdf",
        'text3' => "sdfadskkkkkkkkkkkkkkkkkkkkkkkkkkkkkahsdjfkasdfasdfasdfasdfasdfsadfasdfasdfasdfasdfasdfasdfasdfasdf",
        'text4' => "sdfadskkkkkkkkkkkkkkkkkkkkkkkkkkkkkahsdjfkasdfasdfasdfasdfasdfsadfasdfasdfasdfasdfasdfasdfasdfasdf",
        'text5' => "sdfadskkkkkkkkkkkkkkkkkkkkkkkkkkkkkahsdjfkasdfasdfasdfasdfasdfsadfasdfasdfasdfasdfasdfasdfasdfasdf",
        'text6' => "sdfadskkkkkkkkkkkkkkkkkkkkkkkkkkkkkahsdjfkasdfasdfasdfasdfasdfsadfasdfasdfasdfasdfasdfasdfasdfasdf",
        'textd' => "sdfadskkkkkkkkkkkkkkkkkkkkkkkkkkkkkahsdjfkasdfasdfasdfasdfasdfsadfasdfasdfasdfasdfasdfasdfasdfasdf",
        'textf' => "sdfadskkkkkkkkkkkkkkkkkkkkkkkkkkkkkahsdjfkasdfasdfasdfasdfasdfsadfasdfasdfasdfasdfasdfasdfasdfasdf",
        'textsd' => "sdfadskkkkkkkkkkkkkkkkkkkkkkkkkkkkkahsdjfkasdfasdfasdfasdfasdfsadfasdfasdfasdfasdfasdfasdfasdfasdf",
        'textx' => "sdfadskkkkkkkkkkkkkkkkkkkkkkkkkkkkkahsdjfkasdfasdfasdfasdfasdfsadfasdfasdfasdfasdfasdfasdfasdfasdf",
        'texthg' => "sdfadskkkkkkkkkkkkkkkkkkkkkkkkkkkkkahsdjfkasdfasdfasdfasdfasdfsadfasdfasdfasdfasdfasdfasdfasdfasdf",
        'textq' => "sdfadskkkkkkkkkkkkkkkkkkkkkkkkkkkkkahsdjfkasdfasdfasdfasdfasdfsadfasdfasdfasdfasdfasdfasdfasdfasdf",
        'textz' => "sdfadskkkkkkkkkkkkkkkkkkkkkkkkkkkkkahsdjfkasdfasdfasdfasdfasdfsadfasdfasdfasdfasdfasdfasdfasdfasdf",

        'q1' => "sdfadskkkkkkkkkkkkkkkkkkkkkkkkkkkkkahsdjfkasdfasdfasdfasdfasdfsadfasdfasdfasdfasdfasdfasdfasdfasdf",
        'q2' => "sdfadskkkkkkkkkkkkkkkkkkkkkkkkkkkkkahsdjfkasdfasdfasdfasdfasdfsadfasdfasdfasdfasdfasdfasdfasdfasdf",
        'tefxt2' => "sdfadskkkkkkkkkkkkkkkkkkkkkkkkkkkkkahsdjfkasdfasdfasdfasdfasdfsadfasdfasdfasdfasdfasdfasdfasdfasdf",
        'texxct3' => "sdfadskkkkkkkkkkkkkkkkkkkkkkkkkkkkkahsdjfkasdfasdfasdfasdfasdfsadfasdfasdfasdfasdfasdfasdfasdfasdf",
        'texvxct4' => "sdfadskkkkkkkkkkkkkkkkkkkkkkkkkkkkkahsdjfkasdfasdfasdfasdfasdfsadfasdfasdfasdfasdfasdfasdfasdfasdf",
        'texect5' => "sdfadskkkkkkkkkkkkkkkkkkkkkkkkkkkkkahsdjfkasdfasdfasdfasdfasdfsadfasdfasdfasdfasdfasdfasdfasdfasdf",
        'texxcvt6' => "sdfadskkkkkkkkkkkkkkkkkkkkkkkkkkkkkahsdjfkasdfasdfasdfasdfasdfsadfasdfasdfasdfasdfasdfasdfasdfasdf",
        'texvtd' => "sdfadskkkkkkkkkkkkkkkkkkkkkkkkkkkkkahsdjfkasdfasdfasdfasdfasdfsadfasdfasdfasdfasdfasdfasdfasdfasdf",
        'textxcvf' => "sdfadskkkkkkkkkkkkkkkkkkkkkkkkkkkkkahsdjfkasdfasdfasdfasdfasdfsadfasdfasdfasdfasdfasdfasdfasdfasdf",
        'textedsd' => "sdfadskkkkkkkkkkkkkkkkkkkkkkkkkkkkkahsdjfkasdfasdfasdfasdfasdfsadfasdfasdfasdfasdfasdfasdfasdfasdf",
        'texthx' => "sdfadskkkkkkkkkkkkkkkkkkkkkkkkkkkkkahsdjfkasdfasdfasdfasdfasdfsadfasdfasdfasdfasdfasdfasdfasdfasdf",
        'texghjthg' => "sdfadskkkkkkkkkkkkkkkkkkkkkkkkkkkkkahsdjfkasdfasdfasdfasdfasdfsadfasdfasdfasdfasdfasdfasdfasdfasdf",
        'texhjktq' => "sdfadskkkkkkkkkkkkkkkkkkkkkkkkkkkkkahsdjfkasdfasdfasdfasdfasdfsadfasdfasdfasdfasdfasdfasdfasdfasdf",
        'textgz' => "sdfadskkkkkkkkkkkkkkkkkkkkkkkkkkkkkahsdjfkasdfasdfasdfasdfasdfsadfasdfasdfasdfasdfasdfasdfasdfasdf",

        'teghjxt' => "sdfadskkkkkkkkkkkkkkkkkkkkkkkkkkkkkahsdjfkasdfasdfasdfasdfasdfsadfasdfasdfasdfasdfasdfasdfasdfasdf",
        'texhkjt1' => "sdfadskkkkkkkkkkkkkkkkkkkkkkkkkkkkkahsdjfkasdfasdfasdfasdfasdfsadfasdfasdfasdfasdfasdfasdfasdfasdf",
        'tekuxt2' => "sdfadskkkkkkkkkkkkkkkkkkkkkkkkkkkkkahsdjfkasdfasdfasdfasdfasdfsadfasdfasdfasdfasdfasdfasdfasdfasdf",
        'tertxt3' => "sdfadskkkkkkkkkkkkkkkkkkkkkkkkkkkkkahsdjfkasdfasdfasdfasdfasdfsadfasdfasdfasdfasdfasdfasdfasdfasdf",
        'texsst4' => "sdfadskkkkkkkkkkkkkkkkkkkkkkkkkkkkkahsdjfkasdfasdfasdfasdfasdfsadfasdfasdfasdfasdfasdfasdfasdfasdf",
        'textbnm5' => "sdfadskkkkkkkkkkkkkkkkkkkkkkkkkkkkkahsdjfkasdfasdfasdfasdfasdfsadfasdfasdfasdfasdfasdfasdfasdfasdf",
        'texlit6' => "sdfadskkkkkkkkkkkkkkkkkkkkkkkkkkkkkahsdjfkasdfasdfasdfasdfasdfsadfasdfasdfasdfasdfasdfasdfasdfasdf",
        'textoud' => "sdfadskkkkkkkkkkkkkkkkkkkkkkkkkkkkkahsdjfkasdfasdfasdfasdfasdfsadfasdfasdfasdfasdfasdfasdfasdfasdf",
        'texqwtf' => "sdfadskkkkkkkkkkkkkkkkkkkkkkkkkkkkkahsdjfkasdfasdfasdfasdfasdfsadfasdfasdfasdfasdfasdfasdfasdfasdf",
        'texvcxtsd' => "sdfadskkkkkkkkkkkkkkkkkkkkkkkkkkkkkahsdjfkasdfasdfasdfasdfasdfsadfasdfasdfasdfasdfasdfasdfasdfasdf",
        'texcbcvbtx' => "sdfadskkkkkkkkkkkkkkkkkkkkkkkkkkkkkahsdjfkasdfasdfasdfasdfasdfsadfasdfasdfasdfasdfasdfasdfasdfasdf",
        'textcvbcdfghg' => "sdfadskkkkkkkkkkkkkkkkkkkkkkkkkkkkkahsdjfkasdfasdfasdfasdfasdfsadfasdfasdfasdfasdfasdfasdfasdfasdf",
        'texcvbcvtq' => "sdfadskkkkkkkkkkkkkkkkkkkkkkkkkkkkkahsdjfkasdfasdfasdfasdfasdfsadfasdfasdfasdfasdfasdfasdfasdfasdf",
        'texwercbvtz' => "sdfadskkkkkkkkkkkkkkkkkkkkkkkkkkkkkahsdjfkasdfasdfasdfasdfasdfsadfasdfasdfasdfasdfasdfasdfasdfasdf",

        'texwergft' => "sdfadskkkkkkkkkkkkkkkkkkkkkkkkkkkkkahsdjfkasdfasdfasdfasdfasdfsadfasdfasdfasdfasdfasdfasdfasdfasdf",
        'textvbnvh1' => "sdfadskkkkkkkkkkkkkkkkkkkkkkkkkkkkkahsdjfkasdfasdfasdfasdfasdfsadfasdfasdfasdfasdfasdfasdfasdfasdf",
        'tefghfvcvbnxt2' => "sdfadskkkkkkkkkkkkkkkkkkkkkkkkkkkkkahsdjfkasdfasdfasdfasdfasdfsadfasdfasdfasdfasdfasdfasdfasdfasdf",
        'texcbnsewst3' => "sdfadskkkkkkkkkkkkkkkkkkkkkkkkkkkkkahsdjfkasdfasdfasdfasdfasdfsadfasdfasdfasdfasdfasdfasdfasdfasdf",
        'textbxvbx4' => "sdfadskkkkkkkkkkkkkkkkkkkkkkkkkkkkkahsdjfkasdfasdfasdfasdfasdfsadfasdfasdfasdfasdfasdfasdfasdfasdf",
        'texbvnmht5' => "sdfadskkkkkkkkkkkkkkkkkkkkkkkkkkkkkahsdjfkasdfasdfasdfasdfasdfsadfasdfasdfasdfasdfasdfasdfasdfasdf",
        'texdrertt6' => "sdfadskkkkkkkkkkkkkkkkkkkkkkkkkkkkkahsdjfkasdfasdfasdfasdfasdfsadfasdfasdfasdfasdfasdfasdfasdfasdf",
        'textdfgd' => "sdfadskkkkkkkkkkkkkkkkkkkkkkkkkkkkkahsdjfkasdfasdfasdfasdfasdfsadfasdfasdfasdfasdfasdfasdfasdfasdf",
        'tedfgdfgxtf' => "sdfadskkkkkkkkkkkkkkkkkkkkkkkkkkkkkahsdjfkasdfasdfasdfasdfasdfsadfasdfasdfasdfasdfasdfasdfasdfasdf",
        'texdfgdfgdfgdfgtsd' => "sdfadskkkkkkkkkkkkkkkkkkkkkkkkkkkkkahsdjfkasdfasdfasdfasdfasdfsadfasdfasdfasdfasdfasdfasdfasdfasdf",
        'texiolkitx' => "sdfadskkkkkkkkkkkkkkkkkkkkkkkkkkkkkahsdjfkasdfasdfasdfasdfasdfsadfasdfasdfasdfasdfasdfasdfasdfasdf",
        'tegkuxthg' => "sdfadskkkkkkkkkkkkkkkkkkkkkkkkkkkkkahsdjfkasdfasdfasdfasdfasdfsadfasdfasdfasdfasdfasdfasdfasdfasdf",
        'tex,kjtq' => "sdfadskkkkkkkkkkkkkkkkkkkkkkkkkkkkkahsdjfkasdfasdfasdfasdfasdfsadfasdfasdfasdfasdfasdfasdfasdfasdf",
        'texjkljtz' => "sdfadskkkkkkkkkkkkkkkkkkkkkkkkkkkkkahsdjfkasdfasdfasdfasdfasdfsadfasdfasdfasdfasdfasdfasdfasdfasdf",

        'werwe' => "sdfadskkkkkkkkkkkkkkkkkkkkkkkkkkkkkahsdjfkasdfasdfasdfasdfasdfsadfasdfasdfasdfasdfasdfasdfasdfasdf",
        'gdfgdfbhdx' => "sdfadskkkkkkkkkkkkkkkkkkkkkkkkkkkkkahsdjfkasdfasdfasdfasdfasdfsadfasdfasdfasdfasdfasdfasdfasdfasdf",
        'ngnbt' => "sdfadskkkkkkkkkkkkkkkkkkkkkkkkkkkkkahsdjfkasdfasdfasdfasdfasdfsadfasdfasdfasdfasdfasdfasdfasdfasdf",
        'vbcvb' => "sdfadskkkkkkkkkkkkkkkkkkkkkkkkkkkkkahsdjfkasdfasdfasdfasdfasdfsadfasdfasdfasdfasdfasdfasdfasdfasdf",
        'cvbcvb' => "sdfadskkkkkkkkkkkkkkkkkkkkkkkkkkkkkahsdjfkasdfasdfasdfasdfasdfsadfasdfasdfasdfasdfasdfasdfasdfasdf",
        'wqwx' => "sdfadskkkkkkkkkkkkkkkkkkkkkkkkkkkkkahsdjfkasdfasdfasdfasdfasdfsadfasdfasdfasdfasdfasdfasdfasdfasdf",
        'erterter' => "sdfadskkkkkkkkkkkkkkkkkkkkkkkkkkkkkahsdjfkasdfasdfasdfasdfasdfsadfasdfasdfasdfasdfasdfasdfasdfasdf",
        'ertert' => "sdfadskkkkkkkkkkkkkkkkkkkkkkkkkkkkkahsdjfkasdfasdfasdfasdfasdfsadfasdfasdfasdfasdfasdfasdfasdfasdf",
        'eee' => "sdfadskkkkkkkkkkkkkkkkkkkkkkkkkkkkkahsdjfkasdfasdfasdfasdfasdfsadfasdfasdfasdfasdfasdfasdfasdfasdf",
        'fgr' => "sdfadskkkkkkkkkkkkkkkkkkkkkkkkkkkkkahsdjfkasdfasdfasdfasdfasdfsadfasdfasdfasdfasdfasdfasdfasdfasdf",
        'vvv' => "sdfadskkkkkkkkkkkkkkkkkkkkkkkkkkkkkahsdjfkasdfasdfasdfasdfasdfsadfasdfasdfasdfasdfasdfasdfasdfasdf",
        'ccc' => "sdfadskkkkkkkkkkkkkkkkkkkkkkkkkkkkkahsdjfkasdfasdfasdfasdfasdfsadfasdfasdfasdfasdfasdfasdfasdfasdf",
        'ewr' => "sdfadskkkkkkkkkkkkkkkkkkkkkkkkkkkkkahsdjfkasdfasdfasdfasdfasdfsadfasdfasdfasdfasdfasdfasdfasdfasdf",
        'ssdf' => "sdfadskkkkkkkkkkkkkkkkkkkkkkkkkkkkkahsdjfkasdfasdfasdfasdfasdfsadfasdfasdfasdfasdfasdfasdfasdfasdf",

    ];
    MongoDebug::insert($query);
}
$time = time() - $time;
echo $time;

