<div class="users form">
<?php     echo $html->css('cake.generic.css');?>
<?php echo $this->Form->create('User');?>
	<fieldset>
		<legend><?php __('Add User'); ?></legend>
	<?php
		echo $this->Form->input('name');
		
		
		echo $this->Form->input('is_customer');
		echo $this->Form->input('is_employee');
		echo $this->Form->input('is_manager');
		echo $this->Form->input('firstName');
		echo $this->Form->input('lastName');
		//echo $this->Form->input('DOB');
	echo $this->Form->input('DOB', array('type' => 'date','dateFormat' => 'DMY',
    'minYear' => date('Y') - 100,
    'maxYear' => date('Y'),    
    'attributes' => array(),
    'empty' => FALSE
        )
);

		echo $this->Form->radio('gender',array('M'=>'Male','F'=>'Female'),array('legend'=>false));
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
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Appointments', true), array('controller' => 'appointments', 'action' => 'viewAll')); ?> </li>
		<li><?php echo $this->Html->link(__('View Calendar', true), array('controller' => 'appointments', 'action' => 'index')); ?> </li>		
		<li><?php echo $this->Html->link(__('List News', true), array('controller' => 'news', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New News', true), array('controller' => 'news', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Shifts', true), array('controller' => 'shifts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Shifts', true), array('controller' => 'shifts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Services', true), array('controller' => 'services', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Service', true), array('controller' => 'services', 'action' => 'add')); ?> </li>
	</ul>
</div>
