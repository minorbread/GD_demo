<?php
	/**
	* 			
	*/
/*	class Image  
	{
		private $src;
		function __construct($data){
			$this->$src = $data;
		}

		public private function openImage($img = $this->src){
			$info = getimagesize($img);
			$type = image_type_to_extension($info['2'],false);
			$fun = "imagecreatefrom{$type}";
			$image = $fun($src);
			return $image;
		}

		public function fontImage($image,$font,$content,$red=255,$green=255,$blue=255,$alpha=50,$size=20,$angle=0,$x=20,$y=30){
			$image = $this->openImage();
			$col = imagecolorallocatealpha($image, $red, $green, $blue, $alpha);
			imagettftext($image, $size, $angle, $x, $y, $col, $font, $content);
			return $image;
		}

		public function drawImage($image,$path){
			$image = $this->openImage();
			header("Content-type:".$info['mime']);
			$func = "image{$type}";
			$func($image,$path.".".$type);
			imagedestroy($image);
		}

		public function wateImage($image_mark,$dst_x=20,$dst_y=20,$src_x=0,$src_y=0,$src_w,$src_h,$pct=50){
			$image = $this->openImage();
			$water = $this->openImage($image_mark);
			imagecopymerge($image, $water, $dst_x, $dst_y, $src_x, $src_y, $src_w, $src_h, $pct);
			imagedestroy($water);
			return $image;
		}

		public function thumbImage($width,$height,$dst_x=0, $dst_y=0, $src_x=0, $src_y=0,$src_w, $src_h){
			$image = $this->openImage();
			$image_thumb = imagecreatetruecolor($width, $height);
			imagecopyresampled($image_thumb, $image, $dst_x, $dst_y, $src_x, $src_y, $width, $height, $src_w, $src_h);
			return $image_thumb;
		}
	}*/
	/**
	* 		
	*/
/*	class Image  
	{
		// 内存中的图片
		private $image;
		// 图片的基本信息
		private $info;
		function __construct($src)
		{
			$info = @getimagesize($src);
			$this->info = array(
				'width' => $info[0],
				'height' => $info[1],
				'type' => image_type_to_extension($info[2],false),
				'mime' => $info['mime']
				);
			$fun = "imagecreatefrom{$this->info['type']}";
			$this->image = $fun($src);
		}
		// 操作图片
		public function thumb($width,$height)
		{
			$image_thumb = imagecreatetruecolor($width,$width);
			imagecopyresampled($image_thumb,$this->image,0,0,0,0,$width,$height,$this->info['width'],$this->info['height']);
			imagedestroy($this->image);
			$this->image = $image_thumb;
		}

		// 在浏览器中输出图片
		public function show(){
			header("Content-type:".$this->info['mime']);
			$funs = "image{$this->info['type']}";
			$funs($this->image);
		}

		// 把图片保存到硬盘里
		public function save($newname){
			$funs = "image{$this->info['type']}";
			$funs($this->image,$newname.'.'.$this->info['type']);
		}

		// 销毁图片
		public function __destruct()
		{
			imagedestroy($this->$image);
		}

		// 操作图片 添加文字水印
		public function fontMark($content,$font_url,$size,$color,$local,$angle){
			$col = imagecolorallocatealpha($this->image,$color[0],$color[1],$color[2],$color[3]);
			imagettftext($this->image,$size,$angle,$local['x'],$local['y'],$col,$font_url,$content);
		}

		// 操作图片 添加图片水印
		public function imageMark($source,$local,$alpha)
		{
			$info2 = getimagesize($source);
			$type2 = image_type_to_extension($info2[2],false);
			$func2 = "imagecreatefrom{$type2}";
			$water = $func2($source);
			imagecopymerge($this->image,$water,$local['x'],$local['y'],0,0,$info2[0],$info2[1],$alpha);
			imagedestroy($water);
		}
	}*/

	/*
	
	class image  
	{
		// 设置图片详细对象
		private $info;
		// 图片路径
		private $image;
		function __construct($src){
			$info = getimagesize($this->image);
			$this->info = array(
				'width' => $info[0],
				'height' => $info[1],
				'type' => image_type_to_extension($info[2]),
				'mime' => $info['mime']
			);
			$fun = "imagecreatefrom{$this->info['type']}";
			$this->image = $fun($src);
		}
		public function __destruct(){
			imagedestroy($this->image);
		}
		public function show(){
			header('Content-type:'.$this->info['mime']);
			$func = "image{$this->info['type']}";
			$func($this->image);
		}
		public function save($path)
		{
			$func = "image{$this->info['type']}";
			$func($this->image,$path.$this->info['type']);			
		}

		public function imageMark($path,$x=20,$y=20,$src_x=0,$src_y=0,$pct=50){
			$info2 = getimagesize($path);
			$type2 = image_type_to_extension($info2[2]);
			$fun2 = "imagecreatefrom{$type2}";
			$water = $fun2($path);
			imagecopymerge($this->image, $water, $x, $y, $src_x, $src_y, $info2[0], $info2[1],$pct);
			imagedestroy($water);
		}

		public function thumb($width,$height){
			$image_thumb = imagecreatetruecolor($width, $height);
			imagecopyresampled($image_thumb, $this->image, 0, 0, 0, 0, $width, $height, $this->info['width'], $this->info['height']);
			$this->image = $image_thumb;
			imagedestroy($image_thumb);
		}

		public function fontMark($font,$content,$size,$angle,$local,$color,$alpha)
		{
			$col = imagecolorallocatealpha($this->image, $color[0], $color[1], $color[2],$alpha);
			imagettftext($this->image, $size, $angle, $local[0], $local[1], $color, $font, $content);
		}
	}*/
?>