<?php     echo $html->css('cake.generic.css');?>
<?php echo $this->Session->flash();?>
<div class="services index">
	<h2><?php __('Services');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('SEID');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('description');?></th>
			<th><?php echo $this->Paginator->sort('duration');?></th>
			<th><?php echo $this->Paginator->sort('cost');?></th>
			
	</tr>
	<?php
	$i = 0;
	foreach ($services as $service):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $service['Service']['SEID']; ?>&nbsp;</td>
		<td><?php echo $service['Service']['name']; ?>&nbsp;</td>
		<td><?php echo $service['Service']['description']; ?>&nbsp;</td>
		<td><?php echo $service['Service']['duration']; ?>&nbsp;</td>
		<td><?php echo $service['Service']['cost']; ?>&nbsp;</td>
		
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	
</div>