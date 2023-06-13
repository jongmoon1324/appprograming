<html>
    <head>
    <link rel="stylesheet" href="style.css">
    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "350px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }

        function Protectid() {
            document.getElementById("myid").style.color = "white";
        }

    </script>
    </hedd>
    <body>


<?php

$host = 'localhost';
$user = 'Moon';
$pw = '1234';
$dbName = 'Jung';
$con = new mysqli($host, $user, $pw, $dbName);

$query = "select * from channel order by rand() limit 2";

$qr =  mysqli_query($con,$query);
$result1 = mysqli_fetch_array($qr);
$result2 = mysqli_fetch_array($qr);


?>

<div id="btn-group">
        <button onclick="openNav()" style="width:40px;height:40px; border-radius: 5px; background-color: skyblue; border-color:gray; color: gray;">≡</button>
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <iframe src="my_account.php" height="100" width="270" frameborder="0"></iframe>
            <hr>
            <a href="add_channel.html">채널 등록</a>

            </div>
        <input type="text" id="search_bar" onclick="location.href='search.php'" style="width:350px;height:40px"></image>
        <hr>
        <br>
        <iframe width="400" height="225" src="https://www.youtube.com/embed/<?php echo $result1['Video']; ?>"  frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="margin:auto;"></iframe>
    <br><br>
    <button type="button" onclick='location.href="https://www.youtube.com/<?php echo $result1['Channel']; ?>"' style="width: 400px; height:35px;">채널로 이동하기</h3></button>
    <br><br>
    <hr>
    <br>
    <iframe width="400" height="225" src="https://www.youtube.com/embed/<?php echo $result2['Video']; ?>" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="margin:auto;"></iframe>
    <br><br>
    <button type="button" onclick='location.href="https://www.youtube.com/<?php echo $result2['Channel']; ?>"' style="width: 400px; height:35px;">채널로 이동하기</h3></button>
    <br><br>
</body>
<html>
