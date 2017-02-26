<script>
$(function(){
	var dir = "/media/img/gezicht/";
	$("#tsuburada").vegas({
		timer: true,
		shuffle: true,
		trainsition: 'fade',
		animation: 'kenburns',
		slides: [
			{ src: dir + "tsuburada_1.jpg" },
			{ src: dir + "tsuburada_2.jpg" },
			{ src: dir + "tsuburada_3.jpg" },
			{ src: dir + "tsuburada_4.jpg" }
		]
	});
	$("#shinsui").vegas({
		timer: true,
		shuffle: true,
		trainsition: 'fade',
		animation: 'kenburns',
		slides: [
			{ src: dir + "shinsui_1.jpg" },
			{ src: dir + "shinsui_2.jpg" },
			{ src: dir + "shinsui_3.jpg" },
			{ src: dir + "shinsui_4.jpg" }
		]
	});
	$("#tamayodo").vegas({
		timer: true,
		shuffle: true,
		trainsition: 'fade',
		animation: 'kenburns',
		slides: [
			{ src: dir + "tamayodo_1.jpg" },
			{ src: dir + "tamayodo_2.jpg" }
		]
	});
	$("#mozawa").vegas({
		timer: true,
		shuffle: true,
		trainsition: 'fade',
		animation: 'kenburns',
		slides: [
			{ src: dir + "mozawa_1.jpg" },
			{ src: dir + "mozawa_2.jpg" }
		]
	});
});
</script>