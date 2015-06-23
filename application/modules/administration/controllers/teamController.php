<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * 
 */
class TeamController extends MY_Controller {
	
	function __construct() {
		$this->load->model('Team');
	}
	
	public function listAction() 
	{
		$var_data = array();
		
		$var_data['team_list'] = $this->Team->get_all();
				
		$this->template
		->title('Administrator','Team List')	
		->build('team/list', $var_data);
	}
	
	public function memberAction() 
	{
		$var_data = array();
		
		$this->template
		->title('Administrator','Team Member')	
		->build('team/member', $var_data);
	}
}