<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * 
 */
class MemberController extends MY_Controller {
	
	function __construct() {
		
	}
	
	public function listAction() 
	{
		$var_data = array();
		
		$this->template
		->title('Administrator','Member List')	
		->build('member/list', $var_data);
	}
	
	public function bannedAction() 
	{
		$var_data = array();
		
		$this->template
		->title('Administrator','Member Banned')	
		->build('member/banned', $var_data);
	}
}