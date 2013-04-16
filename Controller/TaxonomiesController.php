<?php
App::uses('CmsAppController', 'Cms.Controller');
/**
 * Taxonomies Controller
 *
 * @property Taxonomy $Taxonomy
 */
class TaxonomiesController extends CmsAppController {

/**
 *  Layout
 *
 * @var string
 */

/**
 * Helpers
 *
 * @var array
 */
	public $helpers = array('TwitterBootstrap.BootstrapHtml', 'TwitterBootstrap.BootstrapForm', 'TwitterBootstrap.BootstrapPaginator');
/**
 * Components
 *
 * @var array
 */
	public $components = array('Session');
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Taxonomy->recursive = 0;
		$this->set('taxonomies', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Taxonomy->id = $id;
		if (!$this->Taxonomy->exists()) {
			throw new NotFoundException(__('Invalid %s', __('taxonomy')));
		}
		$this->set('taxonomy', $this->Taxonomy->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Taxonomy->create();
			if ($this->Taxonomy->save($this->request->data)) {
				$this->Session->setFlash(
					__('The %s has been saved', __('taxonomy')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-success'
					)
				);
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(
					__('The %s could not be saved. Please, try again.', __('taxonomy')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-error'
					)
				);
			}
		}
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Taxonomy->id = $id;
		if (!$this->Taxonomy->exists()) {
			throw new NotFoundException(__('Invalid %s', __('taxonomy')));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Taxonomy->save($this->request->data)) {
				$this->Session->setFlash(
					__('The %s has been saved', __('taxonomy')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-success'
					)
				);
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(
					__('The %s could not be saved. Please, try again.', __('taxonomy')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-error'
					)
				);
			}
		} else {
			$this->request->data = $this->Taxonomy->read(null, $id);
		}
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Taxonomy->id = $id;
		if (!$this->Taxonomy->exists()) {
			throw new NotFoundException(__('Invalid %s', __('taxonomy')));
		}
		if ($this->Taxonomy->delete()) {
			$this->Session->setFlash(
				__('The %s deleted', __('taxonomy')),
				'alert',
				array(
					'plugin' => 'TwitterBootstrap',
					'class' => 'alert-success'
				)
			);
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(
			__('The %s was not deleted', __('taxonomy')),
			'alert',
			array(
				'plugin' => 'TwitterBootstrap',
				'class' => 'alert-error'
			)
		);
		$this->redirect(array('action' => 'index'));
	}
}
