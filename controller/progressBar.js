var progress = 0;

$("document").ready(function () {
	getProgress(function (msg) {
		progress = msg;
	});
	colorBar();
});

function getProgress (callback) {
	$.ajax({
		method: "GET",
		url: "../controller/database/getProgress.php"
	})
	.done(function( msg ) {
		callback(msg);
	});
}

function incProgress (callback) {
	$.ajax({
		method: "PUT",
		url: "../controller/database/incProgress.php"
	})
	.done(function() {
		callback();
	});
}
/*
function decProgress (callback) {
	$.ajax({
		method: "PUT",
		url: "../controller/database/incProgress.php"
	})
	.done(function() {
		callback();
	});
}
*/
function colorBar() {
	$(".progressbar .barSection:nth-child(" + progress + ")").css("background-color", "#38b12f");
}

$("#incProgress").click(function () {
	incProgress(function () {
		alert("Updated progress: " + progress);
	});
});

$("#checkProgress").click(function () {
	alert(progress);
});
