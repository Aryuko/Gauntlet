<!DOCTYPE html>
<html>
	<head>
		<title>Progress</title>
	</head>
	<body>
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
	</body>
</html>

<style>
	.progressbar{
		margin: auto;
		position: relative;
		top: 25%;
		background-color: #909090;
		width: 500px;
		display: flex;
		border-radius: 20px;
		overflow: hidden;
	}
	.barSection{
		height: 100px;
		background-color: #38b12f;
		min-width: 1%;
		flex: 1;
		border-left: 2px solid #777777;
		border-right: 2px solid #4a4a4a;
	}
</style>