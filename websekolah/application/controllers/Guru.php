<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Guru extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        
        $this->load->model('m_guru');
        $this->load->model('m_mapel');

    }
    

    public function index()
    {
        $data = array(
            'title'  => 'Data Guru',
            'title1' => 'SMK MUH 6 Kra',
            'guru'   => $this->m_guru->lists(),
            'isi'    => 'admin/guru/v_list'
        );
        $this->load->view('admin/layout/v_wrapper',$data,FALSE);
    }

    public function add()
    {
        $this->form_validation->set_rules('nip', 'NIP', 'required');
        $this->form_validation->set_rules('nama_guru', 'Nama Guru', 'required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('id_mapel', 'Mata Pelajaran', 'required');
        $this->form_validation->set_rules('pendidikan', 'Pendidikan', 'required');
        //$this->form_validation->set_rules('foto_guru', 'Foto Guru', 'required');

        
        if ($this->form_validation->run() == TRUE) {
            $config['upload_path'] = './foto_guru/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 20000;
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('foto_guru'))
            {

                    $data = array(
                        'title'  => 'Tambah Data Guru',
                        'title1' => 'SMK MUH 6 Kra',
                        'error'  => $this->upload->display_errors(),
                        'guru'   => $this->m_guru->detail($id_guru),
                        'mapel'  => $this->m_mapel->lists(),
                        'isi'    => 'admin/guru/v_add'
                    );
                    $this->load->view('admin/layout/v_wrapper',$data,FALSE);
            }
            else
            {
                $upload_data                = array('uploads' => $this->upload->data());
                $config['image_library']    = 'gd2';
                $config['source_image']     = './foto_guru/'.$upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);

                $data = array(
                    'nip'           => $this->input->post('nip'),
                    'nama_guru'     => $this->input->post('nama_guru'),
                    'tempat_lahir'  => $this->input->post('tempat_lahir'),
                    'tgl_lahir'     => $this->input->post('tgl_lahir'),
                    'id_mapel'      => $this->input->post('id_mapel'),
                    'pendidikan'    => $this->input->post('pendidikan'),
                    'foto_guru'     => $upload_data['uploads']['file_name']
                );

                $this->m_guru->add($data);
                $this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan');
                
                redirect('guru');

            }
        }

        $data = array(
            'title'  => 'Tambah Data Guru', 
            'title1' => 'SMK MUH 6 Kra',
            'mapel'  => $this->m_mapel->lists(),
            'isi'    => 'admin/guru/v_add'
        );
        $this->load->view('admin/layout/v_wrapper',$data,FALSE);
    }

    public function edit($id_guru)
    {
        $this->form_validation->set_rules('nip', 'NIP', 'required');
        $this->form_validation->set_rules('nama_guru', 'Nama Guru', 'required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('id_mapel', 'Mata Pelajaran', 'required');
        $this->form_validation->set_rules('pendidikan', 'Pendidikan', 'required');
        //$this->form_validation->set_rules('foto_guru', 'Foto Guru', 'required');

        
        if ($this->form_validation->run() == TRUE) {
            $config['upload_path'] = './foto_guru/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 20000;
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('foto_guru'))
            {

                    $data = array(
                        'title'  => 'Edit Data Guru',
                        'title1' => 'SMK MUH 6 Kra',
                        'error'  => $this->upload->display_errors(),
                        'mapel'  => $this->m_mapel->lists(),
                        'isi'    => 'admin/guru/v_edit'
                    );
                    $this->load->view('admin/layout/v_wrapper',$data,FALSE);
            }
            else
            {
                $upload_data                = array('uploads' => $this->upload->data());
                $config['image_library']    = 'gd2';
                $config['source_image']     = './foto_guru/'.$upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);
                //menghapus fotolama
                $guru=$this->m_guru->detail($id_guru);
                if ($guru->foto_guru !="") {
                    unlink('./foto_guru/'.$guru->foto_guru);
                }
                //end menghapus fotolama
                $data = array(
                    'id_guru'       => $id_guru,
                    'nip'           => $this->input->post('nip'),
                    'nama_guru'     => $this->input->post('nama_guru'),
                    'tempat_lahir'  => $this->input->post('tempat_lahir'),
                    'tgl_lahir'     => $this->input->post('tgl_lahir'),
                    'id_mapel'      => $this->input->post('id_mapel'),
                    'pendidikan'    => $this->input->post('pendidikan'),
                    'foto_guru'     => $upload_data['uploads']['file_name']
                );

                $this->m_guru->edit($data);
                $this->session->set_flashdata('pesan', 'Data Berhasil Diedit');
                redirect('guru');
            }
                $upload_data                = array('uploads' => $this->upload->data());
                $config['image_library']    = 'gd2';
                $config['source_image']     = './foto_guru/'.$upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);

                $data = array(
                    'id_guru'       => $id_guru,
                    'nip'           => $this->input->post('nip'),
                    'nama_guru'     => $this->input->post('nama_guru'),
                    'tempat_lahir'  => $this->input->post('tempat_lahir'),
                    'tgl_lahir'     => $this->input->post('tgl_lahir'),
                    'id_mapel'      => $this->input->post('id_mapel'),
                    'pendidikan'    => $this->input->post('pendidikan'),
                );

                $this->m_guru->edit($data);
                $this->session->set_flashdata('pesan', 'Data Berhasil Diedit');
                redirect('guru');
        }

        $data = array(
            'title'  => 'Edit Data Guru', 
            'title1' => 'SMK MUH 6 Kra',
            'mapel'  => $this->m_mapel->lists(),
            'guru'   => $this->m_guru->detail($id_guru),
            'isi'    => 'admin/guru/v_edit'
        );
        $this->load->view('admin/layout/v_wrapper',$data,FALSE);
    }

    public function delete($id_guru)
    {
        $guru=$this->m_guru->detail($id_guru);
        if ($guru->foto_guru !="") {
            unlink('./foto_guru/'.$guru->foto_guru);
        }
        
        $data = array(
            'id_guru' => $id_guru,
        );
        $this->m_guru->delete($data);
        $this->session->set_flashdata('pesan', 'Data Guru Berhasil Dihapus !!');
        redirect('guru'); 
    }

}

/* End of file Guru.php */
