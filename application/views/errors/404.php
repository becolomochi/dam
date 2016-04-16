<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="robots" content="noindex,nofollow,noarchive">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>404 ページが見つかりません</title>
<link type="text/css" rel="stylesheet" href="/media/lib/normalize.css">
<link type="text/css" rel="stylesheet" href="/media/css/base.css">

</head>
<body>

<header>
<h1 class="title">404 ページが見つかりません</h1>
</header>
<div id="container" class="container">
ページが見つかりませんです。
<br>
<a href="/book">ダム写真集「素顔のダム」はここからどうぞ</a>
<br>
<img src="/media/img/img_error.png" class="img-error">
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
</body>
</html>
