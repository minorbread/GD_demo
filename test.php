<?php
	require 'image.class.php';
	$src = 'image/2.png';
	$source = 'image/1.png';
	$local = array(
		'x' => 20,
		'y' => 50
		);
	$alpha = 30;
	$content = "Hello world!";
	$font_url = "image/msyh.ttf";
	$size = 20;
	$color = array(
		0 => 255, 
		1 => 0, 
		2 => 0, 
		3 => 20
		);
	$alpha = 10;
	$angle = 10;
	$image = new Image($src);
	$image->imageMark($source,$local,$alpha);
	$image->thumb(100,100);
	$image->fontMark($content,$font_url,$size,$color,$local,$angle);
	$image->show();
?>