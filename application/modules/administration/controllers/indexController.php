<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * 
 */
class IndexController extends MY_Controller {
	
	function __construct() {
		$this->load->model('Team');
	}
	
	public function indexAction() 
	{
		$var_data = array();
		$var_data['team_list'] = $this->Team->get_all();
		$this->template
		->title('Administrator','Dashboard')	
		->build('team/list', $var_data);
	}
}