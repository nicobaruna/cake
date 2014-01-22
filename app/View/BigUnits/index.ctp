<div class="bigUnits index">
	<h2><?php echo __('Big Units'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('stock_id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('equivalent'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($bigUnits as $bigUnit): ?>
	<tr>
		<td><?php echo h($bigUnit['BigUnit']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($bigUnit['Stock']['name'], array('controller' => 'stocks', 'action' => 'view', $bigUnit['Stock']['id'])); ?>
		</td>
		<td><?php echo h($bigUnit['BigUnit']['name']); ?>&nbsp;</td>
		<td><?php echo h($bigUnit['BigUnit']['equivalent']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $bigUnit['BigUnit']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $bigUnit['BigUnit']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $bigUnit['BigUnit']['id']), null, __('Are you sure you want to delete # %s?', $bigUnit['BigUnit']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Big Unit'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Stocks'), array('controller' => 'stocks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Stock'), array('controller' => 'stocks', 'action' => 'add')); ?> </li>
	</ul>
</div>