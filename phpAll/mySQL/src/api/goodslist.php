<?php 
	
	/*
		商品列表
			返回所需商品

		操作数据库
			读取数据
				select * from...
	*/



	// 引入connect
	include 'connect.php';
	// var_dump($conn);


	// 接收前端数据
	$sort = isset($_GET['sort']) ? $_GET['sort'] : '';
	$desc = isset($_GET['desc']) ? true : false;
	

	// 查询
	$sql = "select * from goodslist";


	// 判断前端是否有传参数
	if($sort){
		// 空格不能少（拼接的时候没有空格会导致识别问题）
		// 升序
		$sql .= " order by $sort*1";

		// 降序
		if($desc){
			$sql .= " desc";
		}
	}


	

	// echo $sql;




	// 读取数据：获取查询结果集
	 $result = $conn->query($sql);


    //使用查询结果集
    //得到数组：从集合中获取所有数据
    $row = $result->fetch_all(MYSQLI_ASSOC);


    //释放查询结果集，避免资源浪费
    $result->close();


     // 关闭数据库，避免资源浪费
    $conn->close();


    //把结果输出到前台
    echo json_encode($row,JSON_UNESCAPED_UNICODE);





?>