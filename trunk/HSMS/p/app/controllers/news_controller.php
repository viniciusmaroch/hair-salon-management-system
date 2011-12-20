<?php
class NewsController extends AppController {

	var $name = 'News';

	function index() {
		$this->News->recursive = 0;
		$this->set('news', $this->paginate());
	}
	


	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid news', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('news', $this->News->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
		  $this->News->create();
		  
		  $today = getdate();
			$this->data['News']['postedOn']['month'] =  $today['mon'];
			$this->data['News']['postedOn']['day'] = $today['mday'];
			$this->data['News']['postedOn']['year'] = $today['year'];
			$this->data['News']['postedOn']['hour'] = $today['hours'];
			$this->data['News']['postedOn']['min'] = $today['minutes'];			
			if ($this->News->save($this->data)) {
				$this->Session->setFlash(__('The news has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The news could not be saved. Please, try again.', true));
			}
		}
		
		$users = $this->News->User->find('list', array('conditions' => array('User.is_manager' => 1 )));
		$this->set(compact('users'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid news', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->News->save($this->data)) {
				$this->Session->setFlash(__('The news has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The news could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->News->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for news', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->News->delete($id)) {
			$this->Session->setFlash(__('News deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('News was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
