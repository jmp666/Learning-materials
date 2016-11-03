<?php
/*
php标准格式；
学习模板！
*/
header("content-type:text/html;charset=UTF-8");
/*
要求:
编写一个银行账号类（属性有 账号，密码，开户名，余额）
账号是公开的，开户名是 保护的，密码和余额是私有的.初始密码是 123456.
银行账号可以 存钱[需提供密码]，取钱[需提供密码]，显示余额[需提供密码]，显示开户名， 修改密码[需提供原来的密码]

*/
class Bank{
	public $user;
	protected $name;
	private $balance;
	private $password='123456';
	public function __construct($user,$name,$balance,$password){
		$this->name=$name;
		$this->user=$user;
		$this->balance=$balance;
		$this->password=$password;
	}
	//存钱需提供密码
	public function SaveMoney($password,$Money){
		if(empty($password)){
			echo '密码不能为空';
			return false;
		}
		if($this->password==$password){
			$this->balance+=$Money;
			return true;
		}else{
			echo '密码错误';
			return false;
		}
	}
	//取钱需提供密码
	public function TakeMoney($password,$Money){
		if(empty($password)){
			echo '密码不能为空';
			return false;
		}
		if($this->password==$password){
			if(intval($Money) > $this->balance){
				echo '非法操作！余额不足';
				return false;
			}
			$this->balance-=$Money;
			return true;
		}else{
			echo '密码错误';
			return false;
		}
	}
	//显示余额需提供密码
	public function ShowBalance($password){
		if(empty($password)){
			echo '密码不能为空';
			return false;
		}
		if($this->password==$password){
			echo $this->balance;
			return $this->balance;
		}
	}
	//显示开户名
	public function ShowUser(){
		return $this->name;
	}
	//修改密码需提供原来的密码
	public function ModifyPassword($OriginalPassword,$NewPassword){
		if(empty($OriginalPassword) || empty($NewPassword)){
			echo '密码与新密码不能为空!';
			return false;
		}
		if($this->password==$OriginalPassword){
			$this->password=$NewPassword;
			return true;
		}
	}
}

$Newbank = new Bank('6228481698729890079','张三',8000,'123456');
$Newbank->ModifyPassword('123456','654321');
$Newbank->SaveMoney('654321',2000);
$Newbank->TakeMoney('654321',1000);
echo '<br>' . $Newbank->ShowBalance('654321').'开户名：' . $Newbank->ShowUser();
echo '<pre>';
var_dump($Newbank);
?>