<?php
class GadgetsController extends AppController {

	var $name = 'Gadgets';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Gadget->recursive = 0;
		$this->set('gadgets', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Gadget.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('gadget', $this->Gadget->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Gadget->create();
			if ($this->Gadget->save($this->data)) {
				$this->Session->setFlash(__('The Gadget has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Gadget could not be saved. Please, try again.', true));
			}
		}
		$layouts = $this->Gadget->Layout->find('list');
		$this->set(compact('layouts'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Gadget', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Gadget->save($this->data)) {
				$this->Session->setFlash(__('The Gadget has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Gadget could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Gadget->read(null, $id);
		}
		$layouts = $this->Gadget->Layout->find('list');
		$this->set(compact('layouts'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Gadget', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Gadget->del($id)) {
			$this->Session->setFlash(__('Gadget deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>