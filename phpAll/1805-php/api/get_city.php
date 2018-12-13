<?php 
	
	/*
		根据ip地址爬取城市信息
			* file_get_contents($url)

		接口地址：http://ip.taobao.com/service/getIpInfo.php?ip=
	 */
	
	// 获取ip地址
	$ip = isset($_GET['ip']) ? $_GET['ip'] : null;

	//通过url爬去ip地址
	$content = file_get_contents('http://ip.taobao.com/service/getIpInfo.php?ip='.$ip);//得到json字符串

	// json字符串转为数组array
	$res = json_decode($content);

	echo json_encode($res->data,JSON_UNESCAPED_UNICODE);

?>