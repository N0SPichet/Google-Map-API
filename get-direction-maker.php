<script type="text/javascript">if(window.top.location!=document.location)window.top.location.href=document.location.href;</script>
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://maps.google.com/maps/api/js?key=AIzaSyAxm9C0PTAMWHE77FMCVCZca9le_0xxoCw"></script>

<style>
#title {
    margin: 5px 0px;
    color: #F15922 !important;
    text-decoration: none;
    font-size: 14px !important;
    text-align: left;  
}
#product_address {
	width: 290px;
	height:110px;
	position: relative;
	z-index:9999999;
}
#product-left {
	width: 40%;
	float: left;
	margin-top: 5px;
}
#product-right {
    font-family: Arial,sans-serif !important;
	width: 57%;
    float: left;
    text-align: left;
    margin-left: 3%;
	line-height: 14px;
}
#product-right p {
    margin: 10px 0;
	font-size: 10px;
    font-style: italic;
    color: #4b4b4b;
}
</style>

<div id="map" style="width:100%; height:100%; margin: 0 auto;"></div>

<script>
var LocationData = [
    [7.859162, 98.342716 , "images/marker.png" ,
     
    '<div id="product_address">'+
	'<div id="product-left">'+
		'<a href="http://www.webconnection.asia"><img src="images/webconnection.jpg" width="100%" height="auto"></a>'+
	'</div>'+
	'<div id="product-right">'+
		'<a href="http://www.webconnection.asia"><div id="title">Webconnection.asia</h3></div>'+
		'<p>88/2 Moo 5,Chaofa west road, Chalong, Phuket 83130, Thailand  <br> Tel +66 76 367 700<br>Email: <a href="mailto:contact@webconnection.asia">contact@webconnection.asia</a></p> '+
	'</div>'+	
    '</div>'
    
    ], 
    [7.759184, 98.303643 , "images/map-marker2.png" ,
     
    '<div id="product_address">'+
	'<div id="product-left">'+
		'<a href="http://www.webconnection.asia"><img src="images/promthep-cape.jpg" width="100%" height="auto"></a>'+
	'</div>'+
	'<div id="product-right">'+
		'<a href="http://www.webconnection.asia"><div id="title">Promthep Cape</h3></div>'+
		'<p>Rawai, Mueang Phuket District, Phuket</p> '+
	'</div>'+	
    '</div>'
    
    ], 
    [7.895866, 98.295301 , "images/map-marker2.png" ,
    
    '<div id="product_address">'+
	'<div id="product-left">'+
		'<a href="http://www.webconnection.asia"><img src="images/patong-beach.jpg" width="100%" height="auto"></a>'+
	'</div>'+
	'<div id="product-right">'+
		'<a href="http://www.webconnection.asia"><div id="title">Patong Beach</h3></div>'+
		'<p>15 186/15 Thawewong Rd, Tambon Patong, Amphoe Kathu, Chang Wat Phuket 83150</p> '+
	'</div>'+	
    '</div>'
    ]
];
</script>
<script>
var directionsDisplay;
var directionsService = new google.maps.DirectionsService();
function initialize()
{
    directionsDisplay = new google.maps.DirectionsRenderer();
    var hotelfixed = new google.maps.LatLng(LocationData[0][0], LocationData[0][1]);
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
	   infowindowhotel.open(map,markerhotel);
    });
    infowindowhotel.open(map,markerhotel);


}
 
google.maps.event.addDomListener(window, 'load', initialize);

</script>