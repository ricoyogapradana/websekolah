<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_gallery');
        
    }
    

    public function index()
    {
        $data = array(
            'title'  => 'Gallery Foto',
            'title1' => 'SMK MUH 6 Kra',
            'gallery'   => $this->m_gallery->lists(),
            'isi'    => 'admin/gallery/v_list'
        );
        $this->load->view('admin/layout/v_wrapper',$data,FALSE);
    }

    public function add()
    {
        $this->form_validation->set_rules('nama_gallery', 'Nama Gallery', 'required');
        //$this->form_validation->set_rules('foto_guru', 'Foto Guru', 'required');

        
        if ($this->form_validation->run() == TRUE) {
            $config['upload_path'] = './sampul/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 20000;
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('sampul'))
            {

                    $data = array(
                        'title'  => 'Tambah Galley',
                        'title1' => 'SMK MUH 6 Kra',
                        'error'  => $this->upload->display_errors(),
                        'isi'    => 'admin/gallery/v_add'
                    );
                    $this->load->view('admin/layout/v_wrapper',$data,FALSE);
            }
            else
            {
                $upload_data                = array('uploads' => $this->upload->data());
                $config['image_library']    = 'gd2';
                $config['source_image']     = './sampul/'.$upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);

                $data = array(
                    'nama_gallery'    => $this->input->post('nama_gallery'),
                    'sampul'     => $upload_data['uploads']['file_name']
                );

                $this->m_gallery->add($data);
                $this->session->set_flashdata('pesan', 'Data berhasil di simpan');
                
                redirect('gallery');

            }
        }

        $data = array(
            'title'  => 'Tambah Gallery',
            'title1' => 'SMK MUH 6 Kra',
            'isi'    => 'admin/gallery/v_add'
        );
        $this->load->view('admin/layout/v_wrapper',$data,FALSE);
    }

    public function edit($id_gallery)
    {
        $this->form_validation->set_rules('nama_gallery', 'Nama Gallery', 'required');
        //$this->form_validation->set_rules('foto_guru', 'Foto Guru', 'required');

        
        if ($this->form_validation->run() == TRUE) {
            $config['upload_path'] = './sampul/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 20000;
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('sampul'))
            {

                    $data = array(
                        'title'  => 'Edit Galley',
                        'title1' => 'SMK MUH 6 Kra',
                        'error'  => $this->upload->display_errors(),
                        'gallery' => $this->m_gallery->detail($id_gallery),
                        'isi'    => 'admin/gallery/v_edit'
                    );
                    $this->load->view('admin/layout/v_wrapper',$data,FALSE);
            }
            else
            {
                //menghapus fotolama
                $gallery=$this->m_gallery->detail($id_gallery);
                if ($gallery->sampul !="") {
                    unlink('./sampul/'.$gallery->sampul);
                }
                //end menghapus fotolama
                $upload_data                = array('uploads' => $this->upload->data());
                $config['image_library']    = 'gd2';
                $config['source_image']     = './sampul/'.$upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);

                $data = array(
                    'id_gallery' => $id_gallery,
                    'nama_gallery'    => $this->input->post('nama_gallery'),
                    'sampul'     => $upload_data['uploads']['file_name']
                );

                $this->m_gallery->edit($data);
                $this->session->set_flashdata('pesan', 'Data berhasil di edit');
                
                redirect('gallery');

            }

            $data = array(
                'id_gallery' => $id_gallery,
                'nama_gallery'    => $this->input->post('nama_gallery'),
            );

            $this->m_gallery->edit($data);
            $this->session->set_flashdata('pesan', 'Data berhasil di edit');
            
            redirect('gallery');
        }

        $data = array(
            'title'  => 'Edit Gallery',
            'title1' => 'SMK MUH 6 Kra',
            'gallery' => $this->m_gallery->detail($id_gallery),
            'isi'    => 'admin/gallery/v_edit'
        );
        $this->load->view('admin/layout/v_wrapper',$data,FALSE);
    }

    public function delete($id_gallery)
    {
        $gallery=$this->m_gallery->detail($id_gallery);
        if ($gallery->sampul !="") {
            unlink('./sampul/'.$gallery->sampul);
        }
        
        $data = array(
            'id_gallery' => $id_gallery,
        );
        $this->m_gallery->delete($data);
        $this->session->set_flashdata('pesan', 'Data Gallery Berhasil Dihapus !!');
        redirect('gallery'); 
    }

    public function add_foto($id_gallery)
    {
        $this->form_validation->set_rules('ket_foto', 'Nama Gallery', 'required');
        //$this->form_validation->set_rules('foto_guru', 'Foto Guru', 'required');

        
        if ($this->form_validation->run() == TRUE) {
            $config['upload_path'] = './foto/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 20000;
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('foto'))
            {
                    $gallery = $this->m_gallery->detail($id_gallery);
                    $data = array(
                        'title'  => 'Tambah Foto Gallery : ' .$gallery->nama_gallery,
                        'title1' => 'SMK MUH 6 Kra',
                        'error'  => $this->upload->display_errors(),
                        'gallery' => $gallery,
                        'foto' => $this->m_gallery->lists_foto($id_gallery),
                        'isi'    => 'admin/gallery/v_add_foto'
                    );
                    $this->load->view('admin/layout/v_wrapper',$data,FALSE);
            }
            else
            {
                $upload_data                = array('uploads' => $this->upload->data());
                $config['image_library']    = 'gd2';
                $config['source_image']     = './foto/'.$upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);

                $data = array(
                    'id_gallery' => $id_gallery,
                    'ket_foto'    => $this->input->post('ket_foto'),
                    'foto'     => $upload_data['uploads']['file_name']
                );

                $this->m_gallery->add_foto($data);
                $this->session->set_flashdata('pesan', 'Foto berhasil di tambah');
                
                redirect('gallery/add_foto/'.$id_gallery);

            }
        }
        $gallery = $this->m_gallery->detail($id_gallery);
        $data = array(
            'title'  => 'Tambah Foto Gallery : '.$gallery->nama_gallery,
            'title1' => 'SMK MUH 6 Kra',
            'gallery' => $gallery,
            'foto' => $this->m_gallery->lists_foto($id_gallery),
            'isi'    => 'admin/gallery/v_add_foto'
        );
        $this->load->view('admin/layout/v_wrapper',$data,FALSE);
    }

    public function delete_foto($id_gallery,$id_foto)
    {
        $foto=$this->m_gallery->detail_foto($id_foto);
        if ($foto->foto !="") {
            unlink('./foto/'.$foto->foto);
        }
        
        $data = array(
            'id_foto' => $id_foto,
        );
        $this->m_gallery->delete_foto($data);
        $this->session->set_flashdata('pesan', 'Foto Berhasil Dihapus !!');
        redirect('gallery/add_foto/'.$id_gallery); 
    }

}

/* End of file Gallery.php */
