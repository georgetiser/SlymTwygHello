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
			<p>Learning the basics.</p>
			<p>PHP BEGIN<br/>
				<?php
					require 'vendor/autoload.php'; // loads Slim and Twig
					$mainapp = new \Slim\Slim();
					$mainapp->get('/hello/:name', function ($name)
					{
						echo "Hello, $name";
					});
					$mainapp->get('/', function() use($app)
					{
						$app->render('index.html');
					});
					$mainapp->get('/contact', function ()
					{
						echo 'Hello, this is the contact page';
					});
					$mainapp->run();
				?>
				<br/>PHP END</p>
		</main>
		<footer>
			Project for <a href="https://teamtreehouse.com">Treehouse</a> / <a href="http://www.codelouisville.org">CodeLouisville</a>. George Tiser, June 2015.
		</footer>
	</body>
</html>