<div class="people form">
<?php echo $this->Form->create('Person');?>
	<fieldset>
		<legend><?php __('Edit Person'); ?></legend>
	<?php
		echo $this->Form->input('PID');
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

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Person.PID')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Person.PID'))); ?></li>
		<li><?php echo $this->Html->link(__('List People', true), array('action' => 'index'));?></li>
	</ul>
</div>