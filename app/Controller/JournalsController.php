<?php
App::uses('AppController', 'Controller');
/**
 * Journals Controller
 *
 * @property Journal $Journal
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class JournalsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Journal->recursive = 0;
		$this->set('journals', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Journal->exists($id)) {
			throw new NotFoundException(__('Invalid journal'));
		}
		$options = array('conditions' => array('Journal.' . $this->Journal->primaryKey => $id));
		$this->set('journal', $this->Journal->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Journal->create();
			if ($this->Journal->save($this->request->data)) {
				$this->Session->setFlash(__('The journal has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The journal could not be saved. Please, try again.'));
			}
		}
		$slips = $this->Journal->Slip->find('list');
		$this->set(compact('slips'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Journal->exists($id)) {
			throw new NotFoundException(__('Invalid journal'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Journal->save($this->request->data)) {
				$this->Session->setFlash(__('The journal has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The journal could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Journal.' . $this->Journal->primaryKey => $id));
			$this->request->data = $this->Journal->find('first', $options);
		}
		$slips = $this->Journal->Slip->find('list');
		$this->set(compact('slips'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Journal->id = $id;
		if (!$this->Journal->exists()) {
			throw new NotFoundException(__('Invalid journal'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Journal->delete()) {
			$this->Session->setFlash(__('The journal has been deleted.'));
		} else {
			$this->Session->setFlash(__('The journal could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
