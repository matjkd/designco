<!DOCTYPE html> 
<html lang="en"> 

<?=$this->load->view('global/header')?>

<body>

<?=$this->load->view('global/iewarning')?>

	<div class="container" id="equalize">
		
		<div class="box" id="leftcolumn">
			
			<div id="logo">
			<img width="191px" height="54px" src="<?=base_url()?>css/template/logo.png"/>
			</div>
			
		<?=$this->load->view('global/menu')?>
		
		</div>
		<div class="box" id="midcolumn">
			
						
		</div>
	
		<div class="box" id="rightcolumn">
			<img width="694px" height="234px" src="<?=base_url()?>images/slides/brochure.jpg"/>
			<div >
			
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
			</p>
			<?php }?>
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