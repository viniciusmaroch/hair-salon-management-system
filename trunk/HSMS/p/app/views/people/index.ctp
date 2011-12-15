<div class="people index">
	<h2><?php __('People');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('PID');?></th>
			<th><?php echo $this->Paginator->sort('firstName');?></th>
			<th><?php echo $this->Paginator->sort('lastName');?></th>
			<th><?php echo $this->Paginator->sort('DOB');?></th>
			<th><?php echo $this->Paginator->sort('gender');?></th>
			<th><?php echo $this->Paginator->sort('phoneNumber');?></th>
			<th><?php echo $this->Paginator->sort('street');?></th>
			<th><?php echo $this->Paginator->sort('postalCode');?></th>
			<th><?php echo $this->Paginator->sort('city');?></th>
			<th><?php echo $this->Paginator->sort('country');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($people as $person):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $person['Person']['PID']; ?>&nbsp;</td>
		<td><?php echo $person['Person']['firstName']; ?>&nbsp;</td>
		<td><?php echo $person['Person']['lastName']; ?>&nbsp;</td>
		<td><?php echo $person['Person']['DOB']; ?>&nbsp;</td>
		<td><?php echo $person['Person']['gender']; ?>&nbsp;</td>
		<td><?php echo $person['Person']['phoneNumber']; ?>&nbsp;</td>
		<td><?php echo $person['Person']['street']; ?>&nbsp;</td>
		<td><?php echo $person['Person']['postalCode']; ?>&nbsp;</td>
		<td><?php echo $person['Person']['city']; ?>&nbsp;</td>
		<td><?php echo $person['Person']['country']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $person['Person']['PID'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $person['Person']['PID'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $person['Person']['PID']), null, sprintf(__('Are you sure you want to delete # %s?', true), $person['Person']['PID'])); ?>
		</td>
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
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Person', true), array('action' => 'add')); ?></li>
	</ul>
</div>