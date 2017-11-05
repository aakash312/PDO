	<?php

        echo"<center> <h1> <u> WEEK-7 ASSIGNMENT </u> </h1> </center>";
        echo "<body style='background-color:#B0C4DE'>";
        echo  "<center> <b>Attn: Prof. Keith Willams </b> <br> </center> ";
        echo "<center> <b>TA: Ikjyot Singh Gujral </b><br></center> ";
        echo "<center> <b> TA: Brandon Major </b> <br ></ center>";
        $a= date('m-d-y',time()) ;
        echo "<center><b> Date: $a </b> <br>  </center>";
        ini_set('display_errors', 'On');
        error_reporting(E_ALL);
        echo '<br>';
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
