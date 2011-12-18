<div class="shifts view">
<h2><?php  __('Shift');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('SHID'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $shift['Shift']['SHID']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('UID'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $shift['Shift']['UID']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('From'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $shift['Shift']['from']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('To'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $shift['Shift']['to']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Shift', true), array('action' => 'edit', $shift['Shift']['SHID'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Shift', true), array('action' => 'delete', $shift['Shift']['SHID']), null, sprintf(__('Are you sure you want to delete # %s?', true), $shift['Shift']['SHID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Shifts', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Shift', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
