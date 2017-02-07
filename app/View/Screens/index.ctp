<div class="screens index">
	<h2><?php echo __('Screens'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('address'); ?></th>
			<th><?php echo $this->Paginator->sort('district'); ?></th>
			<th><?php echo $this->Paginator->sort('commune'); ?></th>
			<th><?php echo $this->Paginator->sort('current_ip'); ?></th>
			<th><?php echo $this->Paginator->sort('last_check'); ?></th>
			<th><?php echo $this->Paginator->sort('last_modification'); ?></th>
			<th><?php echo $this->Paginator->sort('send_alert'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($screens as $screen): ?>
	<tr>
		<td><?php echo h($screen['Screen']['id']); ?>&nbsp;</td>
		<td><?php echo h($screen['Screen']['name']); ?>&nbsp;</td>
		<td><?php echo h($screen['Screen']['address']); ?>&nbsp;</td>
		<td><?php echo h($screen['Screen']['district']); ?>&nbsp;</td>
		<td><?php echo h($screen['Screen']['commune']); ?>&nbsp;</td>
		<td><?php echo h($screen['Screen']['current_ip']); ?>&nbsp;</td>
		<td><?php echo h($screen['Screen']['last_check']); ?>&nbsp;</td>
		<td><?php echo h($screen['Screen']['last_modification']); ?>&nbsp;</td>
		<td><?php echo h($screen['Screen']['send_alert']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $screen['Screen']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $screen['Screen']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $screen['Screen']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $screen['Screen']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
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
		<li><?php echo $this->Html->link(__('New Screen'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Contents'), array('controller' => 'contents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Content'), array('controller' => 'contents', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tags'), array('controller' => 'tags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tag'), array('controller' => 'tags', 'action' => 'add')); ?> </li>
	</ul>
</div>
