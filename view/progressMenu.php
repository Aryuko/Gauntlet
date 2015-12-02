<ul class="menu">
    <li id="incProgress">Increase progress</li>
    <li id="decProgress">Decrease progress</li>
    <li id="setProgress">Set progress to 0</li>
</ul>

<style>
    .menu{
        margin: auto;
        list-style-type: none;
        display: inline-block;
		padding: 0.25em 0em;
    }
    .menu li{
		padding: 0.35em 0.25em;
		cursor:pointer;
        border-bottom: 2px solid #1FBE00;
        color: rgba(255, 255, 255, 0.9);

        -moz-user-select: none;
        -webkit-user-select: none;
        -o-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }
    .menu li:hover{
        border-bottom: 2px solid #30ff07 !important;
        color: white;
    }
</style>
