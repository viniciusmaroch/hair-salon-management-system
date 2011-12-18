<?php     echo $html->css('cake.generic.css');?>
<div class="news form">

<?php echo $this->Form->create('News');?>
	<fieldset>
		<legend><?php __('Edit News'); ?></legend>
	<?php
		echo $this->Form->input('NID');
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

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('News.NID')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('News.NID'))); ?></li>
		<li><?php echo $this->Html->link(__('List News', true), array('action' => 'index'));?></li>
	</ul>
</div>