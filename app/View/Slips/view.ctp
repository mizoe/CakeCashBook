<div class="slips view">
<h2><?php echo __('Slip'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($slip['Slip']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Staff'); ?></dt>
		<dd>
			<?php echo $this->Html->link($slip['Staff']['staff_name'], array('controller' => 'staffs', 'action' => 'view', $slip['Staff']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Year'); ?></dt>
		<dd>
			<?php echo h($slip['Slip']['year']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Month'); ?></dt>
		<dd>
			<?php echo h($slip['Slip']['month']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($slip['Slip']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($slip['Slip']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Slip'), array('action' => 'edit', $slip['Slip']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Slip'), array('action' => 'delete', $slip['Slip']['id']), array(), __('Are you sure you want to delete # %s?', $slip['Slip']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Slips'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Slip'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Staffs'), array('controller' => 'staffs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Staff'), array('controller' => 'staffs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Journals'), array('controller' => 'journals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Journal'), array('controller' => 'journals', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Journals'); ?></h3>
	<?php if (!empty($slip['Journal'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Slip Id'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Subject'); ?></th>
		<th><?php echo __('Amount'); ?></th>
		<th><?php echo __('Note'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($slip['Journal'] as $journal): ?>
		<tr>
			<td><?php echo $journal['id']; ?></td>
			<td><?php echo $journal['slip_id']; ?></td>
			<td><?php echo $journal['date']; ?></td>
			<td><?php echo $journal['subject']; ?></td>
			<td><?php echo $journal['amount']; ?></td>
			<td><?php echo $journal['note']; ?></td>
			<td><?php echo $journal['created']; ?></td>
			<td><?php echo $journal['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'journals', 'action' => 'view', $journal['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'journals', 'action' => 'edit', $journal['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'journals', 'action' => 'delete', $journal['id']), array(), __('Are you sure you want to delete # %s?', $journal['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Journal'), array('controller' => 'journals', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
