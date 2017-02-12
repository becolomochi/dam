<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Book extends Controller_Template {

	/**
	 * @var  View  page template
	 */
	public $template = 'book/index';
	
	public function action_index()
	{
		$this->template->title = '素顔のダム Web - べころもち工房';
		$this->template->modal_content = View::factory('book/modal/content');
		$this->template->modal_about = View::factory('book/modal/about');
		$this->template->modal_contact = View::factory('book/modal/contact');

		$this->template->pages = array(
				array(
					'file_id' => 1,
					'file_url' => '/media/img/00omote.jpg',
					'file_title' => '素顔のダム表紙',
				),
				array(
					'file_id' => 2,
					'file_url' => '/media/img/00mikaeshi.jpg',
					'file_title' => '見返し',
				),
				array(
					'file_id' => 3,
					'file_url' => '/media/img/01.jpg',
					'file_title' => '素顔のダム べころもち工房 べこ',
				),
				array(
					'file_id' => 4,
					'file_url' => '/media/img/02.jpg',
					'file_title' => 'はじめに',
				),
				array(
					'file_id' => 5,
					'file_url' => '/media/img/03.jpg',
					'file_title' => '',
				),
				array(
					'file_id' => 6,
					'file_url' => '/media/img/04.jpg',
					'file_title' => '',
				),
				array(
					'file_id' => 7,
					'file_url' => '/media/img/05.jpg',
					'file_title' => '',
				),
				array(
					'file_id' => 8,
					'file_url' => '/media/img/06.jpg',
					'file_title' => '',
				),
				array(
					'file_id' => 9,
					'file_url' => '/media/img/07.jpg',
					'file_title' => '',
				),
				array(
					'file_id' => 10,
					'file_url' => '/media/img/08.jpg',
					'file_title' => '',
				),
				array(
					'file_id' => 11,
					'file_url' => '/media/img/09.jpg',
					'file_title' => '',
				),
				array(
					'file_id' => 12,
					'file_url' => '/media/img/10.jpg',
					'file_title' => '',
				),
				array(
					'file_id' => 13,
					'file_url' => '/media/img/11.jpg',
					'file_title' => '',
				),
				array(
					'file_id' => 14,
					'file_url' => '/media/img/12.jpg',
					'file_title' => '',
				),
				array(
					'file_id' => 15,
					'file_url' => '/media/img/13.jpg',
					'file_title' => '',
				),
				array(
					'file_id' => 16,
					'file_url' => '/media/img/14.jpg',
					'file_title' => '',
				),
				array(
					'file_id' => 17,
					'file_url' => '/media/img/15.jpg',
					'file_title' => '',
				),
				array(
					'file_id' => 18,
					'file_url' => '/media/img/16.jpg',
					'file_title' => '',
				),
				array(
					'file_id' => 19,
					'file_url' => '/media/img/17.jpg',
					'file_title' => '',
				),
				array(
					'file_id' => 20,
					'file_url' => '/media/img/18.jpg',
					'file_title' => '',
				),
				array(
					'file_id' => 21,
					'file_url' => '/media/img/19.jpg',
					'file_title' => '',
				),
				array(
					'file_id' => 22,
					'file_url' => '/media/img/20.jpg',
					'file_title' => '',
				),
				array(
					'file_id' => 23,
					'file_url' => '/media/img/21.jpg',
					'file_title' => '',
				),
				array(
					'file_id' => 24,
					'file_url' => '/media/img/22.jpg',
					'file_title' => '',
				),
				array(
					'file_id' => 25,
					'file_url' => '/media/img/23.jpg',
					'file_title' => '',
				),
				array(
					'file_id' => 26,
					'file_url' => '/media/img/24.jpg',
					'file_title' => '',
				),
				array(
					'file_id' => 27,
					'file_url' => '/media/img/25.jpg',
					'file_title' => '',
				),
				array(
					'file_id' => 28,
					'file_url' => '/media/img/26.jpg',
					'file_title' => '',
				),
				array(
					'file_id' => 29,
					'file_url' => '/media/img/27.jpg',
					'file_title' => '',
				),
				array(
					'file_id' => 30,
					'file_url' => '/media/img/28.jpg',
					'file_title' => '',
				),
				array(
					'file_id' => 31,
					'file_url' => '/media/img/29.jpg',
					'file_title' => '',
				),
				array(
					'file_id' => 32,
					'file_url' => '/media/img/30.jpg',
					'file_title' => '',
				),
				array(
					'file_id' => 33,
					'file_url' => '/media/img/31.jpg',
					'file_title' => '',
				),
				array(
					'file_id' => 34,
					'file_url' => '/media/img/32.jpg',
					'file_title' => '',
				),
				array(
					'file_id' => 35,
					'file_url' => '/media/img/33.jpg',
					'file_title' => '',
				),
				array(
					'file_id' => 36,
					'file_url' => '/media/img/00mikaeshi.jpg',
					'file_title' => '',
				),
				array(
					'file_id' => 37,
					'file_url' => '/media/img/00ura.jpg',
					'file_title' => '素顔のダム裏表紙',
				),
		);
	}

	public function after()
	{
		if ($this->auto_render === TRUE)
		{
			$this->template->styles = array(
				'/media/lib/normalize.css',
				'/media/lib/bookblock/css/bookblock.css',
				'/media/css/dambook.css',
			);
			
			$this->template->scripts = array(
				'/media/lib/bookblock/js/modernizr.custom.js',
				'/media/lib/jquery.min.js',
				'/media/lib/bookblock/js/jquerypp.custom.js',
				'/media/lib/bookblock/js/jquery.bookblock.min.js',
				'/media/js/dambook.js',
			);
		}

		parent::after();
	}
}