<?php
class ProfessionsController extends AppController {

	var $name = 'Professions';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Profession->recursive = 0;
		$this->set('professions', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Profession.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('profession', $this->Profession->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Profession->create();
			if ($this->Profession->save($this->data)) {
				$this->Session->setFlash(__('The Profession has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Profession could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Profession', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Profession->save($this->data)) {
				$this->Session->setFlash(__('The Profession has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Profession could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Profession->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Profession', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Profession->del($id)) {
			$this->Session->setFlash(__('Profession deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>