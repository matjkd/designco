<!DOCTYPE html> 
<html lang="en"> 

<?=$this->load->view('global/header')?>

<body>



	<div class="container" id="equalize">
		
		<div class="box" id="leftcolumn">
			
			<div id="logo">
			<img width="191px" height="54px" src="<?=base_url()?>css/template/logo.png"/>
			</div>
		</div>
		<div class="box" id="midcolumn">
			
						
		</div>
	
		<div class="box" id="rightcolumn">
			<img width="694px" height="234px" src="<?=base_url()?>images/slides/brochure.jpg"/>
			
			<p>test</p>
			<p>test</p>
			<p>test</p>
			
		</div>
	
	</div>
	
</body>
<script type="text/javascript"> 
    $(function(){ $('#equalize').equalHeights(); });
</script> 
</html>