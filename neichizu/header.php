
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="robots" content="noindex,nofollow">
<title>ねいちず-NatureMaps-</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- faviconの読み込み -->
<link rel="icon" href="img/mountain.ico">
<!-- cssの読み込み -->
<link rel="stylesheet" href="css/style.css">
<!-- fontの読み込み -->
<link href="https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c" rel="stylesheet">
<!-- jQueryの読み込み -->
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

<!-- スマホナビの表示・非表示  -->
<script>
$(function() {
const hum = $('#hamburger, .close')
const nav = $('.sp-nav')
hum.on('click', function(){
    nav.toggleClass('toggle');

});
});


</script> 

</head>


<body>
<div class="wrapper">
<header id="header">
<h1 class="h1-title_text"><img src="./img/mountain.png" width="30px" height="30px" ;><a href="index.php">ねいちず-NatureMaps-</a></h1>
<nav class="pc-nav"><ul>
<li><a href="index.php">TOP</a></li>
<li><a href="other_list.php">OTHERS</a></li>
<!-- <li><a href="Jihanki-info.html">INFO</a></li>
<li><a href="myprof.html">PROFILE</a></li> -->
</ul>
</nav>
<nav class="sp-nav">
<ul>
<li><a href="index.php">TOP</a></li>
<li><a href="other_list.php">OTHERS</a></li>
<!-- <li><a href="Jihanki-info.html">INFO</a></li>
<li><a href="myprof.html">PROFILE</a></li> -->
<li class="close"><span>閉じる</span></li>
</ul>
</nav> 
<div id="hamburger">
<span></span>
</div>
</header> 