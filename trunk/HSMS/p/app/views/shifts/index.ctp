<?php echo $this->Session->flash();?>
<div class="shifts index">
<?php     echo $html->css('cake.generic.css');?>
	<h2><?php __('Shifts');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('SHID');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th><?php echo $this->Paginator->sort('from');?></th>
			<th><?php echo $this->Paginator->sort('to');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($shifts as $shift):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $shift['Shift']['SHID']; ?>&nbsp;</td>
		<td><?php echo $this->Html->link($shift['User']['name'], array('controller' => 'users', 'action' => 'view', $shift['User']['UID'])); ?>&nbsp;</td>
		<td><?php echo $shift['Shift']['from']; ?>&nbsp;</td>
		<td><?php echo $shift['Shift']['to']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $shift['Shift']['SHID'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $shift['Shift']['SHID'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $shift['Shift']['SHID']), null, sprintf(__('Are you sure you want to delete # %s?', true), $shift['Shift']['SHID'])); ?>
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
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Appointments', true), array('controller' => 'appointments', 'action' => 'viewAll')); ?> </li>
		<li><?php echo $this->Html->link(__('View Calendar', true), array('controller' => 'appointments', 'action' => 'index')); ?> </li>		
		<li><?php echo $this->Html->link(__('List News', true), array('controller' => 'news', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New News', true), array('controller' => 'news', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Shifts', true), array('controller' => 'shifts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Shifts', true), array('controller' => 'shifts', 'action' => 'add')); ?> </li>
	</ul>
</div>