<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_setting');
        
    }
    

    public function index()
    {
        $data = array(
            'title'  => 'Dashboard',
            'title1' => 'SMK MUH 6 Kra',
            'isi'    => 'admin/v_home'
        );
        $this->load->view('admin/layout/v_wrapper',$data,FALSE);
    }

    public function setting()
    {
        $this->form_validation->set_rules('npsn_sekolah', 'NPSN Sekolah', 'required');
        $this->form_validation->set_rules('nama_sekolah', 'Nama Sekolah', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('no_telepon', 'No Telepon', 'required');
        $this->form_validation->set_rules('email_sekolah', 'Email Sekolah', 'required');
        $this->form_validation->set_rules('kepala_sekolah', 'Kepala Sekolah', 'required');
        $this->form_validation->set_rules('nip', 'NIP', 'required');
        $this->form_validation->set_rules('visi', 'Visi', 'required');
        $this->form_validation->set_rules('misi', 'Misi', 'required');
        //$this->form_validation->set_rules('foto_guru', 'Foto Guru', 'required');

        
        if ($this->form_validation->run() == TRUE) {
            $config['upload_path'] = './setting/foto_kepsek/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 20000;
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('foto_kepsek'))
            {

                $data = array(
                    'title'  => 'Setting Web',
                    'title1' => 'SMK MUH 6 Kra',
                    'setting' => $this->m_setting->detail(),
                    'isi'    => 'admin/v_setting'
                );
                $this->load->view('admin/layout/v_wrapper',$data,FALSE);
            }
            else
            {
                $upload_data                = array('uploads' => $this->upload->data());
                $config['image_library']    = 'gd2';
                $config['source_image']     = './setting/foto_kepsek/'.$upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);
                //menghapus fotolama
                $setting = $this->m_setting->detail();
                if ($setting->foto_kepsek !="") {
                    unlink('./setting/foto_kepsek/'.$setting->foto_kepsek);
                }
                //end menghapus fotolama
                $data = array(
                    'id'       => '1',
                    'npsn_sekolah'  => $this->input->post('npsn_sekolah'),
                    'nama_sekolah'  => $this->input->post('nama_sekolah'),
                    'alamat'        => $this->input->post('alamat'),
                    'no_telepon'    => $this->input->post('no_telepon'),
                    'email_sekolah' => $this->input->post('email_sekolah'),
                    'kepala_sekolah'=> $this->input->post('kepala_sekolah'),
                    'nip'           => $this->input->post('nip'),
                    'visi'          => $this->input->post('visi'),
                    'misi'          => $this->input->post('misi'),
                    'foto_kepsek'   => $upload_data['uploads']['file_name']
                );

                $this->m_setting->save_setting($data);
                $this->session->set_flashdata('pesan', 'Setingan Web Telah dirubah');
                redirect('admin/setting');
            }
                $data = array(
                    'id'       => '1',
                    'npsn_sekolah'  => $this->input->post('npsn_sekolah'),
                    'nama_sekolah'  => $this->input->post('nama_sekolah'),
                    'alamat'        => $this->input->post('alamat'),
                    'no_telepon'    => $this->input->post('no_telepon'),
                    'email_sekolah' => $this->input->post('email_sekolah'),
                    'kepala_sekolah'=> $this->input->post('kepala_sekolah'),
                    'nip'           => $this->input->post('nip'),
                    'visi'          => $this->input->post('visi'),
                    'misi'          => $this->input->post('misi'),
                );

                $this->m_setting->save_setting($data);
                $this->session->set_flashdata('pesan', 'Setingan Web Telah dirubah');
                redirect('admin/setting');
        }

        $data = array(
            'title'  => 'Setting Web',
            'title1' => 'SMK MUH 6 Kra',
            'setting' => $this->m_setting->detail(),
            'isi'    => 'admin/v_setting'
        );
        $this->load->view('admin/layout/v_wrapper',$data,FALSE);
    }

}

/* End of file Admin.php */
