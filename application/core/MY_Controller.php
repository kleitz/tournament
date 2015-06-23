<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

require APPPATH."third_party/MX/Controller.php";

class MY_Controller extends MX_Controller {
	
	public static function _restricted_ip($needle, $haystack)
	{
		if (!in_array($needle, $haystack)) {
			show_error("You are not allowed to access this page.");
		}
	}
}