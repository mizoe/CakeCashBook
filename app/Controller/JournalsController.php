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
 * show_json method
 *
 * @return void
 */
	public function show_json($year = null, $month = null, $staff_id = null, $getTotal = false){
        $res = $this->Journal->getMonthly($year, $month, $staff_id, $getTotal);
		$this->viewClass = 'json';
		$this->set(compact('res'));
		$this->set('_serialize','res');
	}

/**
 * show_monthly method
 *
 * @return void
 */
	public function show_monthly($year = null, $month = null, $staff_id = null){
		$options = $this->Journal->monthlyOptions($year, $month, $staff_id, true);
		$this->Paginator->settings = $options;
		$this->set('journals', $this->Paginator->paginate());
		
        $total = $this->Journal->getMonthly($year, $month, $staff_id, true);
		$this->set('total', $total[0][0]['sumAmount']);
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
		$staffs = $this->Journal->Staff->find('list');
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
		$staffs = $this->Journal->Staff->find('list');
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
