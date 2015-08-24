<?php
 
class MY_Controller extends CI_Controller
{
	protected $data = array();
  	
  	function __construct() {
	    parent::__construct();
		$this->data['page_title'] = 'My CodeIgniter App';
	}

	protected function render($the_view = NULL, $template = 'master') {

		if( $template == 'json' || $this->input->is_ajax_request() ) {
			header( 'Content-Type: application/json' );
			echo json_encode( $this->data );
		}

		elseif( is_null( $template ) ) {
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
		
		$this->data['before_head'] = "<!-- Before Head //--!>";
		$this->data['before_body'] = "<!-- Before Body //--!>";
	}

	protected function render($the_view = NULL, $template = 'admin_master') {
		parent::render($the_view, $template);
	}

}
 
class Public_Controller extends MY_Controller {

	function __construct() {
		parent::__construct();
		echo 'This is from public controller';
	}

}