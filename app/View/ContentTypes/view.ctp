<div class="contentTypes view">
<h2><?php echo __('Content Type'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($contentType['ContentType']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($contentType['ContentType']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Slug'); ?></dt>
		<dd>
			<?php echo h($contentType['ContentType']['slug']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($contentType['ContentType']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Settings'); ?></dt>
		<dd>
			<?php echo h($contentType['ContentType']['settings']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Requires Cron'); ?></dt>
		<dd>
			<?php echo h($contentType['ContentType']['requires_cron']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Modification'); ?></dt>
		<dd>
			<?php echo h($contentType['ContentType']['last_modification']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Content Type'), array('action' => 'edit', $contentType['ContentType']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Content Type'), array('action' => 'delete', $contentType['ContentType']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $contentType['ContentType']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Content Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Content Type'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contents'), array('controller' => 'contents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Content'), array('controller' => 'contents', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Contents'); ?></h3>
	<?php if (!empty($contentType['Content'])): ?>
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
	<?php foreach ($contentType['Content'] as $content): ?>
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
