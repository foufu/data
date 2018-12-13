<?php 
	// 类
	class  Gril {
		// 构造函数 
		function __construct($name,$age){
			// 给实例定义属性
			$this->name = $name;
			$this->age = $age;
			$this->gender ='女';
		}

		// 定义对象的方法:(方法与方法之间可以互相调用)
		function eat(){
			return "我是$this->name , 我好喜欢你哇";
		}

		function say(){
			return "$this->name 胖子 , 你死定了";
		}

		function sun(){
			return "$this->name , 放学别走";
		}

		function aa($name){
			$this->name = $name;
		}

	}
	// 实例化（创建）new
	$yy = new Gril('yy',33);

	$xx = new Gril('xx',22);
	$aa = new Gril('aa',22);

	// $yy->aa('叫爸爸');

	$yy->sun('叫爸爸');
	var_dump($yy);
	print_r($yy->sun());

	 // var_dump($yy,$xx,$aa->say());
	 // var_dump($yy->eat(),$yy->sun(),$yy->say())
?>