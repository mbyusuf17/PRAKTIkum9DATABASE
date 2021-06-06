<?php

class Pasien extends CI_Controller{
    public function index(){
        $this->load->model('pasien_model','pasien1');
        $this->pasien1->id = 1;
        $this->pasien1->nama = 'chocowi';
        $this->pasien1->kode = '021201';
        $this->pasien1->gender = 'L';
        $this->pasien1->tmp_lahir = 'Surakarta';
        $this->pasien1->tgl_lahir = '2002-17-09';
        $this->pasien1->email = 'owee17@gmail.com';

        $this->load->model('pasien_model','pasien2');
        $this->pasien2->id = 2;
        $this->pasien2->nama = 'Muhamad Burhanudin Yusuf';
        $this->pasien2->kode = '021202';
        $this->pasien2->gender = 'L';
        $this->pasien2->tmp_lahir = 'Depok';
        $this->pasien2->tgl_lahir = '2002-17-06';
        $this->pasien2->email = 'yusufburhanudin642@gmail.com';

        $this->load->model('pasien_model','pasien3');
        $this->pasien3->id = 3;
        $this->pasien3->nama = 'Megatron';
        $this->pasien3->kode = '021203';
        $this->pasien3->gender = 'P';
        $this->pasien3->tmp_lahir = 'Surakarta';
        $this->pasien3->tgl_lahir = '2000-10-11';
        $this->pasien3->email = 'Megaman10@gmail.com';

        $list_pasien = [$this->pasien1, $this->pasien2, $this->pasien3];
        $data['list_pasien'] = $list_pasien;

        $this->load->view('layout/header');
        $this->load->view('pasien/index',$data);
        $this->load->view('layout/footer');
    }
    
    public function list(){
        $this->load->model('pasien_model');

        $patiens = $this->pasien_model->getAll();
        $data['patiens'] = $patiens;

        $this->load->view('layout/header');
        $this->load->view('pasien/list', $data);
        $this->load->view('layout/footer');
    }

    public function detail($id){
        $this->load->model('pasien_model');
        $patien = $this->pasien_model->getById($id);
        if($patien == null){
            echo "data tidak ada";
        }
        else{
            $data['patien'] = $patien;

            $this->load->view('layout/header');
            $this->load->view('pasien/detail', $data);
            $this->load->view('layout/footer');
        }
    }
}

?>