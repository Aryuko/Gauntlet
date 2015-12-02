var progress = null;
var barsColored = 0;

var green = "#1FBE00";
var grey = "#c6c6c6";

$("document").ready(function () {
	getProgress(function (msg) {
		progress = msg;
	});

    $("#incProgress").click(function () {
        incProgress(function () {
            progress ++;
            updateBar();
        });
    });

    $("#decProgress").click(function () {
        decProgress(function () {
            progress --;
            updateBar();
        });
    });

    $("#getProgress").click(function () {
        getProgress(function (msg) {
            progress = msg;
            alert("Progress: " + progress);
        });
    });

    $("#checkProgress").click(function () {
        alert('Local progress variable: ' + progress);
    });

    $("#setProgress").click(function () {
        setProgress(0, function () {
            progress = 0;
            updateBar();
        });
    });

    $("#updateBars").click(function () {
        updateBar();
    });

	window.setTimeout(updateBar, 500);
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
        data: {value: data}
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

function decProgress (callback) {
	$.ajax({
		method: "PUT",
		url: "controller/database/decProgress.php"
	})
	.done(function() {
		callback();
	});
}

function updateBar(){
    if (barsColored < progress){
        for(var i = barsColored + 1; i <= progress; i++){
            colorBar(i, green);
        }
    }
    else if (barsColored > progress){
        for(var i = barsColored; i > progress; i--){
            colorBar(i, grey);
        }
    }
    barsColored = progress;
}

function colorBar(index, color) {
	$(".progressbar .barSection:nth-child(" + index + ")").css("background-color", color);
}

