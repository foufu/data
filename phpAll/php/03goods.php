<?php  
	// 创建加个数组
	$price = array(999,888,8009,8989,666,5788,9899);
	// 创建空数组，用于存放商品列表
	$goodslist = array();

	for($i=0;$i<10;$i++){
		$goods = array(
			'name'=> '商品' .$i,
			'price'=>$price[array_rand($price)],
			'imgurl'=>"../img/16".$i.".jpg"
		);	


		// 将$goods写入$goodslist
		$goodslist[] = $goods;
	}

	// 价格排序：高->低
	

	echo json_encode($goodslist,JSON_UNESCAPED_UNICODE);



?>