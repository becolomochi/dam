<script>
$(function(){
	var dir = "/media/img/gezicht/";
	$("#shimokubo").vegas({
		timer: true,
		shuffle: true,
		trainsition: 'fade',
		animation: 'kenburns',
		slides: [
			{ src: dir + "shimokubo_1.jpg" },
			{ src: dir + "shimokubo_2.jpg" },
			{ src: dir + "shimokubo_3.jpg" },
			{ src: dir + "shimokubo_4.jpg" }
		]
	});
	$("#takatsudo").vegas({
		timer: true,
		shuffle: true,
		trainsition: 'fade',
		animation: 'kenburns',
		slides: [
			{ src: dir + "takatsudo_1.jpg" },
			{ src: dir + "takatsudo_2.jpg" },
			{ src: dir + "takatsudo_3.jpg" },
			{ src: dir + "takatsudo_4.jpg" },
			{ src: dir + "takatsudo_5.jpg" },
			{ src: dir + "takatsudo_6.jpg" }
		]
	});
});
</script>