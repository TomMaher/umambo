<?php
class FeaturedVideosController extends AppController {

	var $name = 'FeaturedVideos';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->FeaturedVideo->recursive = 0;
		$this->set('featuredVideos', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid FeaturedVideo.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('featuredVideo', $this->FeaturedVideo->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->FeaturedVideo->create();
			if ($this->FeaturedVideo->save($this->data)) {
				$this->Session->setFlash(__('The FeaturedVideo has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The FeaturedVideo could not be saved. Please, try again.', true));
			}
		}
		$videos = $this->FeaturedVideo->Video->find('list');
		$this->set(compact('videos'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid FeaturedVideo', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->FeaturedVideo->save($this->data)) {
				$this->Session->setFlash(__('The FeaturedVideo has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The FeaturedVideo could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->FeaturedVideo->read(null, $id);
		}
		$videos = $this->FeaturedVideo->Video->find('list');
		$this->set(compact('videos'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for FeaturedVideo', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->FeaturedVideo->del($id)) {
			$this->Session->setFlash(__('FeaturedVideo deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

	function admin_index() {
		$this->FeaturedVideo->recursive = 0;
		$this->set('featuredVideos', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid FeaturedVideo.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('featuredVideo', $this->FeaturedVideo->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->FeaturedVideo->create();
			if ($this->FeaturedVideo->save($this->data)) {
				$this->Session->setFlash(__('The FeaturedVideo has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The FeaturedVideo could not be saved. Please, try again.', true));
			}
		}
		$videos = $this->FeaturedVideo->Video->find('list');
		$this->set(compact('videos'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid FeaturedVideo', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->FeaturedVideo->save($this->data)) {
				$this->Session->setFlash(__('The FeaturedVideo has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The FeaturedVideo could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->FeaturedVideo->read(null, $id);
		}
		$videos = $this->FeaturedVideo->Video->find('list');
		$this->set(compact('videos'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for FeaturedVideo', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->FeaturedVideo->del($id)) {
			$this->Session->setFlash(__('FeaturedVideo deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>