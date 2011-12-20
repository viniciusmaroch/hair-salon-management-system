<?php
class ShiftsController extends AppController {

	var $name = 'Shifts';

	function index() {
		$this->Shift->recursive = 0;
		$this->set('shifts', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid shift', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('shift', $this->Shift->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Shift->create();
			if ($this->Shift->save($this->data)) {
				$this->Session->setFlash(__('The shift has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The shift could not be saved. Please, try again.', true));
			}
		}
		
		$users = $this->Shift->User->find('list', array('conditions' => array('User.is_employee' => 1 )));
		
		$this->set(compact('users'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid shift', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Shift->save($this->data)) {
				$this->Session->setFlash(__('The shift has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The shift could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Shift->read(null, $id);
		}
		$users = $this->Shift->User->find('list', array('conditions' => array('User.is_employee' => 1 )));
		
		$this->set(compact('users'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for shift', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Shift->delete($id)) {
			$this->Session->setFlash(__('Shift deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Shift was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
