<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script> 
<script type="text/javascript"> 
  var nash = new google.maps.LatLng(51.649486,0.603056);
  var parliament = new google.maps.LatLng(51.649486,0.603056);
  var marker;
  var map;
 
  function initialize() {
    var mapOptions = {
      zoom: 12,
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
<div style="width:280px; float:left;">
<h3>01245 325 787</h3>
<h3><a href="mailto:info@designco.org.uk">info@designco.org.uk</a></h3>
<br/>
DesignCo Essex &amp; London<br/>
60 Elm Road<br/>
South Woodham Ferrers<br/>
Chelmsford<br/>
Essex cm3 5qb<br/>

<?=form_open('email/send');?>
<br/>
Your Email:<br/>
<?=form_input('email')?><br/>
Subject:<br/>
<?=form_input('subject')?><br/>
Message:<br/>
<?=form_textarea('message')?><br/>
<div id="contact_submit"><?=form_submit('submit', 'Submit')?></div><br/>
<?=form_close()?>

</div>
<div id="map_canvas" style="width:340px; height: 300px; float:left;"></div>

<div style="width:340px; float:left;"><h3>Stay in Touch!</h3>
<br/>

<img style="float:left" src="<?=base_url()?>images/social/linkedin.png"/>
<img style="float:left" src="<?=base_url()?>images/social/facebook.png"/>
<img style="float:left" src="<?=base_url()?>images/social/twitter.png"/>

</div>