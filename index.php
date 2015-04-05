<?php $page = $_GET['page']==""?'Home':$_GET['page']; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>
	<?php echo $page; ?></title>
	<script><?php echo "var i3s_page='".$page."';"; ?></script>
	<link rel="stylesheet" type="text/css" href="/spa/css/main.css">
	<script src="/spa/js/ejs_production.js"></script>
	<script src="/spa/js/jquery-1.11.2.min.js"></script>
	<script src="/spa/js/app.js"></script>
</head>
<body>
	
	<h1>SPA Page</h1>
	<div class="nav">
		<a href="./Home" data-item="Home"><div class="item">Home</div></a>
		<a href="./About" data-item="About"><div class="item">About</div></a>
		<a href="./Demo" data-item="Demo"><div class="item">Demo</div></a>
		<a href="./Other" data-item="Other"><div class="item">Other</div></a>
	</div>

	<div class="page" id="page"></div>

</body>
</html>