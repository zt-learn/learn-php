<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 3/20 0020
 * Time: 11:52
 */


autoinc();
//findTest();
//insertTest();
//deleteTest();
//updateTest();
function autoinc()
{
	$conn = new Mongo();
	$db = $conn->test;
	$update = array('$inc'=>array("msg1"=>1));
	$query = array('name'=>'user');
	$command = array(
		'findandmodify'=>'ids', 'update'=>$update,
		'query'=>$query, 'new'=>false, 'upsert'=>false
	);
	$id = $db->command($command);
	print_r($id);
}

function findOneTest()
{
	$conn = new Mongo();
	$db = $conn->test;
	$ret = $db->user->findOne(array('uid'=>1));
	print(count($ret));
	print_r($ret);
}

// 如果当键值重复后，捕捉错误。
function insertErrorTest()
{

	$conn = new Mongo();
	$db = $conn->test;
	try {
		$db->test->insert(array('_id'=>'abcd1','name'=>"TT"),array("w"=>1));
	}
	catch(MongoCursorException $e) {
		//echo "save data error";
		echo "error message:" . $e->getMessage() . "\n";
		echo "error code:" . $e->getCode() . "\n";
	}

}

// 如何从集合中删除数据
function deleteTest()
{
	$conn = new Mongo();
	$db = $conn->test;
	$db->test->remove(array('_id'=>'abcd1'));
}

// 如何更新集合中的数据
function updateTest()
{
	$conn = new Mongo();
	$newdata = array('$set'=>array("address"=>"上海"));
	$db = $conn->test;
	$db->test->update(array('_id'=>'abcd1'),$newdata);
	//下面注释掉的这句，当查找的键值不存在，就
	//$db->test->update(array('_id'=>'abcd1'),$newdata,array("upsert" => true));
}

