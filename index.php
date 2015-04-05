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
	<a href="https://github.com/you"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://camo.githubusercontent.com/38ef81f8aca64bb9a64448d0d70f1308ef5341ab/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f6461726b626c75655f3132313632312e706e67" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_right_darkblue_121621.png"></a>
</body>
</html>