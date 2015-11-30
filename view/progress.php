<div class="progressbar">
    <div class="barSection">

    </div>
    <div class="barSection">

    </div>
    <div class="barSection">

    </div>
    <div class="barSection">

    </div>
    <div class="barSection">

    </div>
</div>
<button id="incProgress">Press me! :D</button>
<button id="getProgress">Get progress</button>

<script>
	var progress = 0;

    function getProgress () {
        $.ajax({
            method: "POST",
            url: "../controller/database/getProgress.php"
        })
        .done(function( msg ) {
            return msg;
        });
    }

    $("#getProgress").click(function () {
        alert(getProgress());
    });

	$("#incProgress").click(function () {
		progress++;
		colorBar();
		console.log("beep boop: " + progress);
	});
	
	function colorBar(){
		$(".progressbar .barSection:nth-child(" + progress + ")").css("background-color", "#38b12f");
	}
</script>

<style>
	/*
		Green: #38b12f
	
	*/
	.progressbar{
		margin: auto;
		position: relative;
		top: 0;
		width: 80%;
		display: flex;
		border-bottom-left-radius: 20px;
		border-bottom-right-radius: 20px;
		overflow: hidden;
		border: 3px solid #5d5d5d;
		border-top: 0;
	}
	.barSection{
		height: 20px;
		background-color: #c6c6c6;
		min-width: 1%;
		flex: 1;
		border-right: 1px solid #5d5d5d;
		
		transition: background-color 1s;
	}
    .barSection:last-child{
		border-right: 0;
	}
</style>
