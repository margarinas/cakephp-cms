<div class="row-fluid">
	<div class="span9">
		<h2><?php echo __('List %s', __('Posts'));?></h2>

		<p>
			<?php echo $this->BootstrapPaginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')));?>
		</p>

		<table class="table">
			<tr>
				<th><?php echo $this->BootstrapPaginator->sort('id');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('title');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('slug');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('content');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('order');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('parent_id');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('post_type');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('created');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('modified');?></th>
				<th class="actions"><?php echo __('Actions');?></th>
			</tr>
		<?php foreach ($posts as $post): ?>
			<tr>
				<td><?php echo h($post['Post']['id']); ?>&nbsp;</td>
				<td><?php echo h($post['Post']['title']); ?>&nbsp;</td>
				<td><?php echo h($post['Post']['slug']); ?>&nbsp;</td>
				<td><?php echo h($post['Post']['content']); ?>&nbsp;</td>
				<td><?php echo h($post['Post']['order']); ?>&nbsp;</td>
				<td>
					<?php echo $this->Html->link($post['ParentPost']['title'], array('controller' => 'posts', 'action' => 'view', $post['ParentPost']['id'])); ?>
				</td>
				<td><?php echo h($post['Post']['post_type']); ?>&nbsp;</td>
				<td><?php echo h($post['Post']['created']); ?>&nbsp;</td>
				<td><?php echo h($post['Post']['modified']); ?>&nbsp;</td>
				<td class="actions">
					<div class="btn-group">
						<?php
						echo $this->Html->link('<i class="icon-zoom-in"></i>', array('action' => 'view', $post['Post']['id']),array('class'=>'btn btn-mini','escape'=>false));
						echo $this->Html->link('<i class="icon-edit"></i>', array('action' => 'edit', $post['Post']['id']),array('class'=>'btn btn-mini','escape'=>false));
						echo $this->Form->postLink('<i class="icon-trash icon-white"></i>',	array('action' => 'delete', $post['Post']['id']), 
								array('class'=>'btn btn-mini btn-danger','escape'=>false),
								__('Are you sure you want to delete # %s?', $post['Post']['id'])
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
			<li><?php echo $this->Html->link(__('New %s', __('Post')), array('action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Posts')), array('controller' => 'posts', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Parent Post')), array('controller' => 'posts', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Taxonomies')), array('controller' => 'taxonomies', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Taxonomy')), array('controller' => 'taxonomies', 'action' => 'add')); ?> </li>
		</ul>
		</div>
	</div>
</div>