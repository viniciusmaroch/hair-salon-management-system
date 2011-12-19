<div class="users form">
<?php     echo $html->css('cake.generic.css');?>
<?php echo $this->Form->create('User');?>
	<fieldset>
		<legend><?php __('Edit User'); ?></legend>
	<?php
		echo $this->Form->input('UID');
		echo $this->Form->input('name');
		echo $this->Form->input('password');
		echo $this->Form->input('last_login');
		echo $this->Form->input('is_employee');
		echo $this->Form->input('is_manager');
		echo $this->Form->input('firstName');
		echo $this->Form->input('lastName');
		echo $this->Form->input('DOB');
		echo $this->Form->input('gender');
		echo $this->Form->input('phoneNumber');
		echo $this->Form->input('street');
		echo $this->Form->input('postalCode');
		echo $this->Form->input('city');
		echo $this->Form->input('country');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('User.UID')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('User.UID'))); ?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Appointments', true), array('controller' => 'appointments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Appointment', true), array('controller' => 'appointments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List News', true), array('controller' => 'news', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New News', true), array('controller' => 'news', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Shifts', true), array('controller' => 'shifts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Shifts', true), array('controller' => 'shifts', 'action' => 'add')); ?> </li>
	</ul>
</div>
