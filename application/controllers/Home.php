<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct(){
        parent::__construct();

    }
	public function index(){
        $this->db->from('konfigurasi');
        $konfig = $this->db->get()->row();
  
        $this->db->from('caraousel');
        $caraousel = $this->db->get()->result_array();
        $this->db->from('kategori');
        $kategori = $this->db->get()->result_array();
        $this->db->from('konten a');
        $this->db->join('kategori b','a.id_kategori=b.id_kategori','left');
        $this->db->join('user c','a.username=c.username','left');
		$this->db->order_by('tanggal','DESC');
        $konten = $this->db->get()->result_array();
        $data = array(
            'judul'      => 'Beranda | Andri',
            'konfig'     => $konfig,
            'kategori'   => $kategori,
            'caraousel'  => $caraousel,
            'konten'     => $konten,
        );
		$this->load->view('beranda', $data);
	}
    public function kategori($id){
        $this->db->from('konfigurasi');
        $konfig = $this->db->get()->row();
  
        $this->db->from('caraousel');
        $caraousel = $this->db->get()->result_array();

        $this->db->from('kategori');
        $kategori = $this->db->get()->result_array();

        $this->db->from('konten a');
        $this->db->join('kategori b','a.id_kategori=b.id_kategori','left');
        $this->db->join('user c','a.username=c.username','left');
		$this->db->where('a.id_kategori',$id);
        $konten = $this->db->get()->result_array();

        $this->db->from('kategori');
        $this->db->where('id_kategori',$id);
        $nama_kategori = $this->db->get()->row()->nama_kategori;
        $data = array(
            'judul'      => $nama_kategori.' | Andri',
            'nama_kategori' => $nama_kategori,
            'konfig'     => $konfig,
            'kategori'   => $kategori,
            'konten'     => $konten,
        );
		$this->load->view('kategori', $data);
	}
    public function artikel($id){
        $this->db->from('konfigurasi');
        $konfig = $this->db->get()->row();
        $this->db->from('kategori');
        $kategori = $this->db->get()->result_array();
        $this->db->from('konten a');
        $this->db->join('kategori b','a.id_kategori=b.id_kategori','left');
        $this->db->join('user c','a.username=c.username','left');
        $this->db->where('slug',$id);
        $konten = $this->db->get()->row();
        $data = array(
            'judul'         => $konten->judul." | Andri",          
            'konfig'        => $konfig,
            'kategori'      => $kategori,
            'konten'        => $konten,
        );
		$this->load->view('detail', $data);
    }
    public function blog(){
        $halaman_aktif = $this->input->get('halaman') ? $this->input->get('halaman') : 1;
        $jumlah_per_halaman = 4; // Jumlah item per halaman
        $batas_bawah = ($halaman_aktif - 1) * $jumlah_per_halaman;
        $batas_atas = $batas_bawah + $jumlah_per_halaman;
        $this->load->model('Konten_model');
        $konten_tampil = $this->Konten_model->getKonten($batas_bawah, $jumlah_per_halaman);
        $jumlah_total_item = $this->Konten_model->getTotalKonten(); // Misalnya, mengambil total konten dari database
        $jumlah_halaman = ceil($jumlah_total_item / $jumlah_per_halaman);
        $this->load->view('beranda', [
            'konten_tampil' => $konten_tampil,
            'jumlah_halaman' => $jumlah_halaman,
            'halaman_aktif' => $halaman_aktif,
        ]);
                                
    }
    
}
