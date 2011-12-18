
<?php     echo $html->css('cake.generic.css',false);?>

<div class="appointments index">


	<h2><?php __('Appointments');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('AID');?></th>
			<th><?php echo $this->Paginator->sort('title');?></th>
			<th><?php echo $this->Paginator->sort('allday');?></th>
			<th><?php echo $this->Paginator->sort('start');?></th>
			<th><?php echo $this->Paginator->sort('end');?></th>
			<th><?php echo $this->Paginator->sort('editable');?></th>
			<th><?php echo $this->Paginator->sort('service_id');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($appointments as $appointment):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $appointment['Appointment']['AID']; ?>&nbsp;</td>
		<td><?php echo $appointment['Appointment']['title']; ?>&nbsp;</td>
		<td><?php echo $appointment['Appointment']['allday']; ?>&nbsp;</td>
		<td><?php echo $appointment['Appointment']['start']; ?>&nbsp;</td>
		<td><?php echo $appointment['Appointment']['end']; ?>&nbsp;</td>
		<td><?php echo $appointment['Appointment']['editable']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($appointment['Service']['name'], array('controller' => 'services', 'action' => 'view', $appointment['Service']['SEID'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($appointment['User']['UID'], array('controller' => 'users', 'action' => 'view', $appointment['User']['UID'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $appointment['Appointment']['AID'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $appointment['Appointment']['AID'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $appointment['Appointment']['AID']), null, sprintf(__('Are you sure you want to delete # %s?', true), $appointment['Appointment']['AID'])); ?>
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
		<li><?php echo $this->Html->link(__('New Appointment', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Services', true), array('controller' => 'services', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Service', true), array('controller' => 'services', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>