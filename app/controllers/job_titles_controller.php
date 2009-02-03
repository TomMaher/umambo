<?php
class JobTitlesController extends AppController {

	var $name = 'JobTitles';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->JobTitle->recursive = 0;
		$this->set('jobTitles', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid JobTitle.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('jobTitle', $this->JobTitle->read(null, $id));
	}

	function add() {

		if (!empty($this->data)) {
			$this->JobTitle->create();
			if ($this->JobTitle->save($this->data)) {
				$this->Session->setFlash(__('The JobTitle has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The JobTitle could not be saved. Please, try again.', true));
			}
		}
		$professions = $this->JobTitle->Profession->find('list');
		$this->set(compact('professions'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid JobTitle', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->JobTitle->save($this->data)) {
				$this->Session->setFlash(__('The JobTitle has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The JobTitle could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->JobTitle->read(null, $id);
		}
		$professions = $this->JobTitle->Profession->find('list');
		$this->set(compact('professions'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for JobTitle', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->JobTitle->del($id)) {
			$this->Session->setFlash(__('JobTitle deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>