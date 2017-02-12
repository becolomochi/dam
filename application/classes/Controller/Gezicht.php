<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Gezicht extends Controller_Template {
	
	/**
	 * @var  View  page template
	 */
	public $template = 'gezicht/index';
	
	public function action_index() {
		$this->template->title = 'Gezicht';
	}
	
}