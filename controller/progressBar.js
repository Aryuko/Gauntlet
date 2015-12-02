var progress = null;

$("document").ready(function () {
	getProgress(function (msg) {
		progress = msg;
	});
	initColorBar();

	alert('document.ready, progress = ' + progress);


    $("#incProgress").click(function () {
        incProgress(function () {
            alert("Progress increased to: " + progress);
        });
    });

    $("#checkProgress").click(function () {
        alert('Progress: ' + progress);
    });

});

function getProgress (callback) {
	$.ajax({
		method: "GET",
		url: "controller/database/getProgress.php"
	})
	.done(function(msg) {
		callback(msg);
	});
}

function incProgress (callback) {
	$.ajax({
		method: "PUT",
		url: "controller/database/incProgress.php"
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
function initColorBar(){
	for(var i = 1; i <= progress; i++){
		colorBar(i);
	}
}

function colorBar(index) {
	$(".progressbar .barSection:nth-child(" + index + ")").css("background-color", "#38b12f");
}

