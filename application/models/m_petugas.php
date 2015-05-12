<?php
class M_petugas extends CI_Model{
    private $table="petugas";
    
    function cek($username,$password){
        $this->db->where("user",$username);
        $this->db->where("password",$password);
        return $this->db->get("petugas");
    }
    
    function semua(){
        return $this->db->get("petugas");
    }
    
    function cekKode($kode){
        $this->db->where("user",$kode);
        return $this->db->get("petugas");
    }
    
    function cekId($kode){
        $this->db->where("id_petugas",$kode);
        return $this->db->get("petugas");
    }
    
    
}