<?php
error_reporting(0); // 设置错误等级

$md5  = $_GET['con'];
$type = (!empty($_GET['type'])) ? $_GET['type'] : 1; // 加密类型

// 判断类型返回结果 
if($type == '1'){ // 32大
	$results  = strtoupper(md5($md5));
}elseif($type == '2'){ // 32小
	$results =  strtolower(md5($md5));
}elseif($type == '3'){ // 16大
	$results = strtoupper(substr(md5($md5),8,16));
}else{ // 16小
	$results = strtolower(substr(md5($md5),8,16));
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" rel="stylesheet" href="style.css" />
<title>尘烟MD5在线加密工具v1.0</title>
</head>
<body>
	<div class="wrap">
		<div class="con">
			<div class="top">
				<form action="" method="get">请输入欲加密的字符串：
				<input type="text" x-webkit-speech onmouseover="this.focus()" onFocus="this.select()" tips="1" class="strCon" name="con" id="con" value="<?php echo $md5;?>" />
			</div>
			<div class="bot">
				<div class="types">
					加密类型选择：
					<input id="32d" name="type" value="1" <?php if($type==1) echo "checked";?> type="radio" /><label for="32d">32[大]</label>
					<input id="32x" name="type" value="2" <?php if($type==2) echo "checked";?> type="radio" /><label for="32x">32[小]</label>
					<input id="16d" name="type" value="3" <?php if($type==3) echo "checked";?> type="radio" /><label for="16d">16[大]</label>
					<input id="16x" name="type" value="4" <?php if($type==4) echo "checked";?> type="radio" /><label for="16x">16[小]</label>
				</div>
				<div class="sub">
					<input type="submit" id="sub" class="but" value="开始加密运算"/></form>
				</div>
				</form>
				<div class="result">
					<div class="word"><?php if($_GET['con'] == ""){ echo "暂未对任何字符进行md5加密计算哦~";}else{ echo $results; }?></div>
				</div>
			</div>
		<div class="bottom">
			Copyright © 2015-2016 phpol.cn Inc. All Rights Reserved Powered by <a href="http://www.phpol.cn" target="_blank">PHP教程</a>
		</div>
	</div>
</body>
</html>