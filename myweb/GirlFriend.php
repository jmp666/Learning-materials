<?php
/*
php标准格式；
学习模板！
*/
header("content-type:text/html;charset=UTF-8");
/*
 课堂练习
1.编写一个GirlFriend 有( name, age, 颜值 三个  属性 )
2. 不管你怎么操作 ，始终只能得到一个GirlFirend对象。
*/
class GirlFriend{
	public $name;
	public $age;
	public $appearance;
	private static $instanceof = null;
	private function __construct($name,$age,$appearance){
		$this->name = $name;
		$this->age = $age;
		$this->appearance = $appearance;
	}
	//防止克隆
	private function __clone(){

	}
	public static function getobj($name,$age,$appearance){
		if(!(self::$instanceof instanceof self)){
			self::$instanceof = new self($name,$age,$appearance);
		}
		return self::$instanceof;
	}
	//先测试能不能new对象
}
$NewObj = GirlFriend::getobj('林黛玉',20,'漂亮');
$NewObj2 = GirlFriend::getobj('张黛玉',20,'漂亮');
//$NewObj3 = clone $NewObj2;
if($NewObj===$NewObj2){
	echo '<br>一个对象';
}else{
	echo '<br>俩个对象';
}
var_dump($NewObj,$NewObj2);
?>