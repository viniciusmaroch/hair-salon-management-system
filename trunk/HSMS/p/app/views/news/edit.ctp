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
				<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Appointments', true), array('controller' => 'appointments', 'action' => 'viewAll')); ?> </li>
		<li><?php echo $this->Html->link(__('View Calendar', true), array('controller' => 'appointments', 'action' => 'index')); ?> </li>		
		<li><?php echo $this->Html->link(__('List News', true), array('controller' => 'news', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New News', true), array('controller' => 'news', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Shifts', true), array('controller' => 'shifts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Shifts', true), array('controller' => 'shifts', 'action' => 'add')); ?> </li>
	</ul>
</div>