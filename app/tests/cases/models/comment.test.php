<?php 
/* SVN FILE: $Id$ */
/* Comment Test cases generated on: 2009-01-05 08:01:44 : 1231163864*/
App::import('Model', 'Comment');

class CommentTestCase extends CakeTestCase {
	var $Comment = null;
	var $fixtures = array('app.comment', 'app.member');

	function startTest() {
		$this->Comment =& ClassRegistry::init('Comment');
	}

	function testCommentInstance() {
		$this->assertTrue(is_a($this->Comment, 'Comment'));
	}

	function testCommentFind() {
		$this->Comment->recursive = -1;
		$results = $this->Comment->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('Comment' => array(
			'id'  => 1,
			'member_id'  => 1,
			'to_member_id'  => 1,
			'created'  => '2009-01-05 08:57:44',
			'message'  => 'Lorem ipsum dolor sit amet'
			));
		$this->assertEqual($results, $expected);
	}
}
?>