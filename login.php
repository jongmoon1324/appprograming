<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
    <!-- SEO Meta Tags -->
    <meta name="description" content="Create a stylish landing page for your business startup and get leads for the offered services with this HTML landing page template.">
    <meta name="author" content="Inovatik">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>LOGIN</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,600,700,700i&amp;subset=latin-ext" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
	<link href="css/magnific-popup.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	
</head>

<body>
<div name="loginform" id="btn-group">
    <form action="loginCheck.php" method="post" enctype="multipart/form-data">
        <br><br><br><br><br><br>
        <div class="wrap">
        <table width = "350" height="70" class="box2">
            <tr>
                <td><label >ID</label></td>
                <td><input style="width:170px;height:30;" type="text" name="id" required></td>
            </tr>
            <tr>
                <td><label >Password</label></td> 
                <td><input style="width:170px;height:30;" type="text" name="pw" required></td>
            </tr>
        </table>
        <br><br><br><br><br><br>

        <div id="btn_group">
        <button type="submit" style="margin: auto; height: 75px; width:300px;">로그인</button> 
        <br><br>
        <button type="button" onclick="location.href='member_create.html'" style="margin: auto; height: 75px; width:300px; ">회원가입</button>
        </div>
    </form>
    </div>                           
</body>
</html>