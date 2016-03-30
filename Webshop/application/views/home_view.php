<!DOCTYPE html>
<!--
 * @Author: Gertjan
 * @Date:   2016-03-30 11:31:35
 * @Last Modified by:   Gertjan
 * @Last Modified time: 2016-03-30 18:28:36
 -->
<html lang="eng">
	<head>
		 <!-- If IE use the latest rendering engine -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
 
		<!-- Set the page to the width of the device and set the zoon level -->
		<meta name="viewport" content="width = device-width, initial-scale = 1">

		<!-- Get standard bootstrap -->
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> 
		<meta charset="utf-8">
		<title><?php echo $title; ?></title>
	</head>
	<body>
	<div class="container">
		<div class="page-header">
			<h2><?php echo $header; ?></h2>
		</div>	
		<div class="jumbotron">
			<?php
				foreach($productnames as $object) {
				echo $object->naam . '</br>';
			}
			?>
		</div>
	</div>

		<!--scripts needed for bootstrap -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	</body>
</html>