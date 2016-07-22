<?php
	$ch = curl_init();
	$url = 'http://apis.baidu.com/txapi/keji/keji?num=10&page=1';
		
	//$url = 'http://apis.baidu.com/songshuxiansheng/real_time/search_news?keyword=体育&page=1&count=40';
	$header = array('apikey: 6235d8e9e2c735a3f9067ace6418bed3',);
	//添加apikey到header
	curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_URL, $url);
	//执行HTTP请求
	$res = curl_exec($ch);
	//var_dump(json_decode($res));
	echo $res;
?>
