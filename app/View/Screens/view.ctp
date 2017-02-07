<div class="screens view">
<h2><?php echo __('Screen'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($screen['Screen']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($screen['Screen']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($screen['Screen']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('District'); ?></dt>
		<dd>
			<?php echo h($screen['Screen']['district']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Commune'); ?></dt>
		<dd>
			<?php echo h($screen['Screen']['commune']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Current Ip'); ?></dt>
		<dd>
			<?php echo h($screen['Screen']['current_ip']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Check'); ?></dt>
		<dd>
			<?php echo h($screen['Screen']['last_check']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Modification'); ?></dt>
		<dd>
			<?php echo h($screen['Screen']['last_modification']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Send Alert'); ?></dt>
		<dd>
			<?php echo h($screen['Screen']['send_alert']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Screen'), array('action' => 'edit', $screen['Screen']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Screen'), array('action' => 'delete', $screen['Screen']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $screen['Screen']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Screens'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Screen'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contents'), array('controller' => 'contents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Content'), array('controller' => 'contents', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tags'), array('controller' => 'tags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tag'), array('controller' => 'tags', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Contents'); ?></h3>
	<?php if (!empty($screen['Content'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Content Type Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Settings'); ?></th>
		<th><?php echo __('Local Data'); ?></th>
		<th><?php echo __('Last Modification'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($screen['Content'] as $content): ?>
		<tr>
			<td><?php echo $content['id']; ?></td>
			<td><?php echo $content['content_type_id']; ?></td>
			<td><?php echo $content['name']; ?></td>
			<td><?php echo $content['settings']; ?></td>
			<td><?php echo $content['local_data']; ?></td>
			<td><?php echo $content['last_modification']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'contents', 'action' => 'view', $content['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'contents', 'action' => 'edit', $content['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'contents', 'action' => 'delete', $content['id']), array('confirm' => __('Are you sure you want to delete # %s?', $content['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Content'), array('controller' => 'contents', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Tags'); ?></h3>
	<?php if (!empty($screen['Tag'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($screen['Tag'] as $tag): ?>
		<tr>
			<td><?php echo $tag['id']; ?></td>
			<td><?php echo $tag['name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'tags', 'action' => 'view', $tag['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'tags', 'action' => 'edit', $tag['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'tags', 'action' => 'delete', $tag['id']), array('confirm' => __('Are you sure you want to delete # %s?', $tag['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Tag'), array('controller' => 'tags', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
