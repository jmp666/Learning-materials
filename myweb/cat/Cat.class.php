<?php
/*
php标准格式；
学习模板！
*/
header("content-type:text/html;charset=UTF-8");
//猫类
class Cat{
	public function __construct(){}
	public function cry(){
		echo '<br>' . '小猫喵喵叫';
	}
}		
?>