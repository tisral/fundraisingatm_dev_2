<!-- July 9, 2020 , Version 1.0 -->
<?php
	session_start();
	ob_start();
	error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Footer</title>
  </head>
  <body>
    <h1>This is the first</h1>
  </body>
</html>

<?php
ob_end_flush();
?>
