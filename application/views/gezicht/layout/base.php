<!DOCTYPE html>
<html lang="ja">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php echo $title; ?></title>
<meta name="description" content="<?php echo $description; ?>">
<meta property="og:type" content="website">
<meta property="og:url" content="http://dam.becolomochi.com/gezicht">
<meta property="og:image" content="http://dam.becolomochi.com/media/img/gezicht/ogp.jpg">
<meta property="fb:app_id" content="157594451422567">
<meta name="twitter:card" content="photo">

<link rel="shortcut icon" href="http://dam.becolomochi.com/media/img/gezicht/favicon.ico" type="image/vnd.microsoft.icon">
<?php foreach ($styles as $style) { ?>
<link type="text/css" rel="stylesheet" href="<?php echo $style; ?>?170227-2">
<?php } ?>
<script type="text/javascript" src="//webfont.fontplus.jp/accessor/script/fontplus.js?pzIPzFK0ULc%3D&box=8pL3Swmt0xo%3D&aa=1" charset="utf-8"></script>
</head>
<body id="ge" <?php if(isset($top)){ echo 'class="top"';} ?>>

<div id="barba-wrapper">
<div class="barba-container ge-wrapper">

<?php
echo $content;
?>

<footer class="copyright">© 2017 beco</footer>
</div>
</div>

<div class="load">
<div class="spinner">Loading...</div>
</div>

<?php if(Kohana::$environment === Kohana::PRODUCTION) : ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-22728284-6', 'auto');
  ga('send', 'pageview');

</script>
<?php endif; ?>
<?php foreach ($scripts as $script) { ?>
<script type="text/javascript" src="<?php echo $script; ?>"></script>
<?php } ?>
<script>
	$(window).on("load", function(){
		$(".load").fadeOut();
	});

	$(function(){
		// ロード時の幅調整・表示位置調整
		var contentWidth = $(".ge-wrapper").outerWidth();
		var windowWidth = $(window).width();
		var leftPosition = contentWidth - windowWidth;
		$("body").css({width: contentWidth});
		$("html, body").scrollLeft(leftPosition);

		// ホイールダウンで横スクロール
		var scrollSpeed = 10;
		$("html").mousewheel(function(event, mov){
			//ie firefox
			$(this).scrollLeft($(this).scrollLeft() + mov * scrollSpeed);
			//webkit
			$("body").scrollLeft($("body").scrollLeft() + mov * scrollSpeed);
			return false;
		});

		// ページ上部へ戻る
		$(".link-to-top").on("click", function(){
			$("html, body").animate({scrollLeft: leftPosition}, 1000);
			return false;
		});
	});

	// リサイズ時の幅調整
	$(window).on("resize", function(){
		var contentWidth = $(".ge-wrapper").outerWidth();
		$("body").css({width: contentWidth});
	});
</script>
<?php if(isset($jsslide)) { echo $jsslide; } ?>
<!--
( ・-・) <3 DAM
-->
</body>
</html>
