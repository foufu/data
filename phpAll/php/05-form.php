<?php 

/*
		判断用户名是否已被注册
	    该地址用于验证所提交的用户名是否存在，如果存在，返回字符串fasle，不存在返回true)
	    已经存在的名字：'张三','李四','王尼玛','奥巴马'

	    in_array()
	 */
	    // 接收前端请求数据
	    $regname = $_GET['regname'];

	    // 放置已存在的用户名
	    $already = array(
	    	'小猪佩奇',
	    	'熊大',
	    	'小关',
	    	'小姐姐',
	    	'大哥哥'
	    );

	    // 判断用户名是否已存在
	    if(in_array($regname,$already)){
	    	echo 'no';
	    }else{
	    	echo 'yes';
	    }



?>