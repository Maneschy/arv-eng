<!DOCTYPE html>
<body>
    
		<?php include './menu_arv.php'; ?>

	<section class="post-wrapper-top jt-shadow clearfix">
		<div class="container">
			<div class="col-lg-12">
				<h2>Nossos Contatos</h2>
                <ul class="breadcrumb pull-right">
                    <li><a href="index.php">Home</a></li>
                    <li>Contato</li>
                </ul>
			</div>
		</div>
	</section><!-- end post-wrapper-top -->

    <section class="white-wrapper nopadding">
    	<div id="map"></div>
        <div class="clearfix"></div>
        <!-- end container -->
    </section><!-- end map wrapper -->

	<footer id="footer-style-1">
    </footer><!-- end #footer-style-1 -->    

<div id="copyrights">
    	<div class="container">
			<div class="col-lg-5 col-md-6 col-sm-12">
            	<div class="copyright-text">
                    <p>Copyright © 2014 - Designed by Jolly Themes</p>
                </div><!-- end copyright-text -->
			</div><!-- end widget -->
			<div class="col-lg-7 col-md-6 col-sm-12 clearfix">
				<div class="footer-menu">
                    <ul class="menu">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Headers</a></li>
                        <li><a href="#">Portfolio</a></li>
                        <li><a href="#">Features</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
			</div><!-- end large-7 --> 
        </div><!-- end container -->
    </div><!-- end copyrights -->
    
	<div class="dmtop">Scroll to Top</div>
        
  <!-- Main Scripts-->
  <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/menu.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.parallax-1.1.3.js"></script>
  <script src="js/jquery.simple-text-rotator.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/jquery.jigowatt.js"></script>
  <script src="js/custom.js"></script>

  <!-- Google Map -->
  <script type="text/javascript">
	(function($) {
	  "use strict";
		var locations = [
		['<div class="infobox"><h3 class="title"><a href="about1.html">OUR USA OFFICE</a></h3><span>NEW YORK CITY 2045 / 65</span><br>+90 555 666 77 88</p></div></div></div>', -3.100450, -60.024351, 2]
		];
	
		var map = new google.maps.Map(document.getElementById('map'), {
		  zoom: 17,
			scrollwheel: false,
			navigationControl: true,
			mapTypeControl: false,
			scaleControl: false,
			draggable: true,
			styles: [ { "stylers": [ { "hue": "#000" },  {saturation: -100},
                {gamma: 1.50} ] } ],
			center: new google.maps.LatLng(-3.100450, -60.024351),
		  mapTypeId: google.maps.MapTypeId.ROADMAP
		});
	
		var infowindow = new google.maps.InfoWindow();
	
		var marker, i;
	
		for (i = 0; i < locations.length; i++) {  
	  
			marker = new google.maps.Marker({ 
			position: new google.maps.LatLng(locations[i][1], locations[i][2]), 
			map: map ,
			icon: 'images/marker1.png'
			});
	
	
		  google.maps.event.addListener(marker, 'click', (function(marker, i) {
			return function() {
			  infowindow.setContent(locations[i][0]);
			  infowindow.open(map, marker);
			}
		  })(marker, i));
		}
	})(jQuery);
  </script>
    
</body>
</html>