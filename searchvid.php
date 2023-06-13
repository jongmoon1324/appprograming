<?php
session_start();
$vid = $_SESSION['vid'];

?>




<html>
    <head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<iframe width="400" height="225" src="https://www.youtube.com/embed/<?php echo $vid; ?>"  frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="margin:auto;text-align:center;"></iframe>

    <div class="wrap">
<button onclick="location.href='search.php'" style="width:300px;height:50px;">검색으로</button>
<br><br>
<button onclick="location.href='videos.php'" style="width:300px;height:50px;">메인으로</button>
</div>

</body>
</html>