<?php
/*
php标准格式；
学习模板！
*/
header("content-type:text/html;charset=utf-8");
//__clone克隆
class sheep{
	private $name;
	private $foor;
	public function __construct($name,$foor){
		$this->name=$name;
		$this->foor=$foor;
	}
	public function setFoor($Foor){
		$this->foor=$Foor;
	}
	//当复制完成时，如果定义了 __clone() 方法，则新创建的对象（复制生成的对象）中的 //__clone() 方法会被调用，可用于修改属性的值（如果有必要的话）。
	//如果不想别人重新创建一个单独的对象可以重载__clone()函数
	//这样设置为私有的别人就无法调用克隆函数了
	public function __clone(){
		echo '__clone执行成功！';
	}
}
$sheep1 = new sheep('小羊','草');
$sheep2 = clone $sheep1;
$sheep2->setFoor('青草');
echo '<pre>';
var_dump($sheep1);
var_dump($sheep2);
?>