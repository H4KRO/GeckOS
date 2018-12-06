<div class="app">
<link rel="stylesheet"
	href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css"
	integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ=="
	crossorigin="" />
<script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"
	integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw=="
	crossorigin=""></script>
<script type="text/javascript">
			// On initialise la latitude et la longitude du désert du Namib (centre de la carte)
			var lat = -24.727390; <?php //echo $lat; ?>
			var lon = 15.342391; <?php //echo $lon; ?>
			var macarte = null;
            // On initalise la latitude et la longitude de la destination (marker)
            var destLat = -24.460042566367246; <?php //echo $destLat; ?>
            var destLon = 15.46324060937502; <?php //echo $destLon; ?>
			// Fonction d'initialisation de la carte
			function initMap() {
                var markers = []; // On initialise la liste des marqueurs
				// Créer l'objet "macarte" et l'insèrer dans l'élément HTML qui a l'ID "map"
                macarte = L.map('map').setView([lat, lon], 11);
                // Leaflet ne récupère pas les cartes (tiles) sur un serveur par défaut. Nous devons lui préciser où nous souhaitons les récupérer. Ici, openstreetmap.fr
                L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
                    // Il est toujours bien de laisser le lien vers la source des données
                    attribution: 'données © <a href="//osm.org/copyright">OpenStreetMap</a>/ODbL - rendu <a href="//openstreetmap.fr">OSM France</a>',
                    minZoom: 7,
                    maxZoom: 12
                }).addTo(macarte);
                var marker = L.marker([lat, lon]).addTo(macarte);
                marker.bindPopup('Départ');
                markers.push(marker);
                var destMarker = L.marker([destLat, destLon]).addTo(macarte);
                destMarker.bindPopup('Destination');
                markers.push(destMarker);
                // On adapte le zoom pour afficher tous les marqueurs
                var group = new L.featureGroup (markers);
                macarte.fitBounds(group.getBounds().pad(0.5));
            }
			window.onload = function(){
				// Fonction d'initialisation qui s'exécute lorsque le DOM est chargé
				initMap(); 
			};
		</script>
<style type="text/css">
#map { /* la carte DOIT avoir une hauteur sinon elle n'apparaît pas */
	height: 400px;
}
</style>
	<div id="map">
		<!-- Ici s'affichera la carte -->
	</div>

</div>
