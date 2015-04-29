<?php 
	class MongoDbs{
		private static $MongoObj = null;
		private static $collection = null;
		
		private function __construct(){
			
		}
		
		
		public static function init( $db = 'comedy' , $table='mycol' ){
			if(empty(self::$MongoObj)){
				self::$MongoObj = new MongoDbs;
			}
			$mongo = new mongo();
			$db = $mongo->$db;
			self::$collection = $db->$table;
			return self::$MongoObj;
		}
		
		/**
		  * http://us.php.net/manual/en/mongocollection.insert.php
		  *	MongoCollection::insert(array $a,array $options)
		  *	array $a 要插入的数组
		  *	array $options 选项
		  *	safe 是否返回操作结果信息
		  *	fsync 是否直接插入到物理硬盘
		 */
		public function insert($title='default' , $message='default'){
			$data = array('title'=>$title,'message'=>$message);
			self::$collection->insert($data);
		}
		
		
		/**
		 * http://us.php.net/manual/en/mongocollection.remove.php
		 *	MongoCollection::remove(array $criteria,array $options)
		 *	array $criteria  条件
		 *	array $options 选项
		 *	safe 是否返回操作结果
		 *	fsync 是否是直接影响到物理硬盘
		 *	justOne 是否只影响一条记录 
		 */
		public function remove( $id ){
			$id = new MongoId($id);
			return self::$collection->remove( array('_id'=> $id) , array('safe'=>true,'justOne'=>true) );
		}
		
		/**
		  * http://us.php.net/manual/en/mongocollection.update.php
		  *	MongoCollection::update(array $criceria,array $newobj,array $options)
		  *	array $criteria  条件
		  *	array $newobj 要更新的内容
		  *	array $options 选项
		  *	safe 是否返回操作结果
		  *	fsync 是否是直接影响到物理硬盘
		  *	upsert 是否没有匹配数据就添加一条新的
		  *	multiple 是否影响所有符合条件的记录，默认只影响一条
		 */
		public function update( $id, $title, $message ){
			$id = new MongoId($id);
			return self::$collection->update(array('_id'=>$id),array('title'=>222,'message'=>333) );
			
		}
		
		/**
		  * http://us.php.net/manual/en/mongocollection.findone.php
		  *	arrayMongoCollection::findOne(array $query,array $fields)
		  *	array $query 条件
		  *	array $fields 要获得的字段
		 */
		public function find( $id ){
			$id = new MongoId($id);
			$where = array('_id'=>$id);
			$result = self::$collection->findOne($where);
			return $result;
		}
 
		public function __call( $method, $params ){
				
		}
		
		public function __destruct(){
			
		}
	}
	
?>