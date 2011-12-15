<div class="news form">
<?php echo $this->Form->create('News');?>
	<fieldset>
		<legend><?php __('Add News'); ?></legend>
	<?php
		echo $this->Form->input('UID');
		echo $this->Form->input('postedOn');
		echo $this->Form->input('description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List News', true), array('action' => 'index'));?></li>
	</ul>
</div>