<div class="regimelectivos index">
	<h2><?php __('Regimelectivos');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($regimelectivos as $regimelectivo):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $regimelectivo['Regimelectivo']['id']; ?>&nbsp;</td>
		<td><?php echo $regimelectivo['Regimelectivo']['name']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $regimelectivo['Regimelectivo']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $regimelectivo['Regimelectivo']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $regimelectivo['Regimelectivo']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $regimelectivo['Regimelectivo']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, Mostrando %current% linhas. Total: %count% linhas retornadas, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Regimelectivo', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Anolectivos', true), array('controller' => 'anolectivos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Anolectivo', true), array('controller' => 'anolectivos', 'action' => 'add')); ?> </li>
	</ul>
</div>