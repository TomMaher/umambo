<?php
class LayoutsController extends AppController {

	var $name = 'Layouts';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Layout->recursive = 0;
		$this->set('layouts', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Layout.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('layout', $this->Layout->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Layout->create();
			if ($this->Layout->save($this->data)) {
				$this->Session->setFlash(__('The Layout has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Layout could not be saved. Please, try again.', true));
			}
		}
		$gadgets = $this->Layout->Gadget->find('list');
		$members = $this->Layout->Member->find('list');
		$this->set(compact('gadgets', 'members'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Layout', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Layout->save($this->data)) {
				$this->Session->setFlash(__('The Layout has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Layout could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Layout->read(null, $id);
		}
		$gadgets = $this->Layout->Gadget->find('list');
		$members = $this->Layout->Member->find('list');
		$this->set(compact('gadgets','members'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Layout', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Layout->del($id)) {
			$this->Session->setFlash(__('Layout deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>