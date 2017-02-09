<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class UsersController extends AppController {

	public function updatePermissions() {
		$this->Acl->Aco->create(array('parent_id' => null, 'alias' => 'controllers'));
		$this->Acl->Aco->save();

	    $role = $this->User->Role;

	    $role->id = 1;
	    $this->Acl->allow($role, 'controllers');

	    $role->id = 2;
	    $this->Acl->deny($role, 'controllers');
	    $this->Acl->allow($role, 'controllers/Screens/index');
	    $this->Acl->allow($role, 'controllers/Screens/add');
	    $this->Acl->allow($role, 'controllers/Screens/edit');
	    $this->Acl->allow($role, 'controllers/Screens/view');
	    $this->Acl->allow($role, 'controllers/Contents/index');
	    $this->Acl->allow($role, 'controllers/Contents/add');
	    $this->Acl->allow($role, 'controllers/Contents/edit');
	    $this->Acl->allow($role, 'controllers/Contents/view');
	    $this->Acl->allow($role, 'controllers/ContentTypes/index');
	    $this->Acl->allow($role, 'controllers/ContentTypes/add');
	    $this->Acl->allow($role, 'controllers/ContentTypes/edit');
	    $this->Acl->allow($role, 'controllers/ContentTypes/view');
	    $this->Acl->allow($role, 'controllers/Users/index');
	    $this->Acl->allow($role, 'controllers/Users/add');
	    $this->Acl->allow($role, 'controllers/Users/edit');
	    $this->Acl->allow($role, 'controllers/Users/view');

	    $role->id = 3;
	    $this->Acl->deny($role, 'controllers');
	    $this->Acl->allow($role, 'controllers/Screens/index');
	    $this->Acl->allow($role, 'controllers/Screens/add');
	    $this->Acl->allow($role, 'controllers/Screens/edit');
	    $this->Acl->allow($role, 'controllers/Screens/view');
	    $this->Acl->allow($role, 'controllers/Contents/index');
	    $this->Acl->allow($role, 'controllers/Contents/view');
	    $this->Acl->allow($role, 'controllers/ContentTypes/index');
	    $this->Acl->allow($role, 'controllers/ContentTypes/view');
	    $this->Acl->allow($role, 'controllers/Users/index');
	    $this->Acl->allow($role, 'controllers/Users/view');

	    $role->id = 4;
	    $this->Acl->deny($role, 'controllers');
	    $this->Acl->allow($role, 'controllers/Screens/index');
	    $this->Acl->allow($role, 'controllers/Screens/view');
	    $this->Acl->allow($role, 'controllers/Contents/index');
	    $this->Acl->allow($role, 'controllers/Contents/view');
	    $this->Acl->allow($role, 'controllers/ContentTypes/index');
	    $this->Acl->allow($role, 'controllers/ContentTypes/view');
	    $this->Acl->allow($role, 'controllers/Users/index');
	    $this->Acl->allow($role, 'controllers/Users/view');

	    // allow basic users to log out
	    $this->Acl->allow($role, 'controllers/Users/logout');

	    // we add an exit to avoid an ugly "missing views" error message
	    echo "all done";
	    exit;
	}

/**
 * login method
 *
 * @return void
 */
	public function login() {

		if ($this->request->is('post')) {
			if ($this->Auth->login()) {
				return $this->redirect($this->Auth->redirect());
			}
			$this->Flash->error(__('Your username or password was incorrect.'));
		}
		else {
			// Si el usuario está logeado
			if ( $this->Auth->User('user') ) {
				return $this->redirect($this->Auth->redirect()); // Redirecciono al lugar por default
			}
		}
	}

/**
 * logout method
 *
 * @return void
 */
	public function logout() {
		$this->redirect($this->Auth->logout());
	}

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Flash->success(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The user could not be saved. Please, try again.'));
			}
		}
		$roles = $this->User->Role->find('list');
		$tags = $this->User->Tag->find('list');
		$this->set(compact('roles', 'tags'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->User->save($this->request->data)) {
				$this->Flash->success(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
		$roles = $this->User->Role->find('list');
		$tags = $this->User->Tag->find('list');
		$this->set(compact('roles', 'tags'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->User->delete()) {
			$this->Flash->success(__('The user has been deleted.'));
		} else {
			$this->Flash->error(__('The user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
