<div class="staffs view">
<h2><?php echo __('Staff'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($staff['Staff']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($staff['Staff']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($staff['Staff']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Postcode'); ?></dt>
		<dd>
			<?php echo h($staff['Staff']['postcode']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($staff['Staff']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Birthday'); ?></dt>
		<dd>
			<?php echo h($staff['Staff']['birthday']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Joined Date'); ?></dt>
		<dd>
			<?php echo h($staff['Staff']['joined_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Department'); ?></dt>
		<dd>
			<?php echo $this->Html->link($staff['Department']['name'], array('controller' => 'departments', 'action' => 'view', $staff['Department']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($staff['Staff']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($staff['Staff']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Staff'), array('action' => 'edit', $staff['Staff']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Staff'), array('action' => 'delete', $staff['Staff']['id']), array(), __('Are you sure you want to delete # %s?', $staff['Staff']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Staffs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Staff'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Departments'), array('controller' => 'departments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Department'), array('controller' => 'departments', 'action' => 'add')); ?> </li>
	</ul>
</div>
