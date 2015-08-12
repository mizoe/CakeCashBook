<div class="staffs view">
<h2><?php echo __('Staff'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($staff['Staff']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Staff Name'); ?></dt>
		<dd>
			<?php echo h($staff['Staff']['staff_name']); ?>
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
		<li><?php echo $this->Html->link(__('List Slips'), array('controller' => 'slips', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Slip'), array('controller' => 'slips', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Slips'); ?></h3>
	<?php if (!empty($staff['Slip'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Staff Id'); ?></th>
		<th><?php echo __('Year'); ?></th>
		<th><?php echo __('Month'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($staff['Slip'] as $slip): ?>
		<tr>
			<td><?php echo $slip['id']; ?></td>
			<td><?php echo $slip['staff_id']; ?></td>
			<td><?php echo $slip['year']; ?></td>
			<td><?php echo $slip['month']; ?></td>
			<td><?php echo $slip['created']; ?></td>
			<td><?php echo $slip['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'slips', 'action' => 'view', $slip['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'slips', 'action' => 'edit', $slip['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'slips', 'action' => 'delete', $slip['id']), array(), __('Are you sure you want to delete # %s?', $slip['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Slip'), array('controller' => 'slips', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
