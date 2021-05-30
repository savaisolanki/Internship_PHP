<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title>Savai</title>
<link href="http://fonts.googleapis.com/css?family=Arvo" rel="stylesheet" type="text/css" />
<link href="http://fonts.googleapis.com/css?family=Coda:400,800" rel="stylesheet" type="text/css" />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<?php 
	include 'menu.php';
	include 'header.html';
?>

<div id="wrapper"> 
	<!-- end #header -->
	<div id="page-bgtop"></div>
	<div id="page">
<?php include 'image.html'; ?>		

<div id="content">
			<div class="post">
				<h2 class="title"><a href="#">Welcome to About page </a></h2>
				<p class="meta"><span class="date">May 30, 2021</span><span class="posted">Posted by <a href="#">Savai</a></span></p>
				<div style="clear: both;">&nbsp;</div>
				<div class="entry">
					<p>Hello Welcome to our About page.</p>
				</div>
			</div>
			<div style="clear: both;">&nbsp;</div>
		</div>



<?php 
	include 'sidebar.html'; 
?>
	
		

		<div style="clear: both;">&nbsp;</div>
	</div>
	<div id="page-bgbtm"></div>
	<!-- end #page --> 
</div>
<?php
	include 'footer.html';
?>
<!-- end #footer -->
</body>
</html>
