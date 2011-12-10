<div class="users form">
<?php echo $this->Form->create('Appointment');?>
	<fieldset>
		<legend><?php __('Add Appointment'); ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('allday');		
		echo $this->Form->input('start');
		echo $this->Form->input('end');
		echo $this->Form->input('editable');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Appointments', true), array('action' => 'index'));?></li>
	</ul>
</div>