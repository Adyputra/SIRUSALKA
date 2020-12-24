<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_barang', 'barang');
    }
    

	public function index()
	{
        $data['barang'] = $this->barang->tampil_data()->result();
		$this->load->view('main/index', $data);
	}
}
