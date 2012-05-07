<?php
	// Doctype defaults to HTML5
	if(!empty($doctype)){
		echo $doctype."\n";
	} else {
		echo "<!DOCTYPE = html>\n";
	}
    
    $current_page = basename($_SERVER['PHP_SELF']);
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
		<div class="wrapper">
			<h1 class="logo">
			  <a href="index.php" title="Home">Third Thought</a>
				    </h1>
			<nav class="global">
				<ul>
			                <li<?php if(is_int(strrpos($current_page, 'blog'))){ echo ' class="current"'; } ?>><a href="blog.php">Blog</a></li>
			                <li<?php if(is_int(strrpos($current_page, 'services'))){ echo ' class="current"'; } ?>><a href="services.php">Workshops &amp; Services</a></li>
			                <li<?php if(is_int(strrpos($current_page, 'speaking'))){ echo ' class="current"'; } ?>><a href="speaking.php">Speaking</a></li>
			                <li<?php if(is_int(strrpos($current_page, 'about'))){ echo ' class="current"'; } ?>><a href="about.php">Meet Maggie</a></li>
			                <li<?php if(is_int(strrpos($current_page, 'index'))){ echo ' class="current"';} ?>><a href="index.php">Home</a></li>
				</ul>
			</nav>
		</div> <!-- End wrapper div in header -->
	</header>
	<div class="wrapper">
		