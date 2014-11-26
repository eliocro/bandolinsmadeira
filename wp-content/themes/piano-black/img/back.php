<?php
	$image_number = date("z")%6+1;
	$image = @imagecreatefromjpeg("back_".$image_number.".jpg");
	header ('Content-Type: image/jpeg');
    imagejpeg($image, "", 90);  
	die();
?>