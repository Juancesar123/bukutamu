<?php
class Bukutamu extends CI_Model{
	public function insert($val){
		$this->db->insert("bukutamu",$val);
	}
	public function select(){
		$sql="SELECT * From bukutamu";
		return $this->db->query($sql)->result();
	}
	public function hapus($id){
		$this->db->where("id",$id);
		$this->db->delete("bukutamu");
	}
	public function edit_form($id){
		$sql = "SELECT * from bukutamu where id =".$this->db->escape($id);
		return $this->db->query($sql)->result();
	}
	public function aksi_edit($id,$val){
		$this->db->where("id",$id);
		$this->db->update("bukutamu",$val);
		
	}
}
?>