<?php

class M_komoditas extends CI_Model
{
    private $table= "komoditas";

    public function getData()
    {

        $this->db->select('komoditas.*, category.ID_CATEGORY, category.CATEGORY');
        $this->db->join('category', 'komoditas.ID_CATEGORY = category.ID_CATEGORY');

        return $this->db->get('komoditas')->result_array();
    }

    public function getDataById($id)
    {
        return $this->db->get_where($this->table, ["KD_KOMODITAS" => $id])->row();
    }

    public function addKomoditas()
    {
        $data = [
            "KD_KOMODITAS" => $this->input->post('id_komoditas', true),
            "NAMA_KOMODITAS" => $this->input->post('nama_komoditas', true),
            "ID_CATEGORY" => $this->input->post('ID_CATEGORY', true),
            "SATUAN" => $this->input->post('satuan', true),
        ];

        $this->db->insert('komoditas', $data);
    
    }

    public function ubah(){
        $data = [
            "KD_KOMODITAS" => $this->input->post('id_komoditas', true),
            "NAMA_KOMODITAS" => $this->input->post('nama_komoditas', true),
            "ID_CATEGORY" => $this->input->post('ID_CATEGORY', true),
            "SATUAN" => $this->input->post('satuan', true),
        ];

        $this->db->where('KD_KOMODITAS', $this->input->post('id_komoditas'));
        $this->db->update('komoditas', $data);
    }

    public function hapus($id){
        $this->db->where('KD_KOMODITAS', $id);
        $this->db->delete('komoditas');
    }

    public function getAllCategory(){
        $query = $this->db->get('category');
        return $query;
    }
}