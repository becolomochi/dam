<script>
$(function(){
	var dir = "/media/img/gezicht/";
	$("#naramata").vegas({
		timer: true,
		shuffle: true,
		trainsition: 'fade',
		animation: 'kenburns',
		slides: [
			{ src: dir + "naramata_1.jpg" },
			{ src: dir + "naramata_2.jpg" },
			{ src: dir + "naramata_3.jpg" },
			{ src: dir + "naramata_4.jpg" },
			{ src: dir + "naramata_5.jpg" }
		]
	});
	$("#yagisawa").vegas({
		timer: true,
		shuffle: true,
		trainsition: 'fade',
		animation: 'kenburns',
		slides: [
			{ src: dir + "yagisawa_1.jpg" },
			{ src: dir + "yagisawa_2.jpg" },
			{ src: dir + "yagisawa_3.jpg" }
		]
	});
	$("#sudagai").vegas({
		timer: true,
		shuffle: true,
		trainsition: 'fade',
		animation: 'kenburns',
		slides: [
			{ src: dir + "sudagai_1.jpg" },
			{ src: dir + "sudagai_2.jpg" }
		]
	});
});
</script>