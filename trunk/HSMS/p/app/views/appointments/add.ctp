<div class="appointments form">
<?php     echo $html->css('cake.generic.css');?>

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
		<li><?php echo $this->Html->link(__('New User', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Appointments', true), array('controller' => 'appointments', 'action' => 'viewAll')); ?> </li>
		<li><?php echo $this->Html->link(__('View Calendar', true), array('controller' => 'appointments', 'action' => 'index')); ?> </li>		
		<li><?php echo $this->Html->link(__('List News', true), array('controller' => 'news', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New News', true), array('controller' => 'news', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Shifts', true), array('controller' => 'shifts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Shifts', true), array('controller' => 'shifts', 'action' => 'add')); ?> </li>
	</ul>
</div>