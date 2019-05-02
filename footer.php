 

<!-- Jquery -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/html_templates/build/assets/js/vendors/jquery-3.3.1.min.js"></script> 

 

<!-- Slick slider -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/html_templates/build/assets/js/vendors/slick.min.js"></script> 
 

<!-- Animate on scroll -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/html_templates/build/assets/js/vendors/aos.js"></script> 
 

<!-- Bootstrap -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/html_templates/build/assets/js/vendors/bootstrap.min.js"></script> 
 


<script src="<?php echo get_stylesheet_directory_uri(); ?>/html_templates/build/https://maps.googleapis.com/maps/api/js?key=AIzaSyDoLs4jh4_7ZW16LDVDAXDPGISWv9RN-x8&amp;callback=initMap"></script> 
<script>


	var locations = [
				['<h5>Головний офіс</h5><p>Київська обл.,Бориспільский район, с.Проліски, вул. Промислова 2</p>', 50.6112663, 30.43034075, 4],
				['<h5>Showrooms 1</h5><p>Showrooms Showrooms Showrooms</p>', 50.3912663, 30.56034075, 5],
				['<h5>Showrooms 2</h5><p>Showrooms Showrooms Showrooms</p>', 50.2912663, 30.46034075, 3],
				['<h5>Showrooms 3</h5><p>Showrooms Showrooms Showrooms</p>', 50.4912663, 30.43034075, 2],
				['<h5>Showrooms 4</h5><p>Showrooms Showrooms Showrooms</p>', 50.2112663, 30.66034075, 1]
			];
	
			var map = new google.maps.Map(document.getElementById('map'), {
				zoom: 10,
				center: new google.maps.LatLng(50.3912663, 30.56034075),
				mapTypeId: google.maps.MapTypeId.ROADMAP,
				styles: [
			{
					"featureType": "water",
					"elementType": "geometry.fill",
					"stylers": [
							{
									"color": "#d3d3d3"
							}
					]
			},
			{
					"featureType": "transit",
					"stylers": [
							{
									"color": "#808080"
							},
							{
									"visibility": "off"
							}
					]
			},
			{
					"featureType": "road.highway",
					"elementType": "geometry.stroke",
					"stylers": [
							{
									"visibility": "on"
							},
							{
									"color": "#b3b3b3"
							}
					]
			},
			{
					"featureType": "road.highway",
					"elementType": "geometry.fill",
					"stylers": [
							{
									"color": "#ffffff"
							}
					]
			},
			{
					"featureType": "road.local",
					"elementType": "geometry.fill",
					"stylers": [
							{
									"visibility": "on"
							},
							{
									"color": "#ffffff"
							},
							{
									"weight": 1.8
							}
					]
			},
			{
					"featureType": "road.local",
					"elementType": "geometry.stroke",
					"stylers": [
							{
									"color": "#d7d7d7"
							}
					]
			},
			{
					"featureType": "poi",
					"elementType": "geometry.fill",
					"stylers": [
							{
									"visibility": "on"
							},
							{
									"color": "#ebebeb"
							}
					]
			},
			{
					"featureType": "administrative",
					"elementType": "geometry",
					"stylers": [
							{
									"color": "#a7a7a7"
							}
					]
			},
			{
					"featureType": "road.arterial",
					"elementType": "geometry.fill",
					"stylers": [
							{
									"color": "#ffffff"
							}
					]
			},
			{
					"featureType": "road.arterial",
					"elementType": "geometry.fill",
					"stylers": [
							{
									"color": "#ffffff"
							}
					]
			},
			{
					"featureType": "landscape",
					"elementType": "geometry.fill",
					"stylers": [
							{
									"visibility": "on"
							},
							{
									"color": "#efefef"
							}
					]
			},
			{
					"featureType": "road",
					"elementType": "labels.text.fill",
					"stylers": [
							{
									"color": "#696969"
							}
					]
			},
			{
					"featureType": "administrative",
					"elementType": "labels.text.fill",
					"stylers": [
							{
									"visibility": "on"
							},
							{
									"color": "#737373"
							}
					]
			},
			{
					"featureType": "poi",
					"elementType": "labels.icon",
					"stylers": [
							{
									"visibility": "off"
							}
					]
			},
			{
					"featureType": "poi",
					"elementType": "labels",
					"stylers": [
							{
									"visibility": "off"
							}
					]
			},
			{
					"featureType": "road.arterial",
					"elementType": "geometry.stroke",
					"stylers": [
							{
									"color": "#d6d6d6"
							}
					]
			},
			{
					"featureType": "road",
					"elementType": "labels.icon",
					"stylers": [
							{
									"visibility": "off"
							}
					]
			},
			
			{
					"featureType": "poi",
					"elementType": "geometry.fill",
					"stylers": [
							{
									"color": "#dadada"
							}
					]
			}
	]
			});
	
			var infowindow = new google.maps.InfoWindow();
	
			var marker, i;
	
			for (i = 0; i < locations.length; i++) {  
				marker = new google.maps.Marker({
					position: new google.maps.LatLng(locations[i][1], locations[i][2]),
					map: map
				});
	
				google.maps.event.addListener(marker, 'click', (function(marker, i) {
					return function() {
						infowindow.setContent(locations[i][0]);
						infowindow.open(map, marker);
					}
				})(marker, i));
			}
		</script>
 
<script src="<?php echo get_stylesheet_directory_uri(); ?>/html_templates/build/assets/js/script.min.js"></script>



