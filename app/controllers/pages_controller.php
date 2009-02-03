<?php
class PagesController extends AppController {
	var $name = 'Pages';
	var $helpers = array('Auth','Session');
	var $components = array('Auth','Session');
	var $uses = array('Video','FeaturedVideo','Member');

    function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allowedActions = array('*');
		
		//check if we are logged in
		if (!$this->Session->check('Logged_In')) {
			$this->Session->write('Logged_In','No');
		}
		if ($this->Session->check('Auth')) {
			$this->Session->write('Logged_In','Yes');
		}

		//check if we are on the home page
		if($this->params['pass']['0'] == 'home'){
			$this->set('featuredvideos',$this->FeaturedVideo->find('all'));
		}
	}

	function display() {
		$path = func_get_args();
		$count = count($path);
				
		if (!$count) {
			$this->redirect('/');
		}
		$page = $subpage = $title = null;

		if (!empty($path[0])) {
			$page = $path[0];
		}
		if (!empty($path[1])) {
			$subpage = $path[1];
		}
		if (!empty($path[$count - 1])) {
			$title = Inflector::humanize($path[$count - 1]);
		}
		$this->set(compact('page', 'subpage', 'title'));
		$this->render(join('/', $path));
	}
}

?>