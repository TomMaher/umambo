<?php
class MembersController extends AppController {

	var $name = 'Members';
	var $helpers = array('Html', 'Form','Session','Auth');

    function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allowedActions = array('*');
	}

    function login() {
    }
    
    function logout() {
    	$this->Session->destroy('Logged_In');
    	$this->redirect($this->Auth->logout());
 	}
 	
	function index() {
		$this->Member->recursive = 1;
		$this->set('members', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Member.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('member', $this->Member->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Member->create();
			if ($this->Member->save($this->data)) {
				$this->Session->setFlash(__('The Member has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Member could not be saved. Please, try again.', true));
			}
		}
		$specialties = $this->Member->Specialty->find('list');
		$groups = $this->Member->Group->find('list');
		$this->set(compact('specialties', 'groups'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Member', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Member->save($this->data)) {
				$this->Session->setFlash(__('The Member has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Member could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Member->read(null, $id);
		}
		$specialties = $this->Member->Specialty->find('list');
		$groups = $this->Member->Group->find('list');
		$this->set(compact('specialties','groups'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Member', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Member->del($id)) {
			$this->Session->setFlash(__('Member deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}


}
?>