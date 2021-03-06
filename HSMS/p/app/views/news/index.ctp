<?php     echo $html->css('cake.generic.css');?>
<?php echo $this->Session->flash();?>

<div class="news index">
	
	<h2><?php __('News');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('NID');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th><?php echo $this->Paginator->sort('postedOn');?></th>
			<th><?php echo $this->Paginator->sort('description');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($news as $news):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $news['News']['NID']; ?>&nbsp;</td>
		<td><?php echo $this->Html->link($news['User']['name'], array('controller' => 'users', 'action' => 'view', $news['User']['UID'])); ?>&nbsp;</td>
		<td><?php echo $news['News']['postedOn']; ?>&nbsp;</td>
		<td><?php echo $news['News']['description']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $news['News']['NID'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $news['News']['NID'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $news['News']['NID']), null, sprintf(__('Are you sure you want to delete # %s?', true), $news['News']['NID'])); ?>
		</td>
		
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
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