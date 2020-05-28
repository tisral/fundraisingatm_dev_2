<?php
	function connectTo() {
		$host = "localhost";
		$db_name = "gogrea6_amoodf5_gm2012";
		$username = "gogrea6_amoodf5_ryan";
		$password = "nb]]mFg2ZU.n";
		$link = mysqli_connect("$host", "$username", "$password", "$db_name");
		return $link;
	}	


/* 
The above block of php is technically unsecure, the below code will 
serve as the PDO method of connection in the future. 
*The Database needs to be checked for what version of PHP is running.

PHP Version 7.# will no longer run mysqli_

----


$dsn = "mysql:host=localhost;dbname=gogrea6_amoodf5_gm2012;charset=utf8mb4";
$options = [
  PDO::ATTR_EMULATE_PREPARES   => false, // turn off emulation mode for "real" prepared statements
  PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, //turn on errors in the form of exceptions
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, //make the default fetch be an associative array
];
try {
  $pdo = new PDO($dsn, "gogrea6_amoodf5_ryan", "nb]]mFg2ZU.n", $options);
} catch (Exception $e) {
  error_log($e->getMessage());
  exit('Something weird happened'); //something a user can understand
}
*/
?>