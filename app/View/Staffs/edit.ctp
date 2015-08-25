<div class="staffs form">
<?php echo $this->Form->create('Staff'); ?>
	<fieldset>
		<legend><?php echo __('Edit Staff'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('email');
		echo $this->Form->input('postcode');
		echo $this->Form->input('address');
		echo $this->Form->input('birthday');
		echo $this->Form->input('joined_date');
		echo $this->Form->input('department_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Staff.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Staff.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Staffs'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Departments'), array('controller' => 'departments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Department'), array('controller' => 'departments', 'action' => 'add')); ?> </li>
	</ul>
</div>
