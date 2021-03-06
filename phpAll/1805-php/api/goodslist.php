<?php 
	/*

		商品列表
			[{},{},{}]   数值数组包含多个关联数组
	*/

			// 创建一个数值数组
			$goodslist = array();

			// 利用数组存放多个价格
			// 然后随机获取一个价格
			$prices = array(999,899,799,998,977,678,9879,7879,68,7999,6666);
			$colors = array('黑色','白色','灰色','土豪金','玫瑰金','绿色','骚粉','红色');

			for($i=0;$i<50;$i++){
				// 每循环一次创建一个关联数组（商品）
				$goods = array(
					'guid' => "$i",
					'name' => "热销商品$i",
					'imgurl' => "../img/$i.jpg",
					'price' => $prices[array_rand($prices)],
					'color' => $colors[array_rand($colors)]
				);


				
				// 写入数组
				$goodslist[] = $goods;
			
}
			// 转换成json字符串
			echo json_encode($goodslist,JSON_UNESCAPED_UNICODE);


?>