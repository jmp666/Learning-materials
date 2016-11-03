<?php
	header("content-type:text/html;charset=utf-8");
	//析构方法

	class Person{
		public $name;
		public $age;
		public $my_link;
		//构造函数
		public function __construct($name, $age){
			$this->name = $name;
			$this->age = $age;
			$this->my_link = @mysql_connect('localhost', 'root', 'root');
		}

		//析构方法
		//1. 当程序执行结束后，析构方法会被调用
		//2. 析构方法调用的顺序, 先创建的对象，后被销毁，后创建的对象，先被销毁
		//3. 当没有变量指向某个对象时，这个对象就会被销毁，在销毁前，触发析构方法
		//4. 析构方法，不能销毁对象，是在系统销毁该对象时，触发析构方法，我们可以把资源的释放放到这里写
		public function __destruct(){
			//这里可以去释放资源
			mysql_close($this->my_link);
			echo '<br> __destruct()' . $this->name;
		}

	}

	//创建对象
	$p1 = new Person('悟空', 500);

	//使用$p1 开始完成相关的任务
	//..
	// $p1 
	//...
	//当我使用完$p1,程序没有没结束，还有代码执行
	//但是我希望，马上销毁$p1,并且啊$p1的资源也销毁
	$sql = 'SELECT * FROM students';
	@mysql_select_db('db1');
	$res = @mysql_query($sql, $p1->my_link);
	while($row = @mysql_fetch_assoc($res))
	{
		echo '<pre>';
		var_dump($row);
	}
	
	$p1 = null;
	echo '<pre>';
	//var_dump($p1);
	//当$p1对象销毁了，但是它的资源没有销毁，而我们资源又是比较珍贵的。
	

	$sql = 'SELECT * FROM ttt';
	$res = @mysql_query($sql);
	while($row = @mysql_fetch_assoc($res))
	{
		echo '<pre>';
		var_dump($row);
	}
	
	echo 'aaa';

	//unset($p1);
	//$p1 = null;
	//$p1 = 'abc';
	


	$p2 = new Person('八戒', 400);
	$p3 = new Person('沙和尚', 300);
