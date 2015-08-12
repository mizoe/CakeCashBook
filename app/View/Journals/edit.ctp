<div class="journals form">
<?php echo $this->Form->create('Journal'); ?>
	<fieldset>
		<legend><?php echo __('Edit Journal'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('slip_id');
		echo $this->Form->input('date');
		echo $this->Form->input('subject');
		echo $this->Form->input('amount');
		echo $this->Form->input('note');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Journal.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Journal.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Journals'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Slips'), array('controller' => 'slips', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Slip'), array('controller' => 'slips', 'action' => 'add')); ?> </li>
	</ul>
</div>
