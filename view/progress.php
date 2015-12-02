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
<ul class="menu">
    <li id="incProgress">Increase progress</li>
    <li id="getProgress">Get progress</li>
    <li id="checkProgress">Check local progress</li>
    <li id="setProgress">Set progress to 0</li>
</ul>

<style>
	/*
		Green:      #38b12f
        Dark grey:  #5d5d5d
	
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
    .menu{
        margin: auto;
        list-style-type: none;
        display: inline-block;
		padding: 0.25em 0em;
    }
    .menu li{
		padding: 0.25em 0.25em;
		cursor:pointer;
        border-bottom: 2px solid red;

        -moz-user-select: none;
        -webkit-user-select: none;
        -o-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }
    .menu li:hover{
        border-bottom: 2px solid #ffa604 !important;
    }
</style>
