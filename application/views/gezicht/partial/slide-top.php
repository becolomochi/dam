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
	$("#link-wit").vegas({
		overlay: '/media/lib/vegas/overlays/01.png',
		timer: false,
		shuffle: true,
		trainsition: 'fade',
		slides: [
			{ src: dir + "ohmachi_1.jpg" },
			{ src: dir + "nanakura_2.jpg" },
			{ src: dir + "sonohara_1.jpg" },
			{ src: dir + "hiraide_4.jpg" }
		]
	});
	$("#link-kalm").vegas({
		overlay: '/media/lib/vegas/overlays/01.png',
		timer: false,
		shuffle: true,
		trainsition: 'fade',
		slides: [
			{ src: dir + "tsuburada_2.jpg" },
			{ src: dir + "shinsui_2.jpg" },
			{ src: dir + "tamayodo_2.jpg" },
			{ src: dir + "mozawa_1.jpg" }
		]
	});
	$("#link-canyon").vegas({
		overlay: '/media/lib/vegas/overlays/01.png',
		timer: false,
		shuffle: true,
		trainsition: 'fade',
		slides: [
			{ src: dir + "shimokubo_1.jpg" },
			{ src: dir + "shimokubo_2.jpg" },
			{ src: dir + "takatsudo_3.jpg" },
			{ src: dir + "takatsudo_1.jpg" }
		]
	});
	$("#link-flow").vegas({
		overlay: '/media/lib/vegas/overlays/01.png',
		timer: false,
		shuffle: true,
		trainsition: 'fade',
		slides: [
			{ src: dir + "naramata_3.jpg" },
			{ src: dir + "naramata_4.jpg" },
			{ src: dir + "yagisawa_2.jpg" },
			{ src: dir + "sudagai_2.jpg" }
		]
	});
});
</script>