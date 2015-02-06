<!DOCTYPE html>

<html>
<head>
	<title>Chemclave'15</title>
	<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/default.css">
	<link rel="stylesheet" type="text/css" href="css/component.css">
	<link rel="stylesheet" type="text/css" href="css/tabulous.css">
	<link rel="stylesheet" type="text/css" href="css/creativelink.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<script type="text/javascript" src="https://code.jquery.com/jquery-git2.min.js"></script>
	<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.webticker.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/Markdown.Converter.min.js"></script>
	<link href="css/prettify.css" rel="stylesheet" type="text/css"/>
	<script src="js/prettify.js"></script>
	<script type="text/javascript" src="js/jquery.coverflow.js"></script>
	<script src="js/jquery.interpolate.js"></script>
	<script src="js/jquery.mousewheel.js"></script>
	<script src="js/jquery.touchSwipe.min.js"></script>
	<script src="js/reflection.js"></script>
	<script type="text/javascript" src="js/tabulous.js"></script>
	<script type="text/javascript" src="js/modernizr.custom.js"></script>
	<script type="text/javascript">
		// The following example creates a marker in Stockholm, Sweden
		// using a DROP animation. Clicking on the marker will toggle
		// the animation between a BOUNCE animation and no animation.

		var chemclave = new google.maps.LatLng(12.990247, 80.230844);
		var marker;
		var map;

		function initialize() {
		  var mapOptions = {
		    zoom: 17,
		    center: chemclave
		  };

		  map = new google.maps.Map(document.getElementById('map-canvas'),
		          mapOptions);

		  marker = new google.maps.Marker({
		    map:map,
		    draggable:true,
		    animation: google.maps.Animation.DROP,
		    position: chemclave
		  });
		  google.maps.event.addListener(marker, 'click', toggleBounce);
		}

		function toggleBounce() {

		  if (marker.getAnimation() != null) {
		    marker.setAnimation(null);
		  } else {
		    marker.setAnimation(google.maps.Animation.BOUNCE);
		  }
		}

		google.maps.event.addDomListener(window, 'load', initialize);
	</script>
	<script type="text/javascript" src="js/scripts.js"></script>
</head>
<body>
<div class="loader"></div>
<?php include('base/nav.php') ?>
<?php 
	switch($_GET['page']){
		case 'events':
			include('pages/events.php');
			break;
		case 'timeline':
			include('pages/timeline.php');
			break;
		case 'people':
			include('pages/people.php');
			break;
		case 'register':
			include('pages/register.php');
			break;
		case 'spons':
			include('pages/spons.php');
			break;
		case 'contact':
			include('pages/contact.php');
			break;
		case 'dashboard':
			include('pages/dashboard.php');
			break;
		default:
			include('pages/home.php');
	}
 ?>
<?php include('base/footer.php') ?>
</body>
</html>