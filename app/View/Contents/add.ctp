<div class="contents form">
<?php echo $this->Form->create('Content'); ?>
	<fieldset>
		<legend><?php echo __('Add Content'); ?></legend>
	<?php
		echo $this->Form->input('content_type_id');
		echo $this->Form->input('name');
		echo $this->Form->input('settings');
		echo $this->Form->input('local_data');
		echo $this->Form->input('last_modification');
		echo $this->Form->input('Screen');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Contents'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Content Types'), array('controller' => 'content_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Content Type'), array('controller' => 'content_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Screens'), array('controller' => 'screens', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Screen'), array('controller' => 'screens', 'action' => 'add')); ?> </li>
	</ul>
</div>
