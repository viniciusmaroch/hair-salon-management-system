<?php     echo $html->css('cake.generic.css');?>
<div class="services form">
<?php echo $this->Form->create('Service');?>
	<fieldset>
		<legend><?php __('Edit Service'); ?></legend>
	<?php
		echo $this->Form->input('SEID');
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		echo $this->Form->input('duration', array('type' => 'time', 'interval' => 5,'timeFormat'=>'24')); 
		echo $this->Form->input('cost');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Service.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Service.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Services', true), array('action' => 'index'));?></li>
	</ul>
</div>