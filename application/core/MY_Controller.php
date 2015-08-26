<?php
 
class MY_Controller extends CI_Controller
{
	protected $data = array('before_head' => null, 'before_body' => null);
  	
  	function __construct() {
	    parent::__construct();
		$this->data['page_title'] = 'My CodeIgniter App';
	}

	protected function render($the_view = NULL, $template = 'master') {

		if( $template == 'json' || isset($_GET['json']) ) {
			header( 'Content-Type: application/json' );
			echo json_encode( $this->data );
		}

		elseif( is_null( $template ) || $this->input->is_ajax_request() ) {
			$this->load->view( $the_view, $this->data );
		}

		else {
			$this->data['the_view_content'] = is_null( $the_view ) ? '' : $this->load->view( $the_view, $this->data, TRUE );
			$this->load->view( 'templates/' . $template.'_view', $this->data );
		}
	}
}
 
class Admin_Controller extends MY_Controller {
 
	function __construct() {

		parent::__construct();
		$this->load->library('ion_auth');

		if (!$this->ion_auth->logged_in()) {
			redirect('admin/user/login', 'refresh');
		}

		$this->data['current_user'] = $this->ion_auth->user()->row();
		$this->data['current_user_menu'] = '';

		if($this->ion_auth->in_group('admin')) {
		  $this->data['current_user_menu'] = $this->load->view('templates/_parts/user_menu_admin_view.php', NULL, TRUE);
		}

		$this->data['page_title'] = 'CI App - Dashboard';
	}
	
	protected function render($the_view = NULL, $template = 'admin_master') {
		parent::render($the_view, $template);
	}

	public function is_controller($controllers = array()){
		
		foreach ($controllers as $controller) {
			if($this->router->fetch_class() == $controller){
				return true;
			}
		}
		return false;

	}
}
 
class Public_Controller extends MY_Controller {

	function __construct() {
		parent::__construct();
	}

}