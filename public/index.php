<html>
	<head>
		<link rel="stylesheet" type="text/css" href="styles.css" media="screen"/> 
	</head>
	<body>
		<div id="container">
			<div id="logo">
				<img src="images/orchestra_logo_on_light.png">
			</div>
			<div id="content">
				<h2>Seriously, how easy was that?</h2>
				<p>This is just a simple bit of code, deployed from a <a href="https://github.com/orchestra-io/howto">repo on GitHub</a> to show you how  you can be quickly up and running.</p>
				<p>
					You can delete this deployed app from your <a href="https://my.orchestra.io/apps">app dashboard</a> by clicking "Terminate".
				</p>
				<p>Now, go! <a href="https://my.orchestra.io/apps/create/free?">Start deploying</a> from your own Git or Subversion repositories. We've got some easy to read documentation on that, if you need it:
				<ul>
					<li><a href="https://orchestra.tenderapp.com/kb/getting-started/deploy-with-git">Deploy onto Orchestra from Git</a></li>
					<li><a href="https://orchestra.tenderapp.com/kb/getting-started/deploy-with-subversion">Deploy onto Orchestra from Subversion</a></li> 
				</ul>
				<h2>Test data from PHP</h2>
				<p>
				<?php
					echo "<p>Your app is run on PHP version: " . PHP_RELEASE_VERSION . "<br/></p>";
					echo "<p>The IP of your app is: " . $_SERVER['REMOTE_ADDR'] . "<br/></p>";
					echo "<p>Temp dir available to your app is: " . sys_get_temp_dir() . "</p>";
				?>

				</p>
		
				<h2>Code from above</h2>
<?php
$code = highlight_string('
<?php 
	$version = PHP_RELEASE_VERSION;
	$ip = $_SERVER["REMOTE_ADDR"];
	$temp = sys_get_temp_dir();
?>',1);
echo $code;
?>				
			<div>
		</div>
	</body>
</html>
