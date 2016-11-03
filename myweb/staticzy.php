<?php
/*
php标准格式；
学习模板！
*/
header("content-type:text/html;charset=UTF-8");
class Preson{
	public $name;
	public $cake;
	public static $cakenum=1000;
	public function __construct($name){
		$this->name = $name;
	}
	public function eat($num){
		for($i=0;$i<$num;$i++){
			self::$cakenum-=3;
			self::$cakenum-=5;
			self::$cakenum-=9;
			self::$cakenum-=30;
		}
		//return self::$cakenum;
	}
	public function showcake(){
		echo '<br>' . '还剩下' . self::$cakenum . '块蛋糕';
	}
}
$Ts = new Preson('唐僧');
$Swk = new Preson('孙悟空');
$ShS = new Preson('沙和尚');
$Zbj = new Preson('猪八戒');
$Zbj->eat(2);
$Zbj->showcake();
?>