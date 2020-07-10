<?php

class wisata extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_data');
		// $this->load->helper('url');

		if ($this->session->userdata('login') == null) {
			redirect('login');
		}
	}

	function index()
	{
		$data['wisata'] = $this->m_data->tampil_data()->result();
		$this->load->view('v_wisata', $data);
	}

	function tambah()
	{
		$this->load->view('v_input');
	}

	function tambah_aksi()
	{
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$deskripsi = $this->input->post('deskripsi');

		$data = array(
			'nama' => $nama,
			'alamat' => $alamat,
			'deskripsi' => $deskripsi,
		);
		$this->m_data->input_data($data, 'wisata');
		redirect('wisata/index');
	}

	function hapus($id)
	{
		$where = array('id' => $id);
		$this->m_data->hapus_data($where, 'wisata');
		redirect('wisata/index');
	}

	function edit($id)
	{
		$where = array('id' => $id);
		$data['wisata'] = $this->m_data->edit_data($where, 'wisata')->result();
		$this->load->view('v_edit', $data);
	}

	function update()
	{
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$deskripsi = $this->input->post('deskripsi');

		$data = array(
			'nama' => $nama,
			'alamat' => $alamat,
			'deskripsi' => $deskripsi,
		);

		$where = array(
			'id' => $id
		);

		$this->m_data->update_data($where, $data, 'wisata');
		redirect('wisata/index');
	}
}
