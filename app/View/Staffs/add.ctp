<div class="staffs form">
<?php echo $this->Form->create('Staff'); ?>
	<fieldset>
		<legend><?php echo __('Add Staff'); ?></legend>
	<?php
		echo $this->Form->input('staff_name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Staffs'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Journals'), array('controller' => 'journals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Slip'), array('controller' => 'journals', 'action' => 'add')); ?> </li>
	</ul>
</div>
