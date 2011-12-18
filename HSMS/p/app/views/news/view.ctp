<?php     echo $html->css('cake.generic.css');?>
<div class="news view">

<h2><?php  __('News');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('NID'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $news['News']['NID']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('UID'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $news['News']['user_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('PostedOn'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $news['News']['postedOn']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Description'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $news['News']['description']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit News', true), array('action' => 'edit', $news['News']['NID'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete News', true), array('action' => 'delete', $news['News']['NID']), null, sprintf(__('Are you sure you want to delete # %s?', true), $news['News']['NID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List News', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New News', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
