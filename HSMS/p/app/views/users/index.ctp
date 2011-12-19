<div class="users index">
<?php     echo $html->css('cake.generic.css');?>
	<h2><?php __('Users');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('UID');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('password');?></th>
			<th><?php echo $this->Paginator->sort('last_login');?></th>
			<th><?php echo $this->Paginator->sort('is_employee');?></th>
			<th><?php echo $this->Paginator->sort('is_manager');?></th>
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
	foreach ($users as $user):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $user['User']['UID']; ?>&nbsp;</td>
		<td><?php echo $user['User']['name']; ?>&nbsp;</td>
		<td><?php echo $user['User']['password']; ?>&nbsp;</td>
		<td><?php echo $user['User']['last_login']; ?>&nbsp;</td>
		<td><?php echo $user['User']['is_employee']; ?>&nbsp;</td>
		<td><?php echo $user['User']['is_manager']; ?>&nbsp;</td>
		<td><?php echo $user['User']['firstName']; ?>&nbsp;</td>
		<td><?php echo $user['User']['lastName']; ?>&nbsp;</td>
		<td><?php echo $user['User']['DOB']; ?>&nbsp;</td>
		<td><?php echo $user['User']['gender']; ?>&nbsp;</td>
		<td><?php echo $user['User']['phoneNumber']; ?>&nbsp;</td>
		<td><?php echo $user['User']['street']; ?>&nbsp;</td>
		<td><?php echo $user['User']['postalCode']; ?>&nbsp;</td>
		<td><?php echo $user['User']['city']; ?>&nbsp;</td>
		<td><?php echo $user['User']['country']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $user['User']['UID'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $user['User']['UID'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $user['User']['UID']), null, sprintf(__('Are you sure you want to delete # %s?', true), $user['User']['UID'])); ?>
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
		<li><?php echo $this->Html->link(__('New User', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Appointments', true), array('controller' => 'appointments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Appointment', true), array('controller' => 'appointments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List News', true), array('controller' => 'news', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New News', true), array('controller' => 'news', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Shifts', true), array('controller' => 'shifts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Shifts', true), array('controller' => 'shifts', 'action' => 'add')); ?> </li>
	</ul>
</div>
