<?php $x = 0;?>
<?php foreach($service_groups as $row):?>
<?php $x=$x+1;?>
<div class="services" <?php if($x>3){?> style="height:170px;" <?php }?>>
<h2><?=$row->group_name?></h2>
	<ul>
	<?php foreach($services as $row2):?>
	<?php if($row2->group_id == $row->group_id)
	{?>
	<li>
	<?=$row2->service_name?>
	</li>
	<?php }
	?>
	<?php endforeach;?>
	</ul>
</div>
<?php endforeach;?>
