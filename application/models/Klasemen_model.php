<?php

use GuzzleHttp\Client;

class Klasemen_model extends CI_model
{
    private $_client;

    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'http://localhost/rest/api/'
        ]);
    }

    public function getKlasemen()
    {

        $response = $this->_client->request('GET', 'klasemen');

        $result = json_decode($response->getBody()->getContents(), true);

        return $result['data'];
    }

    public function tambahDataKlasemen()
    {
        $data = [
            'name' => $this->input->post('name', true),
            'p' => $this->input->post('p', true),
            'w' => $this->input->post('w', true),
            'd' => $this->input->post('d', true),
            'l' => $this->input->post('l', true),
            'f' => $this->input->post('f', true),
            'a' => $this->input->post('a', true),
            'gd' => $this->input->post('gd', true),
            'pts' => $this->input->post('pts', true)
        ];

        $response = $this->_client->request('POST', 'klasemen', [
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result['data'];
    }

    public function ubahDataKlasemen()
    {
        $data = [
            'id' => $this->input->post('id', true),
            'name' => $this->input->post('name', true),
            'p' => $this->input->post('p', true),
            'w' => $this->input->post('w', true),
            'd' => $this->input->post('d', true),
            'l' => $this->input->post('l', true),
            'f' => $this->input->post('f', true),
            'a' => $this->input->post('a', true),
            'gd' => $this->input->post('gd', true),
            'pts' => $this->input->post('pts', true)
        ];

        $response = $this->_client->request('PUT', 'klasemen', [
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result['data'];
    }
}
