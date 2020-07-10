<?php

class Home extends CI_Controller
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
		$data['tb_event'] = $this->m_data->tampil_data()->result();
		$this->load->view('v_home', $data);
	}

	function tambah()
	{
		$this->load->view('v_input');
	}

	function tambah_aksi()
	{
		$event = $this->input->post('event');
		$alamat = $this->input->post('alamat');
		$deskripsi = $this->input->post('deskripsi');

		$data = array(
			'event' => $event,
			'alamat' => $alamat,
			'deskripsi' => $deskripsi,
		);
		$this->m_data->input_data($data, 'tb_event');
		redirect('home/index');
	}

	function hapus($id)
	{
		$where = array('id' => $id);
		$this->m_data->hapus_data($where, 'tb_event');
		redirect('home/index');
	}

	function edit($id)
	{
		$where = array('id' => $id);
		$data['tb_event'] = $this->m_data->edit_data($where, 'tb_event')->result();
		$this->load->view('v_edit', $data);
	}

	function update()
	{
		$id = $this->input->post('id');
		$event = $this->input->post('event');
		$alamat = $this->input->post('alamat');
		$deskripsi = $this->input->post('deskripsi');

		$data = array(
			'event' => $event,
			'alamat' => $alamat,
			'deskripsi' => $deskripsi,
		);

		$where = array(
			'id' => $id
		);

		$this->m_data->update_data($where, $data, 'tb_event');
		redirect('home/index');
	}
}
