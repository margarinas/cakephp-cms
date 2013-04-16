<div class="row-fluid">
	<div class="span9">
		<h2><?php  echo __('Post');?></h2>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
			<dd>
				<?php echo h($post['Post']['id']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Title'); ?></dt>
			<dd>
				<?php echo h($post['Post']['title']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Slug'); ?></dt>
			<dd>
				<?php echo h($post['Post']['slug']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Content'); ?></dt>
			<dd>
				<?php echo h($post['Post']['content']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Order'); ?></dt>
			<dd>
				<?php echo h($post['Post']['order']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Parent Post'); ?></dt>
			<dd>
				<?php echo $this->Html->link($post['ParentPost']['title'], array('controller' => 'posts', 'action' => 'view', $post['ParentPost']['id'])); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Post Type'); ?></dt>
			<dd>
				<?php echo h($post['Post']['post_type']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Created'); ?></dt>
			<dd>
				<?php echo h($post['Post']['created']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Modified'); ?></dt>
			<dd>
				<?php echo h($post['Post']['modified']); ?>
				&nbsp;
			</dd>
		</dl>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('Edit %s', __('Post')), array('action' => 'edit', $post['Post']['id'])); ?> </li>
			<li><?php echo $this->Form->postLink(__('Delete %s', __('Post')), array('action' => 'delete', $post['Post']['id']), null, __('Are you sure you want to delete # %s?', $post['Post']['id'])); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Posts')), array('action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Post')), array('action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Posts')), array('controller' => 'posts', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Parent Post')), array('controller' => 'posts', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Taxonomies')), array('controller' => 'taxonomies', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Taxonomy')), array('controller' => 'taxonomies', 'action' => 'add')); ?> </li>
		</ul>
		</div>
	</div>
</div>

<div class="row-fluid">
	<div class="span9">
		<h3><?php echo __('Related %s', __('Posts')); ?></h3>
	<?php if (!empty($post['ChildPost'])):?>
		<table class="table">
			<tr>
				<th><?php echo __('Id'); ?></th>
				<th><?php echo __('Title'); ?></th>
				<th><?php echo __('Slug'); ?></th>
				<th><?php echo __('Content'); ?></th>
				<th><?php echo __('Order'); ?></th>
				<th><?php echo __('Parent Id'); ?></th>
				<th><?php echo __('Post Type'); ?></th>
				<th><?php echo __('Created'); ?></th>
				<th><?php echo __('Modified'); ?></th>
				<th class="actions"><?php echo __('Actions');?></th>
			</tr>
		<?php foreach ($post['ChildPost'] as $childPost): ?>
			<tr>
				<td><?php echo $childPost['id'];?></td>
				<td><?php echo $childPost['title'];?></td>
				<td><?php echo $childPost['slug'];?></td>
				<td><?php echo $childPost['content'];?></td>
				<td><?php echo $childPost['order'];?></td>
				<td><?php echo $childPost['parent_id'];?></td>
				<td><?php echo $childPost['post_type'];?></td>
				<td><?php echo $childPost['created'];?></td>
				<td><?php echo $childPost['modified'];?></td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('controller' => 'posts', 'action' => 'view', $childPost['id'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('controller' => 'posts', 'action' => 'edit', $childPost['id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'posts', 'action' => 'delete', $childPost['id']), null, __('Are you sure you want to delete # %s?', $childPost['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>
	<?php endif; ?>

	</div>
	<div class="span3">
		<ul class="nav nav-list">
			<li><?php echo $this->Html->link(__('New %s', __('Child Post')), array('controller' => 'posts', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="row-fluid">
	<div class="span9">
		<h3><?php echo __('Related %s', __('Taxonomies')); ?></h3>
	<?php if (!empty($post['Taxonomy'])):?>
		<table class="table">
			<tr>
				<th><?php echo __('Id'); ?></th>
				<th><?php echo __('Type'); ?></th>
				<th><?php echo __('Name'); ?></th>
				<th><?php echo __('Slug'); ?></th>
				<th><?php echo __('Desc'); ?></th>
				<th><?php echo __('Created'); ?></th>
				<th><?php echo __('Modified'); ?></th>
				<th><?php echo __('Parent Id'); ?></th>
				<th class="actions"><?php echo __('Actions');?></th>
			</tr>
		<?php foreach ($post['Taxonomy'] as $taxonomy): ?>
			<tr>
				<td><?php echo $taxonomy['id'];?></td>
				<td><?php echo $taxonomy['type'];?></td>
				<td><?php echo $taxonomy['name'];?></td>
				<td><?php echo $taxonomy['slug'];?></td>
				<td><?php echo $taxonomy['desc'];?></td>
				<td><?php echo $taxonomy['created'];?></td>
				<td><?php echo $taxonomy['modified'];?></td>
				<td><?php echo $taxonomy['parent_id'];?></td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('controller' => 'taxonomies', 'action' => 'view', $taxonomy['id'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('controller' => 'taxonomies', 'action' => 'edit', $taxonomy['id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'taxonomies', 'action' => 'delete', $taxonomy['id']), null, __('Are you sure you want to delete # %s?', $taxonomy['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>
	<?php endif; ?>

	</div>
	<div class="span3">
		<ul class="nav nav-list">
			<li><?php echo $this->Html->link(__('New %s', __('Taxonomy')), array('controller' => 'taxonomies', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
