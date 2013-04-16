<div class="row-fluid">
	<div class="span9">
		<h2><?php echo __('List %s', __('Taxonomies'));?></h2>

		<p>
			<?php echo $this->BootstrapPaginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')));?>
		</p>

		<table class="table">
			<tr>
				<th><?php echo $this->BootstrapPaginator->sort('id');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('type');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('name');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('slug');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('desc');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('created');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('modified');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('parent_id');?></th>
				<th class="actions"><?php echo __('Actions');?></th>
			</tr>
		<?php foreach ($taxonomies as $taxonomy): ?>
			<tr>
				<td><?php echo h($taxonomy['Taxonomy']['id']); ?>&nbsp;</td>
				<td><?php echo h($taxonomy['Taxonomy']['type']); ?>&nbsp;</td>
				<td><?php echo h($taxonomy['Taxonomy']['name']); ?>&nbsp;</td>
				<td><?php echo h($taxonomy['Taxonomy']['slug']); ?>&nbsp;</td>
				<td><?php echo h($taxonomy['Taxonomy']['desc']); ?>&nbsp;</td>
				<td><?php echo h($taxonomy['Taxonomy']['created']); ?>&nbsp;</td>
				<td><?php echo h($taxonomy['Taxonomy']['modified']); ?>&nbsp;</td>
				<td><?php echo h($taxonomy['Taxonomy']['parent_id']); ?>&nbsp;</td>
				<td class="actions">
					<div class="btn-group">
						<?php
						echo $this->Html->link('<i class="icon-zoom-in"></i>', array('action' => 'view', $taxonomy['Taxonomy']['id']),array('class'=>'btn btn-mini','escape'=>false));
						echo $this->Html->link('<i class="icon-edit"></i>', array('action' => 'edit', $taxonomy['Taxonomy']['id']),array('class'=>'btn btn-mini','escape'=>false));
						echo $this->Form->postLink('<i class="icon-trash icon-white"></i>',	array('action' => 'delete', $taxonomy['Taxonomy']['id']), 
								array('class'=>'btn btn-mini btn-danger','escape'=>false),
								__('Are you sure you want to delete # %s?', $taxonomy['Taxonomy']['id'])
							);
						?>
					</div>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>

		<?php echo $this->BootstrapPaginator->pagination(); ?>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('New %s', __('Taxonomy')), array('action' => 'add')); ?></li>
		</ul>
		</div>
	</div>
</div>