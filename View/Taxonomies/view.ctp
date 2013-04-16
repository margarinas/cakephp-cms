<div class="row-fluid">
	<div class="span9">
		<h2><?php  echo __('Taxonomy');?></h2>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
			<dd>
				<?php echo h($taxonomy['Taxonomy']['id']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Type'); ?></dt>
			<dd>
				<?php echo h($taxonomy['Taxonomy']['type']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Name'); ?></dt>
			<dd>
				<?php echo h($taxonomy['Taxonomy']['name']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Slug'); ?></dt>
			<dd>
				<?php echo h($taxonomy['Taxonomy']['slug']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Desc'); ?></dt>
			<dd>
				<?php echo h($taxonomy['Taxonomy']['desc']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Created'); ?></dt>
			<dd>
				<?php echo h($taxonomy['Taxonomy']['created']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Modified'); ?></dt>
			<dd>
				<?php echo h($taxonomy['Taxonomy']['modified']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Parent Id'); ?></dt>
			<dd>
				<?php echo h($taxonomy['Taxonomy']['parent_id']); ?>
				&nbsp;
			</dd>
		</dl>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('Edit %s', __('Taxonomy')), array('action' => 'edit', $taxonomy['Taxonomy']['id'])); ?> </li>
			<li><?php echo $this->Form->postLink(__('Delete %s', __('Taxonomy')), array('action' => 'delete', $taxonomy['Taxonomy']['id']), null, __('Are you sure you want to delete # %s?', $taxonomy['Taxonomy']['id'])); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Taxonomies')), array('action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Taxonomy')), array('action' => 'add')); ?> </li>
		</ul>
		</div>
	</div>
</div>

