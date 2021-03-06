<div class="row-fluid">
	<div class="span9">
		<?php echo $this->BootstrapForm->create('Post', array('class' => 'form-horizontal'));?>
			<fieldset>
				<legend><?php echo __('Add %s', __('Post')); ?></legend>
				<?php
				echo $this->BootstrapForm->input('title');
				echo $this->BootstrapForm->input('slug');
				echo $this->BootstrapForm->input('content');
				echo $this->BootstrapForm->input('order');
				echo $this->BootstrapForm->input('parent_id');
				echo $this->BootstrapForm->input('post_type',array('options'=>array('post'=>'Įrašas','page'=>'Puslapis')));
				echo $this->BootstrapForm->input('Taxonomy');
				?>
				<?php echo $this->BootstrapForm->submit(__('Submit'));?>
			</fieldset>
		<?php echo $this->BootstrapForm->end();?>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Posts')), array('action' => 'index'));?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Posts')), array('controller' => 'posts', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('New %s', __('Parent Post')), array('controller' => 'posts', 'action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Taxonomies')), array('controller' => 'taxonomies', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('New %s', __('Taxonomy')), array('controller' => 'taxonomies', 'action' => 'add')); ?></li>
		</ul>
		</div>
	</div>
</div>