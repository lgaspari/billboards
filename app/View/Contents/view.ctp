<div class="contents view">
<h2><?php echo __('Content'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($content['Content']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Content Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($content['ContentType']['name'], array('controller' => 'content_types', 'action' => 'view', $content['ContentType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($content['Content']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Settings'); ?></dt>
		<dd>
			<?php echo h($content['Content']['settings']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Local Data'); ?></dt>
		<dd>
			<?php echo h($content['Content']['local_data']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Modification'); ?></dt>
		<dd>
			<?php echo h($content['Content']['last_modification']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Content'), array('action' => 'edit', $content['Content']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Content'), array('action' => 'delete', $content['Content']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $content['Content']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Contents'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Content'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Content Types'), array('controller' => 'content_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Content Type'), array('controller' => 'content_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Screens'), array('controller' => 'screens', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Screen'), array('controller' => 'screens', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Screens'); ?></h3>
	<?php if (!empty($content['Screen'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Address'); ?></th>
		<th><?php echo __('District'); ?></th>
		<th><?php echo __('Commune'); ?></th>
		<th><?php echo __('Current Ip'); ?></th>
		<th><?php echo __('Last Check'); ?></th>
		<th><?php echo __('Last Modification'); ?></th>
		<th><?php echo __('Send Alert'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($content['Screen'] as $screen): ?>
		<tr>
			<td><?php echo $screen['id']; ?></td>
			<td><?php echo $screen['name']; ?></td>
			<td><?php echo $screen['address']; ?></td>
			<td><?php echo $screen['district']; ?></td>
			<td><?php echo $screen['commune']; ?></td>
			<td><?php echo $screen['current_ip']; ?></td>
			<td><?php echo $screen['last_check']; ?></td>
			<td><?php echo $screen['last_modification']; ?></td>
			<td><?php echo $screen['send_alert']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'screens', 'action' => 'view', $screen['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'screens', 'action' => 'edit', $screen['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'screens', 'action' => 'delete', $screen['id']), array('confirm' => __('Are you sure you want to delete # %s?', $screen['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Screen'), array('controller' => 'screens', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
