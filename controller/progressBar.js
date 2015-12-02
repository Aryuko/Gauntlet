var progress = null;
var barsColored = 0;

$("document").ready(function () {
	getProgress(function (msg) {
		progress = msg;
	});

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

	window.setTimeout(updateBar, 2000);
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

function updateBar(){
    if (barsColored < progress){
        for(var i = barsColored + 1; i <= progress; i++){
            colorBar(i, "#38b12f");
        }
    }
    else if (barsColored > progress){
        for(var i = barsColored; i > progress; i--){
            colorBar(i, "#c6c6c6");
        }
    }
    barsColored = progress;
}

function colorBar(index, color) {
	$(".progressbar .barSection:nth-child(" + index + ")").css("background-color", color);
}

