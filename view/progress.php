<!DOCTYPE html>
<html>
	<head>
		<title>Progress</title>
	</head>
	<body>
		<div id="progressbar">
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
	</body>
</html>
<script>
	var progress = 0;
	
	$(".progressbar").click(function () {
		progress++;
		increase();
	});
	
	function increase(){
		$(".progressbar .barSection:nth-child(" + (progress) + ")").css("background-color", "#38b12f");
	}
</script>
<style>
	/*
		Green: #38b12f
	
	*/
	#progressbar{
		margin: auto;
		position: relative;
		top: 25%;
		background-color: #909090;
		width: 500px;
		display: flex;
		border-radius: 20px;
		overflow: hidden;
		border: 4px solid #c6c6c6;
	}
	.barSection{
		height: 100px;
		background-color: #5d5d5d;
		min-width: 1%;
		flex: 1;
		border-right: 1px solid #c6c6c6;
		
		transition: 2s background-color;
	}
</style>
