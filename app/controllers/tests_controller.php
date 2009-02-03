<?php
/* SVN FILE: $Id: tests_controller.php 5 2006-05-28 10:33:04Z phpnut $ */
/**
 * Short description for file.
 *
 * Long description for file
 *
 * PHP versions 4 and 5
 *
 * CakePHP Test Suite <https://trac.cakephp.org/wiki/Developement/TestSuite>
 * Copyright (c) 2006, Larry E. Masters Shorewood, IL. 60431
 * Author(s): Larry E. Masters aka PhpNut <phpnut@gmail.com>
 *
 *  Licensed under The Open Group Test Suite License
 *  Redistributions of files must retain the above copyright notice.
 *
 * @filesource
 * @author       Larry E. Masters aka PhpNut <phpnut@gmail.com>
 * @copyright    Copyright (c) 2006, Larry E. Masters Shorewood, IL. 60431
 * @link         http://www.phpnut.com/projects/
 * @package      cake
 * @subpackage   cake.app.controllers
 * @since        CakePHP Test Suite v 1.0.0.0
 * @version      $Revision: 5 $
 * @modifiedby   $LastChangedBy: phpnut $
 * @lastmodified $Date: 2006-05-28 05:33:04 -0500 (Sun, 28 May 2006) $
 * @license      http://www.opensource.org/licenses/opengroup.php The Open Group Test Suite License
 */
/**
 * Short description for class.
 *
 * Long description for class
 *
 * @package    cake
 * @subpackage cake.app.controllers
 */
class TestsController extends AppController{
	var $uses = null;

	function index ()
	{
		$this->layout = null;
		require_once TESTS.'tests.php';
		exit();
	}

	function groups ()
	{
		$this->layout = null;
		$_GET['show'] = 'groups';
		require_once TESTS.'tests.php';
		exit();
	}

	function cases ()
	{
		$this->layout = null;
		$_GET['show'] = 'cases';
		require_once TESTS.'tests.php';
		exit();
	}
}
?>