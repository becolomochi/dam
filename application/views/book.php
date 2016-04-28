<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="ダムの素顔が見えてくる「ダムめぐり」1年間の記録。素朴で飾り気のない、のんびりした風景の中の群馬周辺のダム19基を紹介する写真集です。">
<meta name="keywords" content="ダム,群馬,ダムめぐり,写真集,栃木,埼玉,長野">

<title><?php echo $title; ?></title>
<link rel="icon" href="/favicon-16x16.ico" sizes="16x16">
<link rel="icon" href="/favicon-32x32.ico" sizes="32x32">
<link rel="icon" href="/favicon-48x48.ico" sizes="48x48">
<link rel="apple-touch-icon-precomposed" href="/webclip.png">

<?php foreach ($styles as $style) { ?>
<link type="text/css" rel="stylesheet" href="<?php echo $style; ?>?160424">
<?php } ?>
</head>
<body>

<div id="container" class="container">

<div class="container-inner">
<div class="bb-custom-wrapper">
<div id="bb-bookblock" class="bb-bookblock">

<?php foreach ($pages as $page) { ?>
	<div class="bb-item" id="page<?php echo $page['file_id']; ?>">
		<img src="<?php echo $page['file_url']; ?>" alt="<?php echo $page['file_title']; ?>" width="1000" height="579">
	</div>
<?php } ?>
</div>
<div class="gradient-box"></div>
</div>
<nav class="pager-box">
<div class="pager-box-inner">
	<a id="bb-nav-next" href="#" class="bb-custom-icon bb-custom-icon-arrow-left">Next</a>
	<a id="bb-nav-prev" href="#" class="bb-custom-icon bb-custom-icon-arrow-right">Previous</a>
</div>
</nav>
</div>

</div>

<div id="modal-switch" class="nav-box">
	<ul class="nav-links">
		<li><a href="#content" class="primary">目 次</a></li>
		<li><a href="#about">素顔のダムとは</a></li>
		<li><a href="#contact">お問い合わせ</a></li>
	</ul>
</div>

<div id="modal-content">

<div id="content" class="modal-box">
<a href="#" class="modal-close">×</a>
<div class="modal-box-inner">
<?php echo $modal_content; ?>
</div>
</div>

<div id="about" class="modal-box">
<a href="#" class="modal-close">×</a>
<div class="modal-box-inner">
<?php echo $modal_about; ?>
</div>
</div>

<div id="contact" class="modal-box">
<a href="#" class="modal-close">×</a>
<div class="modal-box-inner">
<?php echo $modal_contact; ?>
</div>
</div>

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
