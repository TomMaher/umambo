<?php
class SpecialtiesController extends AppController {

	var $name = 'Specialties';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Specialty->recursive = 0;
		$this->set('specialties', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Specialty.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('specialty', $this->Specialty->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Specialty->create();
			if ($this->Specialty->save($this->data)) {
				$this->Session->setFlash(__('The Specialty has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Specialty could not be saved. Please, try again.', true));
			}
		}
		//$specialties = $this->Specialty->Specialty->find('list');
		$jobTitles = $this->Specialty->JobTitle->find('list');
		//print_r($specialties);
		print_r ($jobTitles);
		$this->set(compact('specialties', 'jobTitles'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Specialty', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Specialty->save($this->data)) {
				$this->Session->setFlash(__('The Specialty has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Specialty could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Specialty->read(null, $id);
		}
		//$specialties = $this->Specialty->Title->find('list');
		$jobTitles = $this->Specialty->JobTitle->find('list');
		$this->set(compact('specialties','jobTitles'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Specialty', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Specialty->del($id)) {
			$this->Session->setFlash(__('Specialty deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>