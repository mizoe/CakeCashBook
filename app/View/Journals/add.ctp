<div class="journals form">
<?php echo $this->Form->create('Journal'); ?>
	<fieldset>
		<legend><?php echo __('Add Journal'); ?></legend>
	<?php
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

		<li><?php echo $this->Html->link(__('List Journals'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Slips'), array('controller' => 'slips', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Slip'), array('controller' => 'slips', 'action' => 'add')); ?> </li>
	</ul>
</div>
