<?php
Class Latihan extends CI_Controller{
	function __construct(){
		parent:: __construct();
		$this->load->model("bukutamu");
	}
	public function index(){
		$data["raw_data"] = $this->bukutamu->select();
		$this->load->view("bukutamu",$data);
	}
	public function insert(){
	$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
	$this->form_validation->set_rules('nama', 'nama ', 'trim|required');
	$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
	$this->form_validation->set_rules('tlp', 'nomor telpon', 'trim|required|numeric');
	if($this->form_validation->run()==true){
	$val = array(
	"nama"=>$this->input->post("nama"),
	"alamat"=>$this->input->post("alamat"),
	"no_telpon"=>$this->input->post("tlp"),
	"jenis_kelamin"=>$this->input->post("jk"),
	);
	$this->bukutamu->insert($val);
	redirect("latihan");
	}else{
		$data["raw_data"] = $this->bukutamu->select();
		$this->load->view("bukutamu",$data);
	}
	}
	public function hapus($id){
		$this->bukutamu->hapus($id);
		redirect("latihan");
	}
	public function edit($id){
		$data["edit_form"] = $this->bukutamu->edit_form($id);
		$data["raw_data"] = $this->bukutamu->select();
		$this->load->view("bukutamu2",$data);
	}
	public function actionedit(){
    $val = array(
	"nama"=>$this->input->post("nama"),
	"alamat"=>$this->input->post("alamat"),
	"no_telpon"=>$this->input->post("tlp"),
	"jenis_kelamin"=>$this->input->post("jk"),
	);
	$id = $this->input->post("id");
    $this->bukutamu->aksi_edit($id,$val);
    redirect("latihan");	
	}
}
?>