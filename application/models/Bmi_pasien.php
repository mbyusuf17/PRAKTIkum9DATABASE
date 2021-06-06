<?php
class Bmi_pasien extends CI_Model{
    public $id,$tanggal,$berat,$tinggi,$bmi,$status_bmi,$catatan,$pasien_id;

    public function getAll(){
        $query = $this->db->get('bmi_pasien');
        return $query->result();
    }

    public function getById($id){
        $query = $this->db->get_where('bmi_pasien', ['id' => $id]);
        return $query->row();
    }
}

?>