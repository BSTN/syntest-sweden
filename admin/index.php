<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php //language_attributes(); ?> ng-app='app'>
<head>

	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
	<meta name="apple-mobile-web-app-capable" content="yes">



	<!-- HTML5 base -->
	<base href="<?php echo dirname($_SERVER['PHP_SELF']);?>/">

		<title>Admin | Synesthesia Sweden</title>

	<link rel="shortcut icon" type="image/png" href="css/images/favicon.ico"/>

	<!-- custom styling -->
	<link rel="stylesheet" type="text/css" href="css/_main.css" media="screen" />

</head>
<body>

	<div id="container">

		<div id="main">

			<div id="menu">
				<h1>MENU</h1>
				<ul>
					<li><a href="./">overview</a></li>
					<li><a href="check">check config</a></li>
					<li><a href="setup">setup</a></li>
					<li><a href="render">render</a></li>
					<li><a href="data">data</a></li>
					<li><a href="export">export to csv</a></li>
				</ul>
			</div>

			<div id="results" ui-view>
				<h4>...</h4>
			</div>

		</div>
	</div>


	<!-- google hosted -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.11/angular.min.js"></script>

	<!-- components etc -->
	<script src="../bower_components/angular-ui-router/release/angular-ui-router.min.js"></script>
	<script src="../bower_components/ngstorage/ngStorage.min.js"></script>

	<!-- custom -->
	<script src="js/app.js"></script>


</body>
</html>
