<?php
	/*打开图片*/
	$src = 'image/2.png';
	$info = getimagesize($src);
	$type = image_type_to_extension($info[2],false);
	$fun = "imagecreatefrom{$type}";
	$image = $fun($src);
	/*编辑图片*/
		// 1.在内存中建立一个宽300,高200的真色彩图片
		$image_thumb = imagecreatetruecolor(100, 100);
		// 2.将原图复制到新建的真彩色图片上,并且按照一定比例压缩
		imagecopyresampled($image_thumb, $image, 0, 0, 0, 0, 100, 100, $info[0], $info[1]);
		// 3.销毁原始图片
		imagedestroy($image);
	/*输出图片*/
		// 把图片输出到浏览器
		header("Content-type:".$info['mime']);
		$func = "image{$type}";
		$func($image_thumb);
		//保存到硬盘里
		$func($image_thumb,"thumb1.".$type);
	/*销毁图片*/
		imagedestroy($image_thumb);
?>