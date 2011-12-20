<?php
class ServicesController extends AppController {

	var $name = 'Services';

	function index() {
		$this->Service->recursive = 0;
		$this->set('services', $this->paginate());
	}
	function viewPublic() {
		$this->Service->recursive = 0;
		$this->set('services', $this->paginate());
	}
	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid service', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('service', $this->Service->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Service->create();
			if ($this->Service->save($this->data)) {
				$this->Session->setFlash(__('The service has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The service could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid service', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Service->save($this->data)) {
				$this->Session->setFlash(__('The service has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The service could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Service->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for service', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Service->delete($id)) {
			$this->Session->setFlash(__('Service deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Service was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
