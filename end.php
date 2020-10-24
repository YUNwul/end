<?php

//filename end.php

$bilibili = "bilibili1024havefun";

$str = intval($_GET['id']);
$reg = preg_match('/\d/is', $_GET['1']);

if(!is_numeric($_GET['1']) and $reg !== 1 and $str === 1){
	$content = file_get_contents($_GET['url']);
	
	//文件路径猜解
	if (false){
		echo "还差一点点啦～";
	}else{
		echo $flag;
	}
}else{
	echo "你想要的不在这儿～";
}
?>
