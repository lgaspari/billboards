<?php
App::uses('AppController', 'Controller');
/**
 * Screens Controller
 *
 * @property Screen $Screen
 * @property PaginatorComponent $Paginator
 */
class ScreensController extends AppController {

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
		$this->Screen->recursive = 0;
		$this->set('screens', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Screen->exists($id)) {
			throw new NotFoundException(__('Invalid screen'));
		}
		$options = array('conditions' => array('Screen.' . $this->Screen->primaryKey => $id));
		$this->set('screen', $this->Screen->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Screen->create();
			if ($this->Screen->save($this->request->data)) {
				$this->Flash->success(__('The screen has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The screen could not be saved. Please, try again.'));
			}
		}
		$contents = $this->Screen->Content->find('list');
		$tags = $this->Screen->Tag->find('list');
		$this->set(compact('contents', 'tags'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Screen->exists($id)) {
			throw new NotFoundException(__('Invalid screen'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Screen->save($this->request->data)) {
				$this->Flash->success(__('The screen has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The screen could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Screen.' . $this->Screen->primaryKey => $id));
			$this->request->data = $this->Screen->find('first', $options);
		}
		$contents = $this->Screen->Content->find('list');
		$tags = $this->Screen->Tag->find('list');
		$this->set(compact('contents', 'tags'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Screen->id = $id;
		if (!$this->Screen->exists()) {
			throw new NotFoundException(__('Invalid screen'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Screen->delete()) {
			$this->Flash->success(__('The screen has been deleted.'));
		} else {
			$this->Flash->error(__('The screen could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
