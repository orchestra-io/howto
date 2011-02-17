<h2>We are now in the presence of the HowTo Orchestra Application!</h2>
<p>
  If you are seeing this, congratulations, you now have your first application running.
</p>
<?php
    $version = PHP_RELEASE_VERSION;
    $ip      = $_SERVER['REMOTE_ADDR'];
?>

<h2>Test data from PHP</h2>
<p>You are running PHP version <?php echo $version; ?> and you appear to have the ip <?php echo htmlspecialchars($ip); ?></p>

<h2>Code</h2>
<p>The code that ran above is:
 <pre>
  <code>
  $version = PHP_RELEASE_VERSION;
  $ip      = $_SERVER['REMOTE_ADDR'];
  </code>
 </pre>
</p>
