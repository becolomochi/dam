<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Common extends Controller_Template {

	/**
	 * @var  View  page template
	 */
	public $template = 'top';
	
	public function action_index()
	{
		$this->template->title = 'Damdom - べころもち工房';
		$this->template->content = '概要について';
	}

	public function after()
	{
		if ($this->auto_render === TRUE)
		{
			$this->template->styles = array(
				'/media/lib/normalize.css',
				'/media/css/base.css',
			);
			
			$this->template->scripts = array(
//				'/media/lib/jquery.min.js',
			);
		}

		parent::after();
	}
} // End Welcome
