<?php 

	//$a是排序数组，$b是要排序的数据集合，$result是最终结果
	$b = array(
	  array('name'=>'北京','nums'=>'200'),
	  array('name'=>'上海','nums'=>'80'),
	  array('name'=>'广州','nums'=>'150'),
	  array('name'=>'深圳','nums'=>'70')
	  );

	$a = array();
	
	foreach($b as $key=>$val){
	  $a[] = $val['nums'];//这里要注意$val['nums']不能为空，不然后面会出问题
	}
	//$a先排序
	rsort($a);
	$a = array_flip($a);
	$result = array();
	foreach($b as $k=>$v){
	  $temp1 = $v['nums'];
	  $temp2 = $a[$temp1];
	  $result[$temp2] = $v;
	}
	//这里还要把$result进行排序，健的位置不对
	ksort($result);
	//然后就是你想看到的结果了
	var_dump($result);

?>