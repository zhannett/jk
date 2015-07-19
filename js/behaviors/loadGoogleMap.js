JK.Behaviors.loadGoogleMap = function (container) {
	"use strict";
	function load() {
	    if (GBrowserIsCompatible()) {
		var map = new GMap2(document.getElementById("map")),
		    point = new GLatLng(43.667566, -79.405817),
		    trafficInfo;
		map.setCenter(point, 13);
		map.addOverlay(createMarker(map, point, 0));
		map.addControl(new GLargeMapControl());
		map.addControl(new GMapTypeControl());
		trafficInfo = new GTrafficOverlay();
		map.addOverlay(trafficInfo);
	    }
	}
	function createMarker(map, point, number) {
	    var marker = new GMarker(point),
		message = ["M5R 2W5, Canada"];
	    marker.value = number;
	    GEvent.addListener(marker, "click", function () {
		var myHtml = "M5R 2W5, Canada";
		map.openInfoWindowHtml(point, myHtml);
	    });
	    return marker;
	}
    window.onload = load;
    window.onunload = GUnload;
};