<?php
/*
php标准格式；
学习模板！
*/
header("content-type:text/html;charset=UTF-8");
class Clild{
	public $Name;
	//内部访问静态属性方式 类名::静态属性、或者self::静态属性名
	public static $count;
	public function __construct($name){
		$this->Name=$name;
	}
	public function joinGame(){
		self::$count++;
		echo '<br>' . $this->Name .'加入游戏';
	}
	public function GetNumber(){
		return self::$count;
	}
}
$NewChild = new Clild('张三');
$NewChild->joinGame();
$NewChild2 = new Clild('李四');
$NewChild2->joinGame();
$NewChild3 = new Clild('王五');
$NewChild3->joinGame();
echo '<br>' . $NewChild3->GetNumber();
echo '<br>' . Clild::$count;	//外部访问静态属性方式 类名::静态属性前提这个静态变量必须是一个共有的属性

?>