<?php defined('BASEPATH') OR exit('No direct script access allowed');
 
class Welcome extends Public_Controller {
 
	function __construct() {
		parent::__construct();
	}

	public function index() {
		$this->data['pagetitle'] = 'test';
		$this->render('homepage_view');
		//$this->render(NULL, 'json'); //....if we want to render a json string. Also, if a request is made using ajax, we can simply do $this->render()
	}

}