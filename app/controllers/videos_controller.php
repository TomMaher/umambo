<?php
class VideosController extends AppController {

	var $name = 'Videos';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Video->recursive = 2;
		$this->set('videos', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Video.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('video', $this->Video->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Video->create();
			if ($this->Video->save($this->data)) {
				$this->Session->setFlash(__('The Video has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Video could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Video', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Video->save($this->data)) {
				$this->Session->setFlash(__('The Video has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Video could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Video->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Video', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Video->del($id)) {
			$this->Session->setFlash(__('Video deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}


	function admin_index() {
		$this->Video->recursive = 0;
		$this->set('videos', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Video.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('video', $this->Video->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Video->create();
			if ($this->Video->save($this->data)) {
				$this->Session->setFlash(__('The Video has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Video could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Video', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Video->save($this->data)) {
				$this->Session->setFlash(__('The Video has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Video could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Video->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Video', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Video->del($id)) {
			$this->Session->setFlash(__('Video deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>