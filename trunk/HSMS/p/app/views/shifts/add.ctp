<div class="shifts form">
<?php echo $this->Form->create('Shift');?>
	<fieldset>
		<legend><?php __('Add Shift'); ?></legend>
	<?php
		echo $this->Form->input('UID');
		echo $this->Form->input('from');
		echo $this->Form->input('to');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Shifts', true), array('action' => 'index'));?></li>
	</ul>
</div>