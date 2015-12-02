var progress = null;

$("document").ready(function () {
	getProgress(function (msg) {
		progress = msg;
	});
	initColorBar();

	alert('document.ready, progress = ' + progress);


    $("#incProgress").click(function () {
        incProgress(function () {
            progress ++;
            alert("Progress increased to: " + progress);
        });
    });

    $("#getProgress").click(function () {
        getProgress(function () {
            alert("Progress: " + progress);
        });
    });

    $("#checkProgress").click(function () {
        alert('Local progress variable: ' + progress);
    });

    $("#setProgress").click(function () {
        setProgress(0, function () {
            progress = 0;
        });
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

function setProgress (data, callback) {
	$.ajax({
		method: "POST",
		url: "controller/database/setProgress.php",
        data: {int: data}
	})
	.done(function() {
		callback();
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

