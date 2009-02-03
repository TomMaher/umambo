<?php
class AlbumsController extends AppController {

	var $name = 'Albums';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Album->recursive = 0;
		$this->set('albums', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Album.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('album', $this->Album->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Album->create();
			if ($this->Album->save($this->data)) {
				$this->Session->setFlash(__('The Album has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Album could not be saved. Please, try again.', true));
			}
		}
		$members = $this->Album->Member->find('list');
		$this->set(compact('members'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Album', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Album->save($this->data)) {
				$this->Session->setFlash(__('The Album has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Album could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Album->read(null, $id);
		}
		$members = $this->Album->Member->find('list');
		$this->set(compact('members'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Album', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Album->del($id)) {
			$this->Session->setFlash(__('Album deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>