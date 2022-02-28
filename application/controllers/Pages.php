<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends MY_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function comming_soon()
	{
		parent::load_view('pages/index');
	}


	public function index()
	{
		parent::load_view('pages/index');
	}

	public function shop()
	{
		parent::load_view('pages/shop');
	}

	public function contact()
	{
		parent::load_view('pages/contact_us');
	}

	public function about_us()
	{
		parent::load_view('pages/about_us');
	}

	public function gallery()
	{
		parent::load_view('pages/gallery');
	}

	public function cart()
	{
		parent::load_view('pages/cart');
	}

}
