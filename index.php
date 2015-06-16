<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Local SlymTwig</title>
	</head>
	<body>
		<header>
			<h1>PHP with Slim and Twig</h1>
		</header>
		<main>
			<p>Let's dev some PHP.</p>
			<p>PHP pt1 BEGIN: /hello/yourname <br/>
				<?php
					require 'vendor/autoload.php';
					$helloapp = new \Slim\Slim();
					$helloapp->get('/hello/:name', function ($name)
					{
						echo "Hello, $name";
					});
					$helloapp->run();
				?>
			<br/>PHP pt1 END</p>
		</main>
		<footer>
			&copy;2015 George Tiser.
		</footer>
	</body>
</html>