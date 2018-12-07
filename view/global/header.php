<!-- The main nav always visible -->
<div class="notification" id="clock">00:00</div>
<div class="line">
	<div class="column">
		<button class="nav-button" onclick="display('Inventaire')"></button>
		<div class="app-title">Inventaire</div>
	</div>
	<div class="column">
			<?php $lon = -20.1515;$lat = 15.151515;$destlon= -20.4512;$destlat= 15.256;?>
				<button class="nav-button"
			onclick=" initMap(<?php echo($lon .','.$lat.','.$destlon.','.$destlat)?>);"></button>
		<div class="app-title">GPS</div>
	</div>
</div>
<div class="line">
	<div class="column">
		<button class="nav-button" onclick="display('Meteo')"></button>
		<div class="app-title">Meteo</div>
	</div>
	<div class="column">
		<button class="nav-button" onclick="display('Canvas')"></button>
		<div class="app-title">Canvas</div>
	</div>
</div>
<div class="line">
	<div class="column">
		<button class="nav-button" onclick="display('Health')"></button>
		<div class="app-title">Santé</div>
	</div>
	<div class="column">
		<button class="nav-button" onclick="display('Chatbox')"></button>
		<div class="app-title">Chatbox</div>
	</div>
</div>