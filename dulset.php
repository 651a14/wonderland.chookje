<!DOCTYPE html>
<html>
	<head>
		<title>CHOOKJAE</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=1440px">
<link rel="stylesheet" href="chookjae.css">
<link rel="icon" href="img/logo.png">
</head>
	
	<body>
		<div class="background-o"></div>
		<div class="gnb">
		<ul>
			<li><a href="about.php" class="about"><img src="img/about.png"></a></li>
			<li><a href="teaser.php" class="teaser"><img src="img/teaser.png"></a></li>
			<li><a href="wallpaper.php" class="wallpaper"><img src="img/wallpaper.png"></a></li>
			<li><a href="index.html" class="video"><img src="img/video.png"></a></li>
			<li class="selector">
				<div class="site-selector">
					<select name="gourl" id="gourl">
						<option value="#"></option>
						<option value="http://btsofficialshop.com/">下面的選項都是擺設</option>
						<option value="http://btsofficialshop.com/">16'WINTER: -</option>
						<option value="http://bts.ibighit.com/loveyourself">17'SPRING: KOKORO</option>
						<option value="http://bts.ibighit.com/youneverwalkalone">17'AUTUMN: AUGUST FESTIVAL</option>
					</select>
				</div>
			</li>
		</ul>
</div>

<div class="container">
	<div class="logo">
		<a href="index.php"><img src="img/17sp-title.png" width="150" height="107" class="sp-title"></a><br />
		<img src="img/sp-sub-title.png" width="40" height="87" class="sp-sub-title" style='margin-top:280px;' >
	</div>

<script type="text/javascript">
	$(document).ready(function(){ 
		$("a").addClass(function(index, currentClass) {
		    var addedClass;
		    if ( currentClass === "index") {
		      addedClass = "active";
		    }
		    return addedClass;
		});
	});
</script>
		<div class="video-wrapper">
			<div class="movie-container">
				<iframe width="820" height="461" src="http://www.youtube.com/embed/Tx_6Pxspurs" frameborder="0" class="movie" allowfullscreen></iframe>
			</div>
	 		<div class="vid-selector">
	 			<div class="vid" data-src="http://www.youtube.com/embed/C_3bgDsUMbo">
		 			<a href="video.html"><img src="img/vid1.png"></a>
	 			</div>
	 			<div class="vid active" data-src="http://www.youtube.com/embed/Tx_6Pxspurs">
		 			<a href="#"><img src="img/vid2.png"></a>
	 			</div>
	 			<div class="vid" data-src="http://www.youtube.com/embed/E7sSUapl2uI">
		 			<a href="path.php"><img src="img/vid3.png"></a>
	 			</div>
			</div>
		</div>
		 	<div class="title-right">
		<a href="#"><img src="img/randomlogo.png" "></a>
	</div>
	<div class="footer">
		<ul>
			<li><a href="https://www.facebook.com/wonderland9395/" target="_blank"><img src="img/FACEBOOK.png"></a></li>
			<li><a href="https://www.weibo.com/u/5679397434" target="_blank"><img src="img/WEIBO.png"></a></li>
			<li><a href="https://www.youtube.com/user/GZhenjie" target="_blank"><img src="img/YOUTUBE.png"></a></li>
			<li><a href="https://space.bilibili.com/14347061#/" target="_blank"><img src="img/BILIBILI.png"></a></li>
		</ul>
		<div class="copyright">
			<img src="img/logo.png" class="footer-logo">
			Copyright © 2017 Wonderland for Suga & V All Rights Reserved
	</div>
</div>
 		<script type="text/javascript">
		$('.vid').click(function(ev) {

			var src = $(this).data('src');

			$('iframe').attr('src', src);
			return ev.preventDefault();
		});

		$('.vid').each(function(idx, elem) {
			$(elem).click(function(e) {
				$('.vid').removeClass('active');
				$(this).addClass('active');
				e.preventDefault();
			});
		});

		</script>
	</body>

</html>