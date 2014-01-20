<div class="trGrnotes index">
	<h2><?php echo __('Tr Grnotes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('gr_note_id'); ?></th>
			<th><?php echo $this->Paginator->sort('stock_id'); ?></th>
			<th><?php echo $this->Paginator->sort('qty'); ?></th>
			<th><?php echo $this->Paginator->sort('harga'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($trGrnotes as $trGrnote): ?>
	<tr>
		<td><?php echo h($trGrnote['TrGrnote']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($trGrnote['GrNote']['id'], array('controller' => 'gr_notes', 'action' => 'view', $trGrnote['GrNote']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($trGrnote['Stock']['name'], array('controller' => 'stocks', 'action' => 'view', $trGrnote['Stock']['id'])); ?>
		</td>
		<td><?php echo h($trGrnote['TrGrnote']['qty']); ?>&nbsp;</td>
		<td><?php echo h($trGrnote['TrGrnote']['harga']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $trGrnote['TrGrnote']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $trGrnote['TrGrnote']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $trGrnote['TrGrnote']['id']), null, __('Are you sure you want to delete # %s?', $trGrnote['TrGrnote']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Tr Grnote'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Gr Notes'), array('controller' => 'gr_notes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Gr Note'), array('controller' => 'gr_notes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stocks'), array('controller' => 'stocks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Stock'), array('controller' => 'stocks', 'action' => 'add')); ?> </li>
	</ul>
</div>
