<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script> 
<script type="text/javascript"> 
  var nash = new google.maps.LatLng(51.649486,0.603056);
  var parliament = new google.maps.LatLng(51.649486,0.603056);
  var marker;
  var map;
 
  function initialize() {
    var mapOptions = {
      zoom: 16,
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      center: nash
    };
 
    map = new google.maps.Map(document.getElementById("map_canvas"),
            mapOptions);
          
    marker = new google.maps.Marker({
      map:map,
      draggable:true,
      animation: google.maps.Animation.DROP,
      position: parliament
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
</script> 

<div id="map_canvas" style="width: 400px; height: 300px;">map div</div>

er 
