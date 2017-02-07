<div class="screens form">
<?php echo $this->Form->create('Screen'); ?>
	<fieldset>
		<legend><?php echo __('Edit Screen'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('address');
		echo $this->Form->input('district');
		echo $this->Form->input('commune');
		echo $this->Form->input('current_ip');
		echo $this->Form->input('last_check');
		echo $this->Form->input('last_modification');
		echo $this->Form->input('send_alert');
		echo $this->Form->input('Content');
		echo $this->Form->input('Tag');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Screen.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Screen.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Screens'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Contents'), array('controller' => 'contents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Content'), array('controller' => 'contents', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tags'), array('controller' => 'tags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tag'), array('controller' => 'tags', 'action' => 'add')); ?> </li>
	</ul>
</div>
