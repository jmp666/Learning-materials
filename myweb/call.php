<?php
/*
php标准格式；
学习模板！
*/
header("content-type:text/html;charset=UTF-8");
//类的魔术方法 __call()
//在对象中调用一个不可访问方法时，__call() 会被调用。	
/*
要求: 
请编写一个Cat类(有 年龄, 名字 二个属性)，要求二个属性全部都是public。
Cat类有一个 方法 jiSuan($n1, $n2, $oper) 可以计算+ - * / 是私有的.
在类外部，$对象名->play('jiSuan', $n1, $n2, $oper) 得到结果，注意play这个方法，在类中不没有定义.
*/	
class Cat{
	public $name;
	public $age;
	private function jiSuan($n1,$n2,$oper){
		//echo $n1 . $n2 .$oper . '<br>';
		$val = 0;
		switch ($oper) {
			case '+':
				$val = $n1+$n2;
				break;
			case '-':
				$val = $n1-$n2;
				break;
			case '*':
				$val = $n1*$n2;
				break;
			case '/':
				$val = $n1/$n2;
				break;	
			default:
				echo '运算符错误';
				break;
		}

		return $val;
	}
	public function __call($func_name,$func_arrval){
		/*
		echo '<pre>';
		var_dump($func_name,$func_arrval);
		*/
		if($func_arrval[0] =='jiSuan'){
		return $this->$func_arrval[0]($func_arrval[1],$func_arrval[2],$func_arrval[3]);
		}
		else
		{
			echo '错误的方法名';
		}
		
	}
}

$NewCat = new Cat('小花猫',5);
$ret = $NewCat->play('jiSuana',10,5,'+');
echo $ret;
?>