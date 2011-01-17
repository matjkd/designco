<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<?=$this->load->view('global/header')?>

<body onload="initialize()">

<?=$this->load->view('global/iewarning')?>

	<div class="container" id="equalize">
		
		<div class="box" id="leftcolumn">
			
			<div id="logo">
			<img width="185px" height="52px" src="<?=base_url()?>css/template/logo.png"/>
			</div>
			
		<?=$this->load->view('global/menu')?>
		
		</div>
		<div class="box" id="midcolumn">
			
						
		</div>
	
		<div class="box" id="rightcolumn">
			<?=$this->load->view('slideshow')?>
			<div class="body_container">
			<div class="main_body">
			<?php if(isset($main_content)) {?>
			<p>
				<?=$this->load->view($main_content)?>
			</p>
			<?php }?>
			
			
			
			<?php if(isset($content)) {?>
			<p>
			<?=$this->load->view('global/content')?>
			</p>
			<?php }?>
			
			
			<?php if(isset($gallery)) {?>
			
			<p>
			
			<?=$this->load->view('gallery/'.$gallery)?>
			<div style="clear:both; "></div>
			
			</p>
			<?php }?>
				<div style="clear:both; height:20px; "></div>
			<p>
			<div class="footer">&copy; DesignCo &amp; Hotegg Creative Design Ltd</div>
			</p>
			</div>
			</div>
		</div>
	
	</div>

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
</body>

</html>