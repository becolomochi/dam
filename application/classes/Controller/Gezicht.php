<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Gezicht extends Controller_Template {
	
	/**
	 * @var  View  page template
	 */
	public $template = 'gezicht/layout/base';
	
	public function action_index() {
		$this->template->title = 'gezicht';
		$this->template->content = View::factory('gezicht/index');
	}
	
	public function action_wit() {
		$this->template->title = '白 gezicht';
		$this->template->content = View::factory('gezicht/wit/index');
	}
	
	public function action_kalm() {
		$this->template->title = '和 gezicht';
		$this->template->content = View::factory('gezicht/kalm/index');
	}
	
	public function action_canyon() {
		$this->template->title = '峡 gezicht';
		$this->template->content = View::factory('gezicht/canyon/index');
	}
	
	public function action_flow() {
		$this->template->title = '流 gezicht';
		$this->template->content = View::factory('gezicht/flow/index');
	}

	public function after()
	{
		if ($this->auto_render === TRUE)
		{
			$this->template->styles = [
				'/media/lib/normalize.css',
				'/media/css/gezicht.css',
			];
			
			$this->template->scripts = [
				'/media/lib/bookblock/js/modernizr.custom.js',
				'/media/lib/jquery.min.js',
				'/media/lib/barba.min.js',
			];
		}

		parent::after();
	}
}