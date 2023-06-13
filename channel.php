<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<?php

		$host = 'localhost';
		$user = 'Moon';
		$pw = '1234';
		$dbName = 'Jung';
		$mysqli = new mysqli($host, $user, $pw, $dbName);

    $query = "select * from channel where Main_Video is not null";

	$result = mysqli_query($mysqli,$query);
	$row = mysqli_fetch_assoc($result);
	$MV =  $row['Video'];

	echo $MV;
?>


<form action="index.html" method="post">
<input type = hidden value = <?php echo $myJSON;?> name = MV> 
</form>
</html>

