<script>
$(function(){
	var dir = "/media/img/gezicht/";
	$("body.top").vegas({
		overlay: '/media/lib/vegas/overlays/01.png',
		timer: false,
		shuffle: true,
		trainsition: 'fade',
		animation: 'kenburns',
		slides: [
			{ src: dir + "hiraide_2.jpg" },
			{ src: dir + "shimokubo_2.jpg" },
			{ src: dir + "tamayodo_1.jpg" }
		]
	});
});
</script>