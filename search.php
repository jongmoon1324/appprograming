<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="wrap">
    <form action="search.php" method="post" enctype="multipart/form-data">
        <input type="text" name="search" id="search" placeholder="채널명을 검색하세요" style="width:300px;height:40px; border: 2px solid gray;"  required >
        <button type="submit" style="width:80px;height:40px;">검색하기</button>
        <br><br>
    </form>
    <div class="box3">
    <?php
        session_start();
        $search = $_POST['search'];

        $con = mysqli_connect("localhost","Moon","1234","Jung");
        $sql = "SELECT * FROM channel where Name like '%$search%'"; 
        $result = mysqli_query($con, $sql);

        if($search !=''){
        
            while($row = mysqli_fetch_assoc($result)) {

                $Name = $row['Name'];
                $Channel = $row['Channel'];
                $Video = $row['Video'];
                $_SESSION['vid'] = $Video ;
                
                echo "채널명 :".$Name."<br>";
                echo "핸들 아이디: ".$Channel."<br>"."영상 id :".$Video."<br>";
                echo "==============================="."<br>";
            }
        } 
                
    ?>
    </div> 
<button type="button" onclick="location.href='searchvid.php'" style="width:300px; height:50px;font-size:24px;text-align:center;margin-top:80%;">보러가기</button>
    </div>
</body>
</html>