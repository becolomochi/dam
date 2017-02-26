<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo $title; ?></title>

<?php foreach ($styles as $style) { ?>
<link type="text/css" rel="stylesheet" href="<?php echo $style; ?>?170211">
<?php } ?>
</head>
<body id="ge" <?php if(isset($top)){ echo 'class="top"';}; ?>>

<div id="barba-wrapper">
<div class="barba-container ge-wrapper">

<?php
echo $content;
?>

</div>
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
//Barba.Pjax.start();
var FadeTransition = Barba.BaseTransition.extend({
  start: function() {
    /**
     * This function is automatically called as soon the Transition starts
     * this.newContainerLoading is a Promise for the loading of the new container
     * (Barba.js also comes with an handy Promise polyfill!)
     */

    // As soon the loading is finished and the old page is faded out, let's fade the new page
    Promise
      .all([this.newContainerLoading, this.fadeOut()])
      .then(this.fadeIn.bind(this));
  },

  fadeOut: function() {
    /**
     * this.oldContainer is the HTMLElement of the old Container
     */

    return $(this.oldContainer).animate({ opacity: 0 }).promise();
  },

  fadeIn: function() {
    /**
     * this.newContainer is the HTMLElement of the new Container
     * At this stage newContainer is on the DOM (inside our #barba-container and with visibility: hidden)
     * Please note, newContainer is available just after newContainerLoading is resolved!
     */

    var _this = this;
    var $el = $(this.newContainer);

    $(this.oldContainer).hide();

    $el.css({
      visibility : 'visible',
      opacity : 0
    });

    $el.animate({ opacity: 1 }, 400, function() {
      /**
       * Do not forget to call .done() as soon your transition is finished!
       * .done() will automatically remove from the DOM the old Container
       */

      _this.done();
    });
  }
});

/**
 * Next step, you have to tell Barba to use the new Transition
 */

Barba.Pjax.getTransition = function() {
  /**
   * Here you can use your own logic!
   * For example you can use different Transition based on the current page or link...
   */

  return FadeTransition;
};</script>
<!--
( ・-・) <3 DAM
-->
<script>
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
	});
	
	// リサイズ時の幅調整
	$(window).on("resize", function(){
		var contentWidth = $(".ge-wrapper").outerWidth();
		$("body").css({width: contentWidth});
	});
</script>
<?php if(isset($jsslide)) { echo $jsslide; } ?>
</body>
</html>
