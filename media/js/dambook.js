$(function(){
//modal
	$("#modal-switch a").on('click', function(){
		var target = $(this).attr('href');
		$(target).fadeIn("fast");
		return false;
	});
	$(".modal-close").on("click", function(){
		$("#modal-content .modal-box").fadeOut("fast");
		return false;
	});

//content jump
	$("#content-link a").on("click", function(){
		var position = $(this).data("id");
		console.log(position);
		$("#bb-bookblock").bookblock("jump",position);
		$("#modal-content .modal-box").fadeOut("fast");
		return false;
	});
});

//img resize
$(window).on('load resize', function(){
	var w = $("#bb-bookblock img").width();
	var h = $("#bb-bookblock img").height();
	$("#bb-bookblock img").attr({
			"width":w,
			"height":h
		});
});

//bookblock setting
var Page = (function() {

	var config = {
			$bookBlock : $( '#bb-bookblock' ),
			$navNext : $( '#bb-nav-next' ),
			$navPrev : $( '#bb-nav-prev' ),
			$navFirst : $( '#bb-nav-first' ),
			$navLast : $( '#bb-nav-last' )
		},
		init = function() {
			config.$bookBlock.bookblock( {
				speed : 800,
				direction: 'rtl',
				shadowSides : 0.8,
				shadowFlip : 0.7
			} );
			initEvents();
		},
		initEvents = function() {

			var $slides = config.$bookBlock.children();

			// add navigation events
			config.$navNext.on( 'click touchstart', function() {
				config.$bookBlock.bookblock( 'next' );
				return false;
			} );

			config.$navPrev.on( 'click touchstart', function() {
				config.$bookBlock.bookblock( 'prev' );
				return false;
			} );

			config.$navFirst.on( 'click touchstart', function() {
				config.$bookBlock.bookblock( 'first' );
				return false;
			} );

			config.$navLast.on( 'click touchstart', function() {
				config.$bookBlock.bookblock( 'last' );
				return false;
			} );

			// add swipe events
			$slides.on( {
				'swipeleft' : function( event ) {
					config.$bookBlock.bookblock( 'prev' );
					return false;
				},
				'swiperight' : function( event ) {
					config.$bookBlock.bookblock( 'next' );
					return false;
				}
			} );

			// add keyboard events
			$( document ).keydown( function(e) {
				var keyCode = e.keyCode || e.which,
					arrow = {
						left : 37,
						up : 38,
						right : 39,
						down : 40
					};

				switch (keyCode) {
					case arrow.left:
						config.$bookBlock.bookblock( 'next' );
						break;
					case arrow.right:
						config.$bookBlock.bookblock( 'prev' );
						break;
				}
			} );
		};

		return { init : init };

})();

Page.init();
