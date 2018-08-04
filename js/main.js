var LocationData = [
    [7.859162, 98.342716 , "images/marker.png" ,
     
    '<div id="product_address">'+
	'<div id="product-left">'+
		'<a href="images/webconnection.jpg"><img src="images/webconnection.jpg" width="100%" height="auto"></a>'+
	'</div>'+
	'<div id="product-right">'+
		'<a href=""><div id="title">Webconnection.asia</h3></div>'+
		'<p>88/2 Moo 5,Chaofa west road, Chalong, Phuket 83130, Thailand  <br> Tel +66 76 367 700<br>Email: <a href="mailto:contact@webconnection.asia">contact@webconnection.asia</a></p> '+
	'</div>'+	
    '</div>'
    ,'Webconnection'
    ], 
    [7.759184, 98.303643 , "images/map-marker2.png" ,
     
    '<div id="product_address">'+
	'<div id="product-left">'+
		'<a href="images/promthep-cape.jpg"><img src="images/promthep-cape.jpg" width="100%" height="auto"></a>'+
	'</div>'+
	'<div id="product-right">'+
		'<a href=""><div id="title">Promthep Cape</h3></div>'+
		'<p>Rawai, Mueang Phuket District, Phuket</p> '+
	'</div>'+	
    '</div>'
    ,'map1'
    ], 
    [7.895866, 98.295301 , "images/map-marker2.png" ,
    
    '<div id="product_address">'+
	'<div id="product-left">'+
		'<a href="images/patong-beach.jpg"><img src="images/patong-beach.jpg" width="100%" height="auto"></a>'+
	'</div>'+
	'<div id="product-right">'+
		'<a href=""><div id="title">Patong Beach</h3></div>'+
		'<p>15 186/15 Thawewong Rd, Tambon Patong, Amphoe Kathu, Chang Wat Phuket 83150</p> '+
	'</div>'+	
    '</div>'
    ,'map2'
    ],
    [8.111099, 98.306464, "images/map-marker2.png",
    '<div id="product_address">'+
	'<div id="product-left">'+
		'<a href="images/map-phuket-airport.jpg"><img src="images/map-phuket-airport.jpg" width="100%" height="auto"></a>'+
	'</div>'+
	'<div id="product-right">'+
		'<a href=""><div id="title">Phuket International Airport</h3></div>'+
		'<p>Mai Khao, Thalang District, Phuket 83110</p> '+
	'</div>'+	
    '</div>'
   	,'map3'
   	]
];

var directionsDisplay;
var directionsService = new google.maps.DirectionsService();
function initialize()
{
	console.log('hi google');
    directionsDisplay = new google.maps.DirectionsRenderer();
    var hotelfixed = new google.maps.LatLng(LocationData[0][0], LocationData[0][1]);
    var geocoder =  new google.maps.Geocoder();
    var markersArray = [];
    //var mapcenter = new google.maps.LatLng(hotelfixed);
    var map = new google.maps.Map(document.getElementById('map'),{
		
		zoom: 12,
		center: hotelfixed, 
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		scrollwheel: false,
		panControl: false,
		disableDoubleClickZoom: true,	
        disableDefaultUI: false,
	});
    
    directionsDisplay.setMap(map);
    directionsDisplay.setOptions( { suppressMarkers: true } );
    var infowindow = new google.maps.InfoWindow();
        
    for (var i in LocationData)
    {
        var p = LocationData[i];
        var latlng = new google.maps.LatLng(p[0], p[1]);
        var marker = new google.maps.Marker({
            position: latlng,
            map: map,
            icon: p[2],
            title: p[3],
	    
        });
     
        google.maps.event.addListener(marker, 'click', function() {
        	console.log('hi google old addListener');
            var start = hotelfixed;
            var end = this.position;
            var request = {
                origin:start,
                destination:end,
                travelMode: google.maps.TravelMode.DRIVING
            };
            directionsService.route(request, function(response, status) {
                if (status == google.maps.DirectionsStatus.OK) {
                    directionsDisplay.setDirections(response);
                }
            });
            
            infowindow.setContent(this.title);
            infowindow.open(map, this);
            
        });

    }

    var infowindowhotel = new google.maps.InfoWindow({
	      content: LocationData[0][3]
    });

    var markerhotel = new google.maps.Marker({
            position: hotelfixed,
            map: map,
            icon: LocationData[0][2],
            title: LocationData[0][3],
	    
    });

    /*google.maps.event.addListener(map, 'dragend', function() {
	// 3 seconds after the center of the map has changed, pan back to the
	// marker.
	alert("map:"+map.getCenter());
	});*/

    google.maps.event.addListener(markerhotel, 'click', function() {
    	console.log('hi google onclick');
		infowindowhotel.open(map,markerhotel);
    });
    infowindowhotel.open(map,markerhotel);

	function get_direct_latlng(new_location) {
		console.log('hi google get direction ' + new_location);
		geocoder.geocode({
			'address': new_location
		}, function (results, status) {
			if (status == google.maps.GeocoderStatus.OK) {
				var direct_lat = results[0].geometry.location.lat();
				var direct_lng = results[0].geometry.location.lng();
				direction_marker(direct_lat, direct_lng);
			} else {
				alert("Sorry Google Map Can't find this place.");
			}
		});
	}

	function direction_marker(direct_lat, direct_lng) {
		deleteOverlays();
		var direct_position = new google.maps.LatLng(direct_lat, direct_lng);
		var direct_marker = new google.maps.Marker({
			position: direct_position,
			map: map,
			icon: "images/icon-point-map-to.png",
			scrollwheel: false,
		});
		// To add the marker to the map, call setMap();
		markersArray.push(direct_marker);
	}

	function deleteOverlays() {
		if (markersArray) {
			for (i in markersArray) {
				markersArray[i].setMap(null);
			}
			markersArray.length = 0;
		}
	}

	var onChangeHandler = function () {
		if (this.title) {
			var new_location = this.title;
		}

		get_direct_latlng(new_location);
		calculateAndDisplayRoute(directionsService, directionsDisplay, new_location);

	};

	document.getElementById('map1').addEventListener('click', onChangeHandler);
	document.getElementById('map2').addEventListener('click', onChangeHandler);
	document.getElementById('map3').addEventListener('click', onChangeHandler);

	var gmarkers = [];

	function createMarker(i) {
		var p = LocationData[i];
		var latlng = new google.maps.LatLng(p[0], p[1]);
		var marker = new google.maps.Marker({
			position: latlng,
			map: map,
			icon: p[2],
			title: p[3],
		});
		google.maps.event.addListener(marker, 'click', function () {
			clearotherinfo()
			//map.setCenter(latlng);
			get_direct_latlng(latlng);
			calculateAndDisplayRoute(directionsService, directionsDisplay, latlng);
			infowindow.setContent(this.title);
			infowindow.open(map, this);
		});
		return marker;
	}

	for (var i = 0; i < LocationData.length; i++) {
		gmarkers[LocationData[i][0]] = createMarker(i);
	}

	$(".map").click(function () {
		console.log('hi google .map click');
		var id = $(this).attr('id');
		google.maps.event.trigger(gmarkers[id], 'click');
	});

	function clearotherinfo() {
		console.log('hi google clearotherinfo');
		if (infowindow) {
			infowindow.close();
		}
		if (infowindowhotel) {
			infowindowhotel.close();
		}
	}

}

function calculateAndDisplayRoute(directionsService, directionsDisplay, new_location) {
	var start = new google.maps.LatLng(LocationData[0][0], LocationData[0][1]);
	var end = new_location;
	var request = {
        origin:start,
        destination:end,
        travelMode: google.maps.TravelMode.DRIVING
    };

	directionsService.route(request, function (response, status) {
		if (status === google.maps.DirectionsStatus.OK) {
			directionsDisplay.setDirections(response);
		}
		$('html,body').animate({
			scrollTop: 0
		}, 'slow');
	});

}
 
google.maps.event.addDomListener(window, 'load', initialize);