<?php
/*
php标准格式；
学习模板！
*/
header("content-type:text/html;charset=UTF-8");
//类的自动加载__autoload()
/*
很多开发者写面向对象的应用程序时对每个类的定义建立一个 PHP 源文件。一个很大的烦恼是不得不在每个脚本开头写一个长长的包含文件列表（每个类一个文件）。 

在 PHP 5 中，不再需要这样了。可以定义一个 __autoload()  函数，它会在试图使用尚未被定义的类时自动调用。通过调用此函数，脚本引擎在 PHP 出错失败前有了最后一个机会加载所需的类。

*/
spl_autoload_register('my_autoload');
//可以自动注册一个自动加载类的函数名字自己随便取
$array_list = $arrayName = array('Dog' =>'./dog/Dog.class.php',
	'Cat' =>'./cat/Cat.class.php',
	'Monkey' =>'./monkey/Monkey.class.php');
/*
function __autoload($class_name){
	global $array_list;
	//echo $class_name;
	require $array_list[$class_name];
}*/
function my_autoload($class_name){
	global $array_list;
	//echo $class_name;
	require $array_list[$class_name];
}
$Newcat = new Cat();
$Newcat->cry();
$Newdog = new Dog();
$Newdog->cry();
$Newmonkey = new Monkey();
$Newmonkey->cry();


?>