<?php
if (empty($_FILES)) :
?>
<form method="post" action="" enctype="multipart/form-data">
    <input type="file" name="uploaded" />
    <br />
    <input type="submit" value="Upload!" />
</form>
<?php else: print_r($_FILES); endif; ?>
