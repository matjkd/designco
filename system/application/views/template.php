<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<?=$this->load->view('global/header')?>

<body onload="initialize()">

<?=$this->load->view('global/iewarning')?>

	<div class="container" id="equalize">
		
		<div class="box" id="leftcolumn">
			
			<div id="logo">
			<img width="185px"  src="https://s3-eu-west-1.amazonaws.com/hotegg/Hot_Egg_LogoNEW.png"/>
			</div>
			
		<?=$this->load->view('global/menu')?>
		
		</div>
		<div class="box" id="midcolumn">
			
						
		</div>
	
		<div class="box" id="rightcolumn" <?php if(isset($background)) {?>style="background:url(<?=base_url()?><?=$background?>) 50% 0%;" <?php }?>>
			
		<?php if(isset($slideshow)) {?>
		<?=$this->load->view($slideshow)?>
		<?php } ?>
			<div class="body_container">
			<div class="main_body">
			<?=$this->load->view('global/warning')?>
			<?php if(isset($main_content)) {?>
			<p>
				<?=$this->load->view($main_content)?>
			</p>
			<?php }?>
			
			
			
			<?php if(isset($content)) {?>
			<div class="content_text">
			<p>
			<?=$this->load->view('global/content')?>
			</p>
			</div>
			
			<?php foreach($content as $row):?>
			<?php if(isset($row->extra)) {?>
			<?=$this->load->view('extra/'.$row->extra)?>
			<?php }?>
			<?php endforeach;?>
			
			<?php }?>
			
			
			
			<?php if(isset($gallery)) {?>
			
			<p>
			
			<?=$this->load->view('gallery/'.$gallery)?>
			<div style="clear:both;  "></div>
			
			</p>
			<?php }?>
				<div style="clear:both; height:30px; "></div>
			<p>
			<div class="footer">&copy; Hotegg</div>
			</p>
			</div>
			</div>
		</div>
	
	</div>


<?=$this->load->view('global/footer')?>	
</body>

</html>