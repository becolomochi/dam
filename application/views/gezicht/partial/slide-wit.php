<script>
$(function(){
	var dir = "/media/img/gezicht/";
	$("#ohmachi").vegas({
		timer: true,
		shuffle: true,
		trainsition: 'fade',
		animation: 'kenburns',
		slides: [
			{ src: dir + "ohmachi_1.jpg" },
			{ src: dir + "ohmachi_2.jpg" },
			{ src: dir + "ohmachi_4.jpg" },
			{ src: dir + "ohmachi_3.jpg" }
		]
	});
	$("#nanakura").vegas({
		timer: true,
		shuffle: true,
		trainsition: 'fade',
		animation: 'kenburns',
		slides: [
			{ src: dir + "nanakura_1.jpg" },
			{ src: dir + "nanakura_2.jpg" }
		]
	});
	$("#sonohara").vegas({
		timer: true,
		shuffle: true,
		trainsition: 'fade',
		animation: 'kenburns',
		slides: [
			{ src: dir + "sonohara_1.jpg" },
			{ src: dir + "sonohara_2.jpg" }
		]
	});
	$("#hiraide").vegas({
		timer: true,
		shuffle: true,
		trainsition: 'fade',
		animation: 'kenburns',
		slides: [
			{ src: dir + "hiraide_2.jpg" },
			{ src: dir + "hiraide_3.jpg" },
			{ src: dir + "hiraide_4.jpg" }
		]
	});
});
</script>