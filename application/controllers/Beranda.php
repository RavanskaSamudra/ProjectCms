<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->db->from('konfigurasi');
        $konfig = $this->db->get()->row();
        $this->db->from('konten a');
        $this->db->join('kategori b', 'a.id_kategori=b.id_kategori', 'left');
        $this->db->join('user c', 'a.username=c.username', 'left');
        $this->db->order_by('tanggal', 'DESC');
        $konten = $this->db->get()->result_array();

        $this->db->from('caraousel');
        $caraousel = $this->db->get()->result_array();
        $this->db->from('kategori');
        $kategori = $this->db->get()->result_array();
        $data = array(
            'judul_halaman' => 'My Blog | Ravanska',
            'konfig'        => $konfig,
            'kategori'      => $kategori,
            'caraousel'     => $caraousel,
            'konten'        => $konten
        );
        $this->template->load('beranda', 'home', $data);
    }
    public function kategori($id)
    {
        $this->db->from('konfigurasi');
        $konfig = $this->db->get()->row();

        $this->db->from('kategori');
        $kategori = $this->db->get()->result_array();

        $this->db->from('konten a');
        $this->db->join('kategori b', 'a.id_kategori=b.id_kategori', 'left');
        $this->db->join('user c', 'a.username=c.username', 'left');
        $this->db->where('a.id_kategori', $id);
        $konten = $this->db->get()->result_array();

        $this->db->from('kategori');
        $this->db->where('id_kategori', $id);
        $nama_kategori = $this->db->get()->row()->nama_kategori;
        $data = array(
            'judul_halaman' => $nama_kategori . ' | Ravanska',
            'nama_kategori' => $nama_kategori,
            'konfig'        => $konfig,
            'kategori'      => $kategori,
            'konten'        => $konten
        );
        $this->template->load('kategori', 'home', $data);
    }
    public function artikel($id)
    {
        $this->db->from('konfigurasi');
        $konfig = $this->db->get()->row();
        $this->db->from('konten a');
        $this->db->join('kategori b', 'a.id_kategori=b.id_kategori', 'left');
        $this->db->join('user c', 'a.username=c.username', 'left');
        $this->db->where('slug', $id);
        $konten = $this->db->get()->row();
        $this->db->from('kategori');
        $kategori = $this->db->get()->result_array();
        $data = array(
            'judul'         => $konten->judul . ' | Ravanska',
            'konfig'        => $konfig,
            'kategori'      => $kategori,
            'konten'        => $konten
        );
        $this->template->load('detail', 'home', $data);
    }
}
