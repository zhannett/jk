/**
 * @author Janet
 */

 
 	function load() {
		if (GBrowserIsCompatible()) {
			var map = new GMap2(document.getElementById("map"));
			var point = new GLatLng(43.667566, -79.405817);
			map.setCenter(point, 13);
			map.addOverlay(createMarker(map,point,0));
			map.addControl(new GLargeMapControl());
			map.addControl(new GMapTypeControl());							
			var trafficInfo = new GTrafficOverlay();
			map.addOverlay(trafficInfo);
		}
	}		
	function createMarker(map,point, number) {
		var marker = new GMarker(point);
		var message = ["22 Walmer Rd,Toronto, ON, M5R 2W5, Canada"];
		marker.value = number;				
		GEvent.addListener(marker, "click", function() {
			var myHtml = "22 Walmer Rd,Toronto, ON, M5R 2W5, Canada";
			map.openInfoWindowHtml(point,myHtml);
			});
			return marker;
	}					
	window.onload = load;
	window.onunload = GUnload;