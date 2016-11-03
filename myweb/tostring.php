<?php
/*
php标准格式；
学习模板！
*/
header("content-type:text/html;charset='UTF-8'");
//类的魔术方法tostring
class Monster{
	private $name;
	private $skill;
	private $age;
	public function __construct($Monster_name,$Monster_skill,$Monster_age){
	$this->name=$Monster_name;
	$this->skill=$Monster_skill;
	$this->age=$Monster_age;
	}
	public function __toString(){
		return '名字：' . $this->name .'本领：'. $this->skill .'年龄：'. $this->age;
	}
}	

$Monster_data = new Monster('野猪','拱树',500);
echo $Monster_data;
?>