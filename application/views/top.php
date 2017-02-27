<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="robots" content="noindex,nofollow,noarchive">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo $title; ?></title>
<link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
<link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="/favicon-48x48.png" sizes="48x48">
<link rel="apple-touch-icon-precomposed" href="/webclip.png">

<?php foreach ($styles as $style) { ?>
<link type="text/css" rel="stylesheet" href="<?php echo $style; ?>">
<?php } ?>
</head>
<body>

<header>
<h1 class="title"><?php echo $title; ?></h1>
</header>
<div id="container" class="container">
<a href="/book">卒業制作 ダム写真集「素顔のダム」</a><br>
<a href="/gezicht">縦書きWebサイト「gezicht」</a><br>
<a href="//becolomochi.thebase.in/" target="_blank">Becolomochi shop - ダムZINEの販売（外部サイト）</a>
</div>
<footer>
<p class="copyright">&copy; 2016 Beco</p>
</footer>

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
<!--
( ・-・) <3 DAM
-->
</body>
</html>
