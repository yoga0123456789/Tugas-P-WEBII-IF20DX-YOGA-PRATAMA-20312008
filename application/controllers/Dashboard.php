<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	public function index()
	{
		$data['meta'] = [
			'title' => 'Home',
		];

		$this->load->view('home_vw', $data);
	}

	public function inspiration()
	{
		$data['meta'] = [
			'title' => 'Inspiration',
		];
		$this->load->view('inspiration_vw', $data);
	}

	public function karya()
	{
		$data['meta'] = [
			'title' => 'Karya',
		];
		$this->load->view('karya_vw', $data);
	}

	public function about()
	{
		$data['meta'] = [
			'title' => 'About',
		];
		$this->load->view('about_vw', $data);
	}

	public function more()
	{
		$data['meta'] = [
			'title' => 'More',
		];
		$this->load->view('more_vw', $data);
	}
}
