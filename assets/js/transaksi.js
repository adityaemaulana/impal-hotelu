$(document).ready(function() {
	$("div.content > div").hide();
	$(".nav li:first").addClass("active").show();
	$("div.content div:first").show();

	$("#nextR").click(function() {
		$("div.content > div").hide();
		$("#navR").removeClass("active");
		$("#navP").addClass("active");
		$("#pembayaran").fadeIn();
	});

	$("#nextP").click(function() {
		$("div.content > div").hide();
		$("#navP").removeClass("active");
		$("#navS").addClass("active");
		$("#pembayaran").fadeIn();
	});
});