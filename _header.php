<?php
	// Doctype defaults to HTML5
	if(!empty($doctype)){
		echo $doctype."\n";
	} else {
		echo "<!DOCTYPE = html>\n";
	}
?>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title><?php if(!empty($title)){ echo $title; } ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<script src="scripts/head.min.js"></script>
	
	<link rel="stylesheet" href="css/style.css" media="screen" title="no title" charset="utf-8"/>
	
	<?php
		if(!empty($header_extras)){
			print $header_extras;
		}
	?>
</head>
<body>
	<header>
		<h1>
		  <a href="index.php" title="Home"></a>
	    </h1>
		<nav class="global">
			<ul>

			</ul>
		</nav>
	</header>
	<div class="wrapper">
		