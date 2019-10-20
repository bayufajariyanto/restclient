<?php

class Klasemen extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Klasemen_model', 'klasemen');
    }

    // menampilkan data kontak
    function index()
    {
        // $data = json_decode($this->curl->simple_get($this->API), true);
        $data['data'] = $this->klasemen->getKlasemen();
        $this->load->view('list', $data);
    }
}
