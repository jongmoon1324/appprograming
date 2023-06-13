<html>
<!-- <meta charset="utf-8"> -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<?php

		$host = 'localhost';
		$user = 'Moon';
		$pw = '1234';
		$dbName = 'Jung';
		$mysqli = new mysqli($host, $user, $pw, $dbName);

		$member_email = $_POST['email'];
	    $member_pw_1 = $_POST['pw_1'];
	    $member_name = $_POST['name'];
		$member_Phone = $_POST['Phone'];

		$sql = "insert into member (
				member_email,
				member_pw_1,
				member_name,
				member_Phone
		)";
		
		$sql = $sql. "values (
				'$member_email',
				'$member_pw_1',
				'$member_name',
				'$member_Phone'
		)";

		if($mysqli->query($sql)){ 
		  echo '<script>alert("가입되셨습니다. 로그인해주세요.")</script>'; 
		}else{ 
		  echo '<script>alert("회원가입에 실패하였습니다. 양식을 확인하고 다시 시도해주세요.")</script>';
		}

		mysqli_close($mysqli);
	  
	?>

<script>
	location.href = "login.php";
</script>

</html>