<?php
App::uses('AppController', 'Controller');
/**
 * Slips Controller
 *
 * @property Slip $Slip
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class SlipsController extends AppController {

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
		$this->Slip->recursive = 0;
		$this->set('slips', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Slip->exists($id)) {
			throw new NotFoundException(__('Invalid slip'));
		}
		$options = array('conditions' => array('Slip.' . $this->Slip->primaryKey => $id));
		$this->set('slip', $this->Slip->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Slip->create();

			//var_dump($this->request->data['Slip']['year']);
			//「年-月」(2015-7とか)の形式で slip_name に保存
			$this->request->data['Slip']['slip_name']
			 = $this->request->data['Slip']['year']
			 . '-' 
			 . $this->request->data['Slip']['month'];

			if ($this->Slip->save($this->request->data)) {
				$this->Session->setFlash(__('The slip has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The slip could not be saved. Please, try again.'));
			}
		}
		$staffs = $this->Slip->Staff->find('list');
		$this->set(compact('staffs'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Slip->exists($id)) {
			throw new NotFoundException(__('Invalid slip'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Slip->save($this->request->data)) {
				$this->Session->setFlash(__('The slip has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The slip could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Slip.' . $this->Slip->primaryKey => $id));
			$this->request->data = $this->Slip->find('first', $options);
		}
		$staffs = $this->Slip->Staff->find('list');
		$this->set(compact('staffs'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Slip->id = $id;
		if (!$this->Slip->exists()) {
			throw new NotFoundException(__('Invalid slip'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Slip->delete()) {
			$this->Session->setFlash(__('The slip has been deleted.'));
		} else {
			$this->Session->setFlash(__('The slip could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
