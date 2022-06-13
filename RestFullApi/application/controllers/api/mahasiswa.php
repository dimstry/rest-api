<?php

use Restserver\Libraries\REST_Controller;
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Mahasiswa extends REST_Controller 
{
  
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Mahasiswa_model', 'mhs');
    $this->methods['index_get']['limit'] =2;
    $this->methods['index_delate']['limit'] =2;
  }
  
  public function index_get()
  {
    $id = $this->get('id');
    if ($id) {
      $mahasiswa = $this->mhs->getMahasiswa();
    }else {
      $mahasiswa = $this->mhs->getMahasiswa($id);
    }
    
    if ($mahasiswa) {
      $this->response([
          'status' => true,
          'data' => $mahasiswa
      ], REST_Controller::HTTP_OK);
    }else {
      $this->response([
          'status' => false,
          'massage' => 'id not found'
      ], REST_Controller::HTTP_NOT_FOUND);
    }
  }
  
  
  public function index_delate()
  {
    $id = $this->delate('id');
    
    if ($id === null) {
      $this->response([
          'status' => false,
          'massage' => 'provide an id'
      ], REST_Controller::HTTP_BAD_REQUEST);
    }else {
      if ($this->mahasiswa->delateMahasiswa($id) > 0) {
        // ini oke
        $this->response([
          'status' => true,
          'id' => $id,
          'massage' => 'delated'
        ], REST_Controller::HTTP_NO_CONTENT);
      }else {
        //id not found
        $this->response([
          'status' => false,
          'massage' => 'provide an id'
        ], REST_Controller::HTTP_BAD_REQUEST);
      }
    }
  }
  
  public function index_post()
  {
    $data = [
        'nrp' => $this->post('nrp'),
        'nama' => $this->post('nama'),
        'email' => $this->post('email'),
        'jurusan' => $this->post('jurusan')
      ];
   if ($this->mahasiswa->createMahasiswa($data) > 0) {
        // code...
        $this->response([
          'status' => true,
          'massage' => 'new mahasiswa has created'
        ], REST_Controller::HTTP_CREATED);
      }else {
        $this->response([
          'status' => false,
          'id' => $id,
          'massage' => 'fail created'
        ], REST_Controller::HTTP_BAD_REQUEST);
      }
  }
  
  public function index_put() 
  {
    $id = $this->put('id');
    $data = [
        'nrp' => $this->put('nrp'),
        'nama' => $this->put('nama'),
        'email' => $this->put('email'),
        'jurusan' => $this->put('jurusan')
      ];
      if ($this->mahasiswa->updateMahasiswa($data,$id) > 0) {
        // code...
        $this->response([
          'status' => true,
          'massage' => 'updated'
        ], REST_Controller::HTTP_NO_CONTENT);
      }else {
        $this->response([
          'status' => false,
          'id' => $id,
          'massage' => 'faild update'
        ], REST_Controller::HTTP_BAD_REQUEST);
      }
  }
}