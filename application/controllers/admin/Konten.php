<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konten extends CI_Controller {
    public function __construct(){
        parent::__construct();
        if($this->session->userdata('level')==NULL){
            redirect('auth');
        }

    }
	public function index(){
        $this->db->from('kategori');
		$this->db->order_by('nama_kategori','ASC');
        $kategori = $this->db->get()->result_array();

        $this->db->from('konten a');
        $this->db->join('kategori b','a.id_kategori=b.id_kategori','left');
        $this->db->join('user c','a.username=c.username','left');
		$this->db->order_by('tanggal','DESC');
        $konten = $this->db->get()->result_array();

		$data = array(
            'judul_halaman' => "Halaman Konten",
            'kategori'      => $kategori,
            'konten'        => $konten
        );
		$this->template->load('template_admin','admin/konten_index',$data);
	}
    public function simpan(){
        $namafoto = date('YmdHis').'.jpg';
        $config['upload_path']         = 'assets/upload/konten/';
        $config['max_size'] = 500 * 1024; //3 * 1024; //3Mb; 0=unlimited
        $config['allowed_types']       = '*'; 
        $config['file_name']           = $namafoto;
        $this->load->library('upload', $config);
        if($_FILES['foto']['size'] >= 500 * 1024){
            $this->session->set_flashdata('alert', '
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                   Ukuran foto terlalu besar, upload ulang dengan ukuran yang kurang dari 500 kb.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
             </div>
            ');
            redirect('admin/konten');
        } elseif( ! $this->upload->do_upload('foto')){
            $error = array('error' => $this->upload->display_errors());
        }else{
            $data = array('upload_data' => $this->upload->data());
        }

        $this->db->from('konten');
        $this->db->where('judul',$this->input->post('judul'));
        $cek = $this->db->get()->result_array();
        if($cek<>NULL){
            $this->session->set_flashdata('alert', '
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Judul Konten Sudah Ada.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
             </div>');
            redirect('admin/konten');
        }
        $data = array(
            'judul'     => $this->input->post('judul'),
            'id_kategori'     => $this->input->post('id_kategori'),
            'keterangan'     => $this->input->post('keterangan'),
            'tanggal'     => date('Y-m-d'),
            'foto'     => $namafoto,
            'username'     => $this->session->userdata('username'),
            'slug'     => str_replace(' ','-',$this->input->post('judul')),
            
        );
        $this->db->insert('konten',$data);
        $this->session->set_flashdata('alert', '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
               Berhasil menambahkan konten.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>');
        redirect('admin/konten');
    }
    public function update(){
        $namafoto = $this->input->post('nama_foto');
        $config['upload_path']         = 'assets/upload/konten/';
        $config['max_size'] = 500 * 1024; //3 * 1024; //3Mb; 0=unlimited
        $config['allowed_types']       = '*'; 
        $config['file_name']           = $namafoto;
        $config['overwrite']           = true;
        $this->load->library('upload', $config);
        if($_FILES['foto']['size'] >= 500 * 1024){
            $this->session->set_flashdata('alert', '
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Ukuran foto terlalu besar, upload ulang dengan ukuran yang kurang dari 500 kb.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
             </div>
            ');
            redirect('admin/konten');
        } elseif( ! $this->upload->do_upload('foto')){
            $error = array('error' => $this->upload->display_errors());
        }else{
            $data = array('upload_data' => $this->upload->data());
        }
        $data = array(
            'judul'     => $this->input->post('judul'),
            'id_kategori'     => $this->input->post('id_kategori'),
            'keterangan'     => $this->input->post('keterangan'),
            'slug'     => str_replace(' ','-',$this->input->post('judul')),
            
        );
        $where = array(
            'foto'       => $this->input->post('nama_foto')
        );
        $this->db->update('konten',$data,$where);
        $this->session->set_flashdata('alert', '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
               Berhasil memperbarui konten.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>');
        redirect('admin/konten');
    }
    public function delete_data($id){
        $filename=FCPATH.'/assets/upload/konten/'.$id;
            if(file_exists($filename)){
                unlink("./assets/upload/konten/".$id);
            }
        $where = array(
            'foto' => $id
        );
        $this->db->delete('konten',$where);
        $this->session->set_flashdata('alert','
        <div class="alert alert-success alert-dismissible fade show" role="alert">
                Berhasil Menghapus konten
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>
        '); 
        redirect('admin/konten');
    }
}
