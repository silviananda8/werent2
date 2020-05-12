<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
</head>
    <body>
    	<div id="map"></div>
    	<script>
    		var map =L.map().setView([0,0],1);
    		L.tileLayer('https://api.maptiler.com/maps/streets/{z}/{x}/{y}.png?key=lPTVtn2IPOs5kgm2s8Xf',{
    			attribution: '<a href="https://www.maptiler.com/copyright/" target="_blank">&copy; MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">&copy; OpenStreetMap contributors</a>'
    		}).addTo(map);
    	</script>
</html>