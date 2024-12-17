<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Konfigurasi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('level') == NULL) {
            redirect('auth');
        }
    }
    public function index()
    {
        $this->db->from('konfigurasi');
        $konfig = $this->db->get()->row();
        $data = array(
            'judul_halaman' => 'Halaman konfigurasi',
            'konfig' => $konfig
        );
        $this->template->load('Template_Admin', 'admin/konfigurasi', $data);
    }
    public function update()
    {
        $where = array(
            'id_konfigurasi' => 1

        );
        $data = array(
            'judul_website'    => $this->input->post('judul'),
            'profil_website'    => $this->input->post('profil_website'),
            'instagram'    => $this->input->post('instagram'),
            'email'    => $this->input->post('email'),
            'facebook'    => $this->input->post('facebook'),
            'alamat'    => $this->input->post('alamat'),
            'no_wa'    => $this->input->post('no_wa')
        );
        $this->db->update('konfigurasi', $data, $where);
        $this->session->set_flashdata('alert', '<div class="alert alert-warning alert-dismissible" role="alert">
	    konfigurasi sudah Diupdate
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>');

        redirect('admin/konfigurasi');
    }
}
