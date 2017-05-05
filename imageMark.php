<?php
	/*打开图片*/
		// 1.配置图片路径
		$src = 'image/2.png';
		// 2.获取图片的基本信息
		$info = getimagesize($src);
		// 3.获取图片后缀名
		$type = image_type_to_extension($info[2],false);
		// 4.在内存中创建一个和我们图像一致的类型
		$fun = "imagecreatefrom{$type}";
		// 5.把要操作的图片复制到内存
		$image = $fun($src);
	/*操作图片*/
		// 1.设置水印路径
		$image_mark = "image/1.png";
		// 2.获取水印信息
		$info2 = getimagesize($image_mark);
		// 3.获取水印后缀名	
		$type2 = image_type_to_extension($info2[2],false);
		// 4.把内存中创建一个和我们水印图像一致的图像类型
		$fun2 = "imagecreatefrom{$type2}";
		// 5.把水印图片复制到内存中
		$water = $fun2($image_mark);
		// 6.合并图片
		imagecopymerge($image, $water, 20, 20, 0, 0, $info2[0], $info2[1], 50);
		// 7.销毁水印图片
		imagedestroy($water);
	/*输出图片*/
		// 在浏览器中输出图片
		header("Content-type:".$info['mime']);
		$func = "image{$type}";
		$func($image);
		// 保存图片
		$func($image,"waterImage1.".$type);
	/*销毁图片*/
		imagedestroy($image);
?>