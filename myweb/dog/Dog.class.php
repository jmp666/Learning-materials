<?php
/*
php标准格式；
学习模板！
*/
header("content-type:text/html;charset=UTF-8");
//狗类
class Dog{
	public function __construct(){}
	public function cry(){
		echo '<br>' . '小狗汪汪叫';
	}
}		
?>