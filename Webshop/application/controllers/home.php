<?php
/**
 * @Author: Gertjan
 * @Date:   2016-03-30 11:30:02
 * @Last Modified by:   Gertjan
 * @Last Modified time: 2016-03-30 14:28:53
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('home_model');
    }

	public function index()
	{
		$data['title'] = 'Welcome to our webshop';
		$data['header'] = 'Test webshop';
		$data['productnames'] = $this->home_model->getProductNames();
		$this->load->view('layout/header');
		$this->load->view('home_view', $data);
	}
}