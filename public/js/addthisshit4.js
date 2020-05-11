$(document)
	.mousemove(function(e) {
	$('.your-cursor4')
		.eq(0)
		.css({
		left: e.pageX,
		top: e.pageY
	});
	setTimeout(function() {
		$('.your-cursor4')
			.eq(1)
			.css({
			left: e.pageX,
			top: e.pageY
		});
	}, 400);
	setTimeout(function() {
		$('.your-cursor4')
			.eq(2)
			.css({
			left: e.pageX,
			top: e.pageY
		});
	}, 200);
});
$(document).on("mousemove", function(e) {
	mouseX = e.pageX;
	mouseY = e.pageY;
});