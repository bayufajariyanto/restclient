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

        $data['data'] = $this->klasemen->getKlasemen();
        // $data = json_decode($this->curl->simple_get($this->API), true);
        $this->load->view('list', $data);
    }
    public function tim()
    {
        $klik = $this->input->post('kurang1');
        if ($klik) {
            echo "<script>console.log('ok')</script>";
            var_dump('ok');
        }
    }
}
