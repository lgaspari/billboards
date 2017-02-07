<?php
App::uses('AppController', 'Controller');
/**
 * ContentTypes Controller
 *
 * @property ContentType $ContentType
 * @property PaginatorComponent $Paginator
 */
class ContentTypesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ContentType->recursive = 0;
		$this->set('contentTypes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ContentType->exists($id)) {
			throw new NotFoundException(__('Invalid content type'));
		}
		$options = array('conditions' => array('ContentType.' . $this->ContentType->primaryKey => $id));
		$this->set('contentType', $this->ContentType->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ContentType->create();
			if ($this->ContentType->save($this->request->data)) {
				$this->Flash->success(__('The content type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The content type could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ContentType->exists($id)) {
			throw new NotFoundException(__('Invalid content type'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ContentType->save($this->request->data)) {
				$this->Flash->success(__('The content type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The content type could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ContentType.' . $this->ContentType->primaryKey => $id));
			$this->request->data = $this->ContentType->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ContentType->id = $id;
		if (!$this->ContentType->exists()) {
			throw new NotFoundException(__('Invalid content type'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ContentType->delete()) {
			$this->Flash->success(__('The content type has been deleted.'));
		} else {
			$this->Flash->error(__('The content type could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
