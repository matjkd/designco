<div id="menu">
			<ul>
			<li><a href="<?=base_url()?>welcome/main/home">Home</a></li>
			<li><a href="<?=base_url()?>welcome/main/about">About Us</a></li>
			<li><a href="<?=base_url()?>welcome/main/services">What we do</a></li>
			<li><a href="<?=base_url()?>welcome/main/work">Our Work</a>
			
			<?php  
			if(isset($menu) && $menu == "work")
			
			{
			?>
			<ul>
			<li><a href="<?=base_url()?>welcome/gallery/design">Design</a></li>
			<li><a href="<?=base_url()?>welcome/gallery/websites">Websites</a></li>
			<li><a href="<?=base_url()?>welcome/gallery/branding">Branding</a></li>
			<li><a href="<?=base_url()?>welcome/gallery/photography">Photography</a></li>
			</ul>
			<?php }?>
			</li>
			<li><a href="<?=base_url()?>welcome/clients/clients">Our Clients</a></li>
			<li><a href="<?=base_url()?>welcome/main/contact">Contact Us</a></li>
			<li><a href="<?=base_url()?>welcome/main/links">Links</a></li>
			</ul>
</div>