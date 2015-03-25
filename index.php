<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="index.php" method="post">
		<p>方</p>
		长<input type="text" name="width">
		宽<input type="text" name="height">
		高<input type="text" name="top">
<p>面积为
<?php
include("construct.php");
@$width = $_POST['width'];
@$height = $_POST['length'];
@$top = $_POST['top'];
$new_cude = new cude($width,$height,$top);
$new_cude->count_s();
?>
</p>
<p>周长为 <?php $new_cude->count_l(); ?></p>
<p>体积为 <?php $new_cude->count_v(); ?></p>
<p>表面积为<?php $new_cude->count_hs(); ?></p>
<p>圆</p>
半径<input type="text" name="radius">
<p>面积为
<?php
@$radius = $_POST['radius'];
$new_globe = new globe($radius);
$new_globe->count_s();
?>
</p>
<p>周长为<?php $new_globe->count_l(); ?></p>
<p>体积为<?php $new_globe->count_v(); ?> </p>
<p>表面积为<?php $new_globe->count_hs(); ?></p>
<input type="submit" value="submit">
</form>
</body>
</html>
