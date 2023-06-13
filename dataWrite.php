<html>
<!-- <meta charset="utf-8"> -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<?php

	$host = 'localhost';
	$user = 'Moon';
	$pw = '1234';
	$dbName = 'Jung';
	$mysqli = new mysqli($host, $user, $pw, $dbName);

	$Name = $_POST['CName'];
	$Channel = $_POST['Channel'];
	$Video = $_POST['Video'];

	$sql = "insert into channel (
			Name,
			Channel,
			Video
	)";
	
	$sql = $sql. "values (
			'$Name',
			'$Channel',
			'$Video'
	)";

	if($mysqli->query($sql)){ 
	  echo '<script>alert("등록되었습니다.")</script>'; 
	}else{ 
	  echo '<script>alert("등록에 실패하였습니다.")</script>';
	}

	mysqli_close($mysqli);
  
?>

<script>
	location.href = "add_channel.html";
</script>

</html>