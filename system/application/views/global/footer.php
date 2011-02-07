
  <!-- Javascript at the bottom for fast page loading -->

  
<!-- Grab Google CDN's jQuery. fall back to local if necessary -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.js"></script>
  <script>!window.jQuery && document.write(unescape('%3Cscript src="<?=base_url()?>js/libs/jquery-1.5.0.js"%3E%3C/script%3E'))</script>

<script>

google.load("jqueryui", "1.8.7");
</script>

<script type="text/javascript" src="<?=base_url()?>js/scripts.js"></script>
<script type="text/javascript" src="<?=base_url()?>js/wymeditor/jquery.wymeditor.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="<?=base_url()?>js/jquery.cycle.all.min.js"></script>
<script type="text/javascript"> 
	$(function() {
		$("button, input:submit").button();
		
		});
	</script>

<script type="text/javascript" src="http://maps.google.com/maps?file=api&amp;v=2&amp;sensor=true&amp;key=ABQIAAAAo44bloMTDYnLwRZTm304PxR7lPs-HPrUFWP7WIAW5FaMW6-CLRRicHwiXsWILdgeE78Lb4tzUFPHiw" type="text/javascript"></script>

    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script> 
  
  <!-- scripts concatenated and minified via ant build script-->
  <script src="<?=base_url()?>js/plugins.js"></script>
  <script src="<?=base_url()?>js/script.js"></script>
  <!-- end concatenated and minified scripts-->
  
  
  <!--[if lt IE 7 ]>
    <script src="js/libs/dd_belatedpng.js"></script>
    <script> DD_belatedPNG.fix('img, .png_bg'); //fix any <img> or .png_bg background-images </script>
  <![endif]-->

<!--[if !IE]><!-->
<script type="text/javascript" charset="utf-8">
		$(document).ready(function(){
			$("a[rel^='prettyPhoto']").prettyPhoto();
		});

	
</script>   
<!-- <![endif]--> 

<!--[if gte IE 7]>
<script type="text/javascript" charset="utf-8">
		$(document).ready(function(){
			$("a[rel^='prettyPhoto']").prettyPhoto();
		});

		
</script> 
<![endif]-->
<script type="text/javascript"> 
$(document).ready(function(){ $('#equalize').equalHeights(); });
</script> 




  <script>
   var _gaq = [['_setAccount', 'UA-19623681-5'], ['_trackPageview']];
   (function(d, t) {
    var g = d.createElement(t),
        s = d.getElementsByTagName(t)[0];
    g.async = true;
    g.src = ('https:' == location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g, s);
   })(document, 'script');
  </script>
 