<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Gezicht extends Controller_Template {
	
	/**
	 * @var  View  page template
	 */
	public $template = 'gezicht/layout/base';
	
	public function action_index() {
		$this->template = View::factory('gezicht/layout/base')
				->set('top', 'top')
				->set('jsslide', View::factory('gezicht/partial/slide-top'));
		$this->template->title = 'gezicht';
		$this->template->content = View::factory('gezicht/index');
	}
	
	public function action_wit() {
		$this->template = View::factory('gezicht/layout/base')
				->set('jsslide', View::factory('gezicht/partial/slide-wit'));
		$this->template->title = 'wit 白 - gezicht';
		$this->template->content = View::factory('gezicht/wit/index')
				->set('pager', View::factory('gezicht/layout/pager'));
	}
	
	public function action_kalm() {
		$this->template = View::factory('gezicht/layout/base')
				->set('jsslide', View::factory('gezicht/partial/slide-kalm'));
		$this->template->title = 'kalm 和 - gezicht';
		$this->template->content = View::factory('gezicht/kalm/index')
				->set('pager', View::factory('gezicht/layout/pager'));
	}
	
	public function action_canyon() {
		$this->template = View::factory('gezicht/layout/base')
				->set('jsslide', View::factory('gezicht/partial/slide-canyon'));
		$this->template->title = '峡 gezicht';
		$this->template->content = View::factory('gezicht/canyon/index')
				->set('pager', View::factory('gezicht/layout/pager'));
	}
	
	public function action_flow() {
		$this->template = View::factory('gezicht/layout/base')
				->set('jsslide', View::factory('gezicht/partial/slide-flow'));
		$this->template->title = '流 gezicht';
		$this->template->content = View::factory('gezicht/flow/index')
				->set('pager', View::factory('gezicht/layout/pager'));
	}

	public function after()
	{
		if ($this->auto_render === TRUE)
		{
			$this->template->styles = [
				'/media/lib/normalize.css',
				'/media/lib/vegas/vegas.min.css',
				'/media/css/gezicht.css',
			];
			
			$this->template->scripts = [
				'/media/lib/barbajs/barba.min.js',
				'/media/lib/jquery3.1.1/jquery.min.js',
				'/media/lib/jquery-mousewheel/jquery.mousewheel.min.js',
				'/media/lib/vegas/vegas.min.js',
			];
		}

		parent::after();
	}
}