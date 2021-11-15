<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_home');
        
    }
    

    public function index()
    {
        $data = array(
            'title' => 'Web Sekolah',
            'title1' => 'SMK MUH 6 Kra',
            'sekolah' => $this->m_setting->detail(),
            'berita' => $this->m_home->slider_berita(),
            'isi'   => 'v_home'
        );
        $this->load->view('layout/v_wrapperhome',$data,FALSE);
    }

    public function download()
    {
        $data = array(
            'title' => 'Download',
            'title1' => 'SMK MUH 6 Kra',
            'download' => $this->m_home->download(),
            'sekolah' => $this->m_setting->detail(),
            'isi'   => 'v_download'
        );
        $this->load->view('layout/v_wrapper',$data,FALSE);
    }

    public function guru()
    {
        $data = array(
            'title' => 'Guru',
            'title1' => 'SMK MUH 6 Kra',
            'guru' => $this->m_home->guru(),
            'sekolah' => $this->m_setting->detail(),
            'isi'   => 'v_guru'
        );
        $this->load->view('layout/v_wrapper',$data,FALSE);
    }

    public function berita()
    {
        $this->load->library('pagination');
        $config['base_url'] = base_url('home/berita');
        $config['total_rows'] = count($this->m_home->total_berita());
        $config['per_page'] = 8;
        $config['uri_segmen'] = 3;
        //start limit
            $limit= $config['per_page'];
            $start= ($this->uri->segment(3)) ? ($this->uri->segment(3)) : 0;
        //end limit
        $config['first_link']   = 'First';
        $config['last_link']   = 'Last';
        $config['next_link']   = 'Next';
        $config['prev_link']   = 'Prev';
        $config['full_tag_open']   = '<div class="pagination_container d-flex flex-row align-items-center justify-content-start text-center"><ul class="pagination_list">';
        $config['num_tag_open']   = '<li>';
        $config['num_tag_close']   = '</li>';
        $config['cur_tag_open']   = '<li class="active"><a>';
        $config['cur_tag_close']   = '</a></li>';
        $config['next_tag_open']   = '<li>';
        $config['next_tag_close']   = '</li>';
        $config['prev_tag_open']   = '<li>';
        $config['prev_tag_close']   = '</li>';
        $config['first_tag_open']   = '<li>';
        $config['first_tag_close']   = '</li>';
        $config['last_tag_open']   = '<li>';
        $config['last_tag_close']   = '</li>';
        $config['full_tag_close']   = '</ul></div>';
        //---------
        $this->pagination->initialize($config);

        $data = array(
            'paginasi' => $this->pagination->create_links(),
            'latest_berita' => $this->m_home->latest_berita(),
            'berita' => $this->m_home->berita($limit,$start),
            'sekolah' => $this->m_setting->detail(),
            'title' => 'Berita',
            'title1' => 'SMK MUH 6 Kra',
            'isi'   => 'v_berita'
        );
        $this->load->view('layout/v_wrapper',$data,FALSE);
    }

    public function detail_berita($slug_berita)
    {
        $data = array(
            'title' => 'Detail Berita',
            'title1' => 'SMK MUH 6 Kra',
            'latest_berita' => $this->m_home->latest_berita(),
            'berita' => $this->m_home->detail_berita($slug_berita),
            'sekolah' => $this->m_setting->detail(),
            'isi'   => 'v_detail_berita'
        );
        $this->load->view('layout/v_wrapper',$data,FALSE);
    }

    public function gallery()
    {
        $data = array(
            'title' => 'Galeri Foto',
            'title1' => 'SMK MUH 6 Kra',
            'gallery' => $this->m_home->gallery(),
            'sekolah' => $this->m_setting->detail(),
            'isi'   => 'v_gallery'
        );
        $this->load->view('layout/v_wrapper',$data,FALSE);
    }

    public function detail_gallery($id_gallery)
    {
        $data = array(
            'title' => 'Detail Galeri Foto',
            'title1' => 'SMK MUH 6 Kra',
            'nama_gallery' => $this->m_home->nama_gallery($id_gallery),
            'gallery' => $this->m_home->detail_gallery($id_gallery),
            'sekolah' => $this->m_setting->detail(),
            'isi'   => 'v_detail_gallery'
        );
        $this->load->view('layout/v_wrapper',$data,FALSE);
    }

    public function siswa()
    {
        $data = array(
            'title' => 'Siswa',
            'title1' => 'SMK MUH 6 Kra',
            'siswa' => $this->m_home->siswa(),
            'sekolah' => $this->m_setting->detail(),
            'isi'   => 'v_siswa'
        );
        $this->load->view('layout/v_wrapper',$data,FALSE);
    }

    public function detail_siswa($id_siswa)
    {
        $data = array(
            'title' => 'Data Siswa',
            'title1' => 'SMK MUH 6 Kra',
            'siswa' => $this->m_home->detail_siswa($id_siswa),
            'nama_siswa' => $this->m_home->nama_siswa($id_siswa),
            'sekolah' => $this->m_setting->detail(),
            'isi'   => 'v_detail_siswa'
        );
        $this->load->view('layout/v_wrapper',$data,FALSE);
    }

    public function about()
    {
        $data = array(
            'title' => 'Tentang',
            'title1' => 'SMK MUH 6 Kra',
            'sekolah' => $this->m_setting->detail(),
            'isi'   => 'v_about'
        );
        $this->load->view('layout/v_wrapper',$data,FALSE);
    }
}

/* End of file Home.php */
