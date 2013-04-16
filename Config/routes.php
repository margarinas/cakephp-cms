<?php
Router::connect('/posts', array('plugin' => 'cms', 'controller' => 'posts','action'=>'index'));
Router::connect('/posts/:action/*', array('plugin' => 'cms', 'controller' => 'posts'));
//Router::connect('/taxonomies/:action/*', array('plugin' => 'cms', 'controller' => 'taxonomies'));

?>