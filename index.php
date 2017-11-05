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
	 try
	 {
	$stmt = $dbh->prepare("SELECT * FROM accounts where id<6");
	$stmt->execute();
	$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
	$result = $stmt->fetchAll();
	 }
	catch (PDOException $e)
	{
	echo $sql . "<br>" . $e->getMessage();
	}
	echo 'Number of results in the record are - <br> ' ;
	print_r(count($result));
	echo '<br>';
	echo '<table    border="1 px" " style=border-collapse: collapse"  >';
	echo '<tr><th>id</th><th>email</th><th>fname</th><th>lname</th><th>phone</th><th>birthday</th><th>gender</th><th>password</th></tr>';
	foreach ($result as $label)
	{
	echo '<tr>';
	echo '<td>'.$label['id'].'</td>';
	echo '<td>'.$label['email'].'</td>';
	echo '<td>'.$label['fname'].'</td>';
	echo '<td>'.$label['lname'].'</td>';
	echo '<td>'.$label['phone'].'</td>';
	echo '<td>'.$label['birthday'].'</td>';
	echo '<td>'.$label['gender'].'</td>';
	echo '<td>'.$label['password'].'</td>';
	echo '</tr>';
	}
	echo '</table>';

	?>
