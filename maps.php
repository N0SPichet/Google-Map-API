<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<link href='https://fonts.googleapis.com/css?family=Raleway:100 | PT+Serif' rel='stylesheet' type='text/css'>
		<script>
			$(document).ready(function() {
				$('.section-top').removeClass('hide').css({"display": ""});
				//$("body").animate({"scrollTop": stop}, 1000);
				$('.wrap-top').delay(1000).queue(function() {
						$(this).removeClass('hide');
					});
				//add height full page
				var css = $(window).innerHeight();
				$( ".wrap-top" ).css( "height", css+"px" ).removeClass('mxh');
			});
			<!--/checkbox/-->
			var _strHotelCd = "HT04003286";
		</script>
		<!-- map-->
		<script type="text/javascript">if(window.top.location!=document.location)window.top.location.href=document.location.href;</script>
		<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
		<script type="text/javascript" src="http://google-maps-utility-library-v3.googlecode.com/svn/tags/infobox/1.1.9/src/infobox.js"></script>
		<style>
			@media screen and (max-width: 400px){
			.scroll-down,.icon-gallery{display:none;}
			}
		</style>
	</head>
	<body>
		<div class="loading" style="position: fixed;background: #fbf6ed;width: 100%;height: 100%;display: block;z-index: 999;top: 0;"></div>			
			<div class="wrap get-map">
				<div id="map" style="width:100%; height:750px; margin: 0 auto;"></div>
				<div class="direction-container">
					<div class="direction-title">
						<h3 onclick="toggle_gm()">GET DIRECTIONS</h3>
					</div>
					<div class="direction-box">
						<input id="your_location" style="float: left; width: 175px;" type="text" placeholder="Enter Location">
						<div class="magnify-map" onclick="calculate_direction()"></div>
						<div class="alert-location" style="display:none;">Location not found.</div>
					</div>
				</div>
			</div>
			<!-- /ssi/scroll-slide-page.html -->
		</div>
		<div class="wrap" id="location">
			<div class="col-12 center">
				<div class="cms-editable-text cms-editable" data-cms-module="location" data-cms-action="data" data-cms-id="12" data-cms-param="title,description,photos" data-cms-w="150" data-cms-h="200">
					<h1>Location</h1>
					<a name="to-top"></a>
					<a name="to-top"></a>
					<div class="col-7 center">
						<p>Our luxury Phuket beach resort is located on the Southwest coast of Phuket Island in secluded Kata Noi Bay, less than an hour from Phuket International Airport - and a world away from all care.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="wrap" id="to-down">
			<div class="col-10 center">
				<div class="col-12 wrap-attraction">
					<a class="col-3 attraction" title="7.892140, 98.298841" id="attraction1">
						<img src="/images/150x200/location.dataphoto.171.jpg" alt="7.892140, 98.298841" >
						<div class="map-text-over">Phuket International Airport</div>
					</a>
					<a class="col-3 attraction" title="7.891906, 98.368186" id="attraction2">
						<img src="/images/150x200/location.dataphoto.172.jpg" alt="7.891906, 98.368186" >
						<div class="map-text-over">Phuket Town</div>
					</a>
					<a class="col-3 attraction" title="7.893573, 98.296792" id="attraction3">
						<img src="/images/150x200/location.dataphoto.173.jpg" alt="7.893573, 98.296792" >
						<div class="map-text-over">Promthep Cape</div>
					</a>
					<a class="col-3 attraction" title="7.8935409,98.294592" id="attraction4">
						<img src="/images/150x200/location.dataphoto.174.jpg" alt="7.8935409,98.294592" >
						<div class="map-text-over">Thanon Bangla Patong Beach</div>
					</a>
				</div>
			</div>
		</div>
		<!-- End of DoubleClick Floodlight Tag: Please do not remove -->
		<script>
			var LocationData = [
			    ["Katathani Phuket Beach Resort", 7.8063475,98.2989779 , "/templates/images/icon-point-map.png" ,
			
			    '<div id="product_address">'+
			
			    '<div id="product-left">'+
			      '<a style="padding-top:12px;" href="/" onclick="scroll(this);"><img src="/templates/images/logo.png" width="100%" height="auto"></a>'+
			    '</div>'+
					'<div id="product-right" style="padding-top: 12px;">'+
						'<span><b>Katathani Phuket Beach Resort</b><br>14 Kata Noi Rd., Karon, Muang, Phuket 83100 Thailand</span><br><span><strong>Tel:</strong> +66 (0) 7633 0124 to 6, +66 (0) 7628 4096 to 100</span><br>'+
						'<span><strong>Fax:</strong> +66 (0) 7633 0426</span><br>'+
						'<span><strong>Email:</strong> reservation@katathani.com</span>'+
					'</div>'+
					'</div>'
					],
			    ["attraction1", 8.1110951,98.3042759 , "/templates/images/icon-point-other-map.png" ,
				  '<div id="product_attraction">'+
					'<div id="product-left"><img src="/templates/images/map-phuket-airport.jpg" width="100%" height="auto"></div>'+
					'<div id="product-right"><font>Phuket International Airport</font></div>'+
				  '</div>'
				],
			    ["attraction2", 7.883403,98.374361 , "/templates/images/icon-point-other-map.png",
				  '<div id="product_attraction">'+
					'<div id="product-left"><img src="/templates/images/map-phuket-town.jpg" width="100%" height="auto"></div>'+
					'<div id="product-right"><font>Phuket Town</font></div>'+
				  '</div>'
				],
			    ["attraction3", 7.8935733,98.2965816 , "/templates/images/icon-point-other-map.png" ,
				  '<div id="product_attraction">'+
					'<div id="product-left"><img src="/templates/images/bangla-map.jpg" width="100%" height="auto"></div>'+
					'<div id="product-right"><font>Bang la Avenue</font></div>'+
				  '</div>'
				],
			    ["attraction3", 7.7624884,98.3030149 , "/templates/images/icon-point-other-map.png" ,
				  '<div id="product_attraction">'+
					'<div id="product-left"><img src="/templates/images/phromthep-cape-map.jpg" width="100%" height="auto"></div>'+
					'<div id="product-right"><font>Phromthep Cape</font></div>'+
				  '</div>'
				],
			    ["attraction4", 7.8935409,98.294592 , "/templates/images/icon-point-other-map.png" ,
				  '<div id="product_attraction">'+
					'<div id="product-left"><img src="/templates/images/bangla-map.jpg" width="100%" height="auto"></div>'+
					'<div id="product-right"><font>Thanon Bangla</font></div>'+
				  '</div>'
				]
			];
		</script>
		<script>
			function initialize() {
			    var directionsDisplay = new google.maps.DirectionsRenderer();
					var directionsService = new google.maps.DirectionsService();
			    var hotelfixed = new google.maps.LatLng(LocationData[0][1], LocationData[0][2]);
					var geocoder =  new google.maps.Geocoder();
					var markersArray = [];
			    var map = new google.maps.Map(document.getElementById('map'), {
			        zoom: 17,
			        center: hotelfixed,
			        mapTypeId: google.maps.MapTypeId.ROADMAP,
			        scrollwheel: false,
			        panControl: false,
			        disableDoubleClickZoom: true,
			        mapTypeControl: true,
			        mapTypeControlOptions: {
			          style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
			          position: google.maps.ControlPosition.LEFT_CENTER
			        },
			        zoomControl: true,
			          zoomControlOptions: {
			          position: google.maps.ControlPosition.LEFT_CENTER
			        },
			        scaleControl: true,
			          streetViewControl: true,
			          streetViewControlOptions: {
			              position: google.maps.ControlPosition.LEFT_CENTER
			        },
			    });
			
			    directionsDisplay.setMap(map);
			    directionsDisplay.setOptions({
			        suppressMarkers: true
			    });
			
			    var infowindowhotel = new google.maps.InfoWindow({
			        content: LocationData[0][4]
			    });
			    var markerhotel = new google.maps.Marker({
			        position: hotelfixed,
			        map: map,
			        icon: LocationData[0][3],
			        title: LocationData[0][4],
			    });
			
			    google.maps.event.addListener(markerhotel, 'click', function() {
			        clearotherinfo();
			        infowindowhotel.open(map, markerhotel);
			    });
			    infowindowhotel.open(map, markerhotel);
			
			
					directionsDisplay.setMap(map);
			  	directionsDisplay.setPanel(document.getElementById('directions-panel'));
					var control = document.getElementById('control');
			
					function get_direct_latlng(new_location){
			    geocoder.geocode( { 'address': new_location}, function(results, status) {
			          if (status == google.maps.GeocoderStatus.OK){
			            var direct_lat = results[0].geometry.location.lat();
			            var direct_lng = results[0].geometry.location.lng();
			          }else{
			            //alert("Sorry Google Map Can't find this place.");
			          }
			          direction_marker(direct_lat, direct_lng);
			    	});
			  	}
			
					function direction_marker(direct_lat, direct_lng){
				    deleteOverlays();
				    var direct_position = new google.maps.LatLng(direct_lat, direct_lng);
				    var direct_marker = new google.maps.Marker({
				                  position: direct_position,
				                  map: map,
													icon: "/templates/images/icon-point-map-to.png",
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
			
					var onChangeHandler = function() {
				    if(this.title){
				      var new_location = this.title;
				    }else{
				      var new_location = document.getElementById('your_location').value;
				    }
			
				    get_direct_latlng(new_location);
				    calculateAndDisplayRoute(directionsService, directionsDisplay, new_location);
			
			  	};
			
					document.getElementById('your_location').addEventListener('change', onChangeHandler);
					document.getElementById('attraction1').addEventListener('click', onChangeHandler);
					document.getElementById('attraction2').addEventListener('click', onChangeHandler);
					document.getElementById('attraction3').addEventListener('click', onChangeHandler);
			
					var infowindow = new google.maps.InfoWindow();
					gmarkers = [];
			
					function createMarker(i) {
					    var p = LocationData[i];
					    var latlng = new google.maps.LatLng(p[1], p[2]);
					    var marker = new google.maps.Marker({
					        position: latlng,
					        map: map,
					        icon: p[3],
					        title: p[4],
					    });
					google.maps.event.addListener(marker, 'click', function() {
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
					    gmarkers[LocationData[i][0]] =
					    createMarker(i);
					}
			
					$(".attraction").click(function() {
					    var id = $(this).attr('id');
					    google.maps.event.trigger(gmarkers[id], 'click');
					});
			
					function clearotherinfo() {
					    if (infowindow) {
					        infowindow.close();
					    }
					    if (infowindowhotel) {
					        infowindowhotel.close();
					    }
					}
			
			} // end of intitials function
			
			function calculateAndDisplayRoute(directionsService, directionsDisplay, new_location) {
			
			  var start = new google.maps.LatLng(LocationData[0][1], LocationData[0][2]);
			  var end = new_location;
			
			  directionsService.route({
			    origin: start,
			    destination: end,
			    travelMode: google.maps.TravelMode.DRIVING
			  }, function(response, status) {
			    if (status === google.maps.DirectionsStatus.OK) {
			      directionsDisplay.setDirections(response);
			      $('.alert-location').hide();
			      $('#directions-panel').show("fade");
			    } else {
			      $('#directions-panel').hide("fade");
			      $('.alert-location').show();
			    }
			    $('html,body').animate({ scrollTop: 0 }, 'slow');
			  });
			
			}
			
			google.maps.event.addDomListener(window, 'load', initialize);
		</script>
	</body>