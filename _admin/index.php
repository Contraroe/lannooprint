<!DOCTYPE html>
<!--[if lt IE 7]>     <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>       <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>       <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Lannoo ControlPanel</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="img/ico/favicon.ico" rel="shortcut icon"/>
	<link href="../_css/normalize.css" rel="stylesheet" type="text/css" />
	<link href="css/admin.css" rel="stylesheet" type="text/css" />
	
	<link href="_img/ico/favicon.ico" rel="shortcut icon"/>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.js" type="text/javascript"></script>
	<script>var __adobewebfontsappname__ = "code"</script>
	<script src="http://use.edgefonts.net/comfortaa:n4,n3,n7:all;open-sans:n7,i7,n8,i8,i4,n3,i3,n4,n6,i6:all.js"></script>

</head>

<body>
	<?php include '../../_php/error.php' ?>
	<?php include "includes/header_bc.php" ?>
			<div id="container">
					<!-- EDIT DBASE -->
					<?php include "includes/testimonials_bc.php" ?>
					<?php include "includes/vacatures_bc.php" ?>
					<!-- CREATE RECORDS DBASE -->
					<?php include "includes/testimonials_create.php" ?>
					<?php include "includes/vacatures_create.php" ?>
			</div>
			
</body>
</html>
