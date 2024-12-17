<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Carousel extends CI_Controller
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
        $this->db->from('caraousel');
        $carousel = $this->db->get()->result_array();
        $data = array(
            'judul_halaman' => 'Halaman caraousel',
            'caraousel'        => $carousel,
        );
        $this->template->load('Template_admin', 'admin/caraousel_index', $data);
    }
    public function simpan()
    {
        $namafoto = date('YmdHis') . '.jpg';
        $config['upload_path']      = './assets/upload/carousel/';
        $config['max_size']      = 500 * 1024;
        $config['allowed_types'] = '*';
        $config['file_name']      = $namafoto;
        $this->load->library('upload', $config);
        if ($_FILES['foto']['size'] >= 500 * 2048) {
            $this->session->set_flashdata('alert', '<div class="alert alert-warning alert-dismissible" role="alert">
            Ukuran file tidak sesuai!!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
            redirect('admin/carousel');
        } elseif (! $this->upload->do_upload('foto')) {
            $error = array(
                'error' => $this->upload->display_errors()
            );
        } else {
            $data = array(
                'upload_data' => $this->upload->data()
            );
        }
        $this->db->from('caraousel');
        $this->db->where('judul', $this->input->post('judul'));
        $cek =  $this->db->get()->result_array();
        if ($cek != NULL) {
            $this->session->set_flashdata('alert', '<div class="alert alert-warning alert-dismissible" role="alert">
		judul sudah digunakan!!
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>');

            redirect('admin/carousel');
        }
        $data = array(
            'judul' =>  $this->input->post('judul'),
            'foto'      => $namafoto,
        );

        $this->db->insert('caraousel', $data);
        $this->session->set_flashdata('alert', '<div class="alert alert-warning alert-dismissible" role="alert">
		berhasil disimpan!!
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>');

        redirect('admin/carousel');
    }
    public function delete_data($id)
    {
        $filename = FCPATH . '  ./assets/upload/carousel/' . $id;
        if (file_exists($filename)) {
            unlink($filename);
        }
        $where = array(
            'foto' => $id
        );

        $this->db->delete('caraousel', $where);
        $this->session->set_flashdata('alert', '<div class="alert alert-warning alert-dismissible" role="alert">
		berhasil menghapus carousel!!
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>');

        redirect('admin/carousel');
    }
}
