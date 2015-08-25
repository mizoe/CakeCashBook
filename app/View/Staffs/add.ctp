<div class="staffs form">
<?php echo $this->Form->create('Staff'); ?>
	<fieldset>
		<legend><?php echo __('Add Staff'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('email');
		echo $this->Form->input('postcode');
		echo $this->Form->input('address');
		echo $this->Form->input('birthday', array(
			'label' => '誕生日',
			'dateFormat' => 'YMD',
			'minYear' => date('Y') - 100,
			'maxYear' => date('Y'),
			'selected' => date('Y') - 20 . "-" . date('M') . "-" . date('D')
		));
		echo $this->Form->input('joined_date');
		echo $this->Form->input('department_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Staffs'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Departments'), array('controller' => 'departments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Department'), array('controller' => 'departments', 'action' => 'add')); ?> </li>
	</ul>
</div>
