<html>
    <!-- Testing -->
	<head>
		<link rel="stylesheet" type="text/css" href="/styles.css" media="screen"/>
	</head>
	<body>
		<div id="container">
			<div id="logo">
				<img src="/images/orchestra_logo_on_light.png">
			</div>
			<div id="content">
				<h2>Seriously, how easy was that?!</h2>
				<p>This is just a simple bit of code, deployed from a <a href="https://github.com/orchestra-io/howto">repository on GitHub</a> and a <strong>master</strong> branch to show you how  you can be quickly up and running.</p>
				<p>
					You can delete this deployed app from your <a href="https://my.orchestra.io/apps">app dashboard</a> by clicking "Terminate".
				</p>
				<p>Now, go! <a href="https://my.orchestra.io/apps/create/free?">Start deploying</a> from your own Git or Subversion repositories. We've got some easy to read documentation on that, if you need it:
				<ul>
					<li><a href="http://docs.orchestra.io//kb/getting-started/deploy-with-git">Deploy onto Orchestra from Git</a></li>
					<li><a href="http://docs.orchestra.io//kb/getting-started/deploy-with-subversion">Deploy onto Orchestra from Subversion</a></li>
				</ul>
				<h2>Test data from <a href="http://php.net/">PHP</a></h2>
				<p>
				<?php
                    $version = phpversion();
					echo "<p>Your app is running on PHP version: " . $version . "<br/></p>";
					echo "<p>The app IP is: " . $_SERVER['SERVER_ADDR'] . "<br/></p>";
					echo "<p>The client IP is : " . $_SERVER['HTTP_X_FORWARDED_FOR'] . "<br/></p>";
					echo "<p>Temp dir available to your app is: " . sys_get_temp_dir() . "</p>";
                ?>
                <?php
                    if (is_dir("/mnt/storage/s3")) {
                        echo "<p>Elastic storage available at: <code>/mnt/storage/s3</code></p>";
                    }
                ?>
				</p>
				<h2>Code from above</h2>
<?php
$code = highlight_string('
<?php
	$version = phpversion();
	$ip = $_SERVER["SERVER_ADDR"];
	$ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
	$temp = sys_get_temp_dir();
?>',1);
echo $code;
?>
			<div>
		</div>
	</body>
</html>
