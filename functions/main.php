<?php
	session_start();
	
	function redirect($path){
		header('Location: ' . $path);
		die(); //тут можно написать сообщение
	}

	function dump($obj){
		echo '<pre>' . print_r($obj, true) . '</pre>';
	}


	function check_mobile_device() { 
	$mobile_agent_array = array('ipad', 'iphone', 'android', 'pocket', 'palm', 'windows ce', 'windowsce', 'cellphone', 'opera mobi', 'ipod', 'small', 'sharp', 'sonyericsson', 'symbian', 'opera mini', 'nokia', 'htc_', 'samsung', 'motorola', 'smartphone', 'blackberry', 'playstation portable', 'tablet browser');
	$agent = strtolower($_SERVER['HTTP_USER_AGENT']);    
	foreach ($mobile_agent_array as $value) {    
		if (strpos($agent, $value) !== false) return true;   
	};     
	return false; 
	};
