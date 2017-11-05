	<?php


	$dsn = 'mysql:dbname=ab997;host=sql1.njit.edu';
	$user = 'ab997';
	$password = 'pKFturo1';
	try
	{
	$dbh = new PDO($dsn, $user, $password);
	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	echo 'Connected successfully <br>';
	}
	catch (PDOException $e)
	{
	echo 'Connection failed, 505 CONNECTION  ERROR ' . $e->getMessage() . '<br>';
	}
	?>
