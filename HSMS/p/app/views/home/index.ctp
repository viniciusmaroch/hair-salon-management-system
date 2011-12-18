<?php     echo $html->css('cake.generic.css');?>
<div >
<h1>Welcome to the Hair Salon Management System</h1>

<p>
Non eram nescius, Brute, cum, quae summis ingeniis exquisitaque doctrina philosophi 
Graeco sermone tractavissent, ea Latinis litteris mandaremus, fore ut hic noster labor in varias reprehensiones incurreret. nam quibusdam, et iis quidem non admodum indoctis, totum hoc displicet philosophari. quidam autem non tam id reprehendunt, si remissius agatur, sed tantum studium tamque multam operam ponendam in eo non arbitrantur. erunt etiam, et ii quidem eruditi Graecis litteris, contemnentes Latinas, qui se dicant in Graecis legendis operam malle consumere. postremo aliquos futuros suspicor, qui me ad alias 
litteras vocent, genus hoc scribendi, etsi sit elegans, personae tamen et dignitatis esse negent.
</p>
<div>

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
