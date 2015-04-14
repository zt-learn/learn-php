<?php

function mid($name, $db)
{
    $update = array('$inc' => array("id" => 1));
    $query = array('name' => $name);
    $command = array(
        'findandmodify' => 'ids', 'update' => $update,
        'query' => $query, 'new' => true, 'upsert' => true
    );
    $id = $db->command($command);
    print_r($id);
    return $id['value']['id'];
}

$mongoClient = new MongoClient("10.10.10.123");
$db = $mongoClient->selectDB('leo');

$id = mid('user', $db);

$db->selectCollection('user')->save(
    [
        'gameId' => $id + 10000000,
        "useridx" => "1784574",
        "name" => "田雨青",
        "avatartype" => "1",
        "floor" => "96",
        "level" => "8",
        "starcount" => "402",
        "herocount" => "7",
        "coin" => "102840",
        "heartmax" => "5",
        "heartmax_plus" => "0",
        "heartcount" => "5",
        "heartseconds" => "368769",
        "birthday" => "07/01/1975",
        "lastfailcount" => "1",
        "membershiptype" => "0",
        "membershipleftseconds" => "0",
        "membershipstartdate" => "",
        "heartleftseconds" => 1800,
        "episodeunlocklist" => [
            [
                "A" => "1",
                "B" => "2",
                "C" => "1",
                "D" => "0",
                "E" => "1",
                "F" => "0",
                "G" => "1",
                "H" => "0",
                "I" => "",
                "J" => "",
                "K" => "",
                "L" => "1518848581661843",
                "M" => "40672435"
            ],
            [
                "A" => "2",
                "B" => "2",
                "C" => "1",
                "D" => "0",
                "E" => "1",
                "F" => "0",
                "G" => "1",
                "H" => "0",
                "I" => "",
                "J" => "",
                "K" => "",
                "L" => "1518848581661843",
                "M" => "39252135"
            ]
        ],
        "startupitem" => [
            "IU1" => "1",
            "IU2" => "1",
            "IU3" => "1",
            "IU4" => "1",
            "IU5" => "1",
            "IU6" => "1",
            "IU7" => "1",
            "I1" => "0",
            "I2" => "2",
            "I3" => "2",
            "I4" => "0",
            "I5" => "2",
            "I6" => "7",
            "I7" => "2"
        ],
        "ingameitem" => [
            "IU1" => "1",
            "IU2" => "1",
            "IU3" => "1",
            "IU4" => "0",
            "IU5" => "1",
            "I1" => "1",
            "I2" => "2",
            "I3" => "1",
            "I4" => "0",
            "I5" => "1"
        ],
        "opendailystamp" => "0",
        "opendailyfreecoin" => "0",
        "openbirthday" => "0",
        "openwelcomeback" => "0",
        "openheartchance" => "0",
        "opengiftlist" => "",
        "openmobiledownload" => "0",
        "openhexacross" => "0",
        "opensecretepisode" => "0",
        "notowercoin" => "0",
        "paymenttotal" => "5.200000107288361",
        "paymentlife" => "5.200000107288361",
        "paymentcoin" => "0",
        "paymentseconds" => "1917234",
        "secretepisodelist" => [
            [
                "A" => "1",
                "B" => "2"
            ],
            [
                "A" => "2",
                "B" => "1"
            ]
        ],
        "weeklyidx" => "39",
        "leftseconds" => "503031",
        "openweeklyintro" => "39",
        "openweeklyreward" => "0",
        "servertime" => 1428999369,
        "packet_status" => 0,
        "friends" => [
            [
                "A" => "2486634",
                "B" => "100002418800020",
                "C" => "田上鲁",
                "D" => "1",
                "E" => "9",
                "F" => "3",
                "G" => "36",
                "H" => "0",
                "I" => "4",
                "J" => "2",
                "K" => "171613",
                "L" => "0"
            ],
            [
                "A" => "2151155",
                "B" => "100006622688686",
                "C" => "章文",
                "D" => "2",
                "E" => "191",
                "F" => "9",
                "G" => "890",
                "H" => "14",
                "I" => "5",
                "J" => "5",
                "K" => "31940975",
                "L" => "0"
            ],
        ],
        "nogiftfriends" => ""
    ]
);

$mongoClient->close();

?>