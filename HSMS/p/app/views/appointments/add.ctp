<div class="appointments form">
<?php echo $this->Form->create('Appointment');?>
	<fieldset>
		<legend><?php __('Add Appointment'); ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('allday');
		echo $this->Form->input('start');
		echo $this->Form->input('end');
		echo $this->Form->input('editable');
		echo $this->Form->input('service_id');
		echo $this->Form->input('user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Appointments', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Services', true), array('controller' => 'services', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Service', true), array('controller' => 'services', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>