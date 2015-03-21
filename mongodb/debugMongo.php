<?php

/*
$collection = $db->createCollection("mycol");
$document = array( 
      "title" => "MongoDB", 
      "description" => "database", 
      "likes" => 100,
      "url" => "http://www.w3cschool.cc/mongodb/",
      "by", "w3cschool.cc"
   );
   $collection->insert($document);
   $cursor = $collection->find();
   foreach ($cursor as $document) {
      echo $document["title"] . "\n";
   }
   */
   function mid($name, $db){
$update = array('$inc'=>array("id"=>1));
$query = array('name'=>$name);
$command = array(
'findandmodify'=>'ids', 'update'=>$update,
'query'=>$query, 'new'=>true, 'upsert'=>true
);
$id = $db->command($command);
print_r($id);
return $id['value']['id'];
}
 
$conn = new Mongo();
$db = $conn->test;
$id = mid('user', $db);
$db->user->save(array('uid'=>$id, 'username'=>'kekeles', 'password'=>'kekeles', 'info'=>'http://blog.dotcoo.com/'));
$conn->close();

?>