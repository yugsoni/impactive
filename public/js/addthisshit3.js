var cursor = $(".your-cursor3");

var posX = 0,
	posY = 0;

TweenMax.to({}, 0.016, {
	repeat: -1,
	onRepeat: function() {
		posX += (mouseX - posX) / 10;
		posY += (mouseY - posY) / 10;

		TweenMax.set(cursor, {
			css: {    
				left: mouseX,
				top: mouseY
			}
		});
	}
});

$(document).on("mousemove", function(e) {
	mouseX = e.pageX;
	mouseY = e.pageY;
});

$("a").on("mouseenter", function() {
	cursor.addClass("active");
});
$("a").on("mouseleave", function() {
	cursor.removeClass("active");
});