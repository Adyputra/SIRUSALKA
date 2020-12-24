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
        // var_dump($this->cart->contents());die;
        $data['barang'] = $this->barang->tampil_data()->result();
        $this->load->view('main/templates/header', $data);
        $this->load->view('main/templates/topbar');
        $this->load->view('main/index');
        $this->load->view('main/templates/footer');
    }
    public function cart()
    {
        $this->load->view('main/templates/header');
        $this->load->view('main/templates/topbar');
        $this->load->view('main/cart');
        $this->load->view('main/templates/footer');
    }

    public function addCart()
    {
        is_logged_in();
        $id = $this->input->get('id');
        $qty = 1;
        $price = $this->input->get('price');
        $name = urldecode($this->input->get('name'));

        $data = [
            'id' => $id,
            'qty' => $qty,
            'price' => $price,
            'name' => $name
        ];
        $this->cart->insert($data);
        $this->session->set_flashdata('addCart', 'sukses ditambahkan ke keranjang');
        redirect('main');
    }
}
