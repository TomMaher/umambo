<?php
class GalleriesController extends AppController {

	var $name = 'Galleries';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Gallery->recursive = 0;
		$this->set('galleries', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Gallery.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('gallery', $this->Gallery->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Gallery->create();
			if ($this->Gallery->save($this->data)) {
				$this->Session->setFlash(__('The Gallery has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Gallery could not be saved. Please, try again.', true));
			}
		}
		$members = $this->Gallery->Member->find('list');
		$this->set(compact('members'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Gallery', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Gallery->save($this->data)) {
				$this->Session->setFlash(__('The Gallery has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Gallery could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Gallery->read(null, $id);
		}
		$members = $this->Gallery->Member->find('list');
		$this->set(compact('members'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Gallery', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Gallery->del($id)) {
			$this->Session->setFlash(__('Gallery deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>