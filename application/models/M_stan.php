<?php

class M_stan extends CI_Model
{
    private $table = "stan_pasar";

    public function getData()
    {
        // return $this->db->get('stan_pasar')->result_array();

        $this->db->select('stan_pasar.*, pedagang.NOIP, pedagang.NAMA_PDG, category.ID_CATEGORY, category.CATEGORY, biaya_sewa.KD_KONTRAK, biaya_sewa.BIAYA');
        $this->db->join('pedagang', 'stan_pasar.NOIP = pedagang.NOIP');
        $this->db->join('category', 'stan_pasar.ID_CATEGORY = category.ID_CATEGORY');
        $this->db->join('biaya_sewa', 'stan_pasar.KD_KONTRAK = biaya_sewa.KD_KONTRAK');

        return $this->db->get('stan_pasar')->result_array();
    }

    public function getAllStan(){
        $query = $this->db->get('stan_pasar');
        return $query;
    }

    public function getDataById($id)
    {
        return $this->db->get_where('stan_pasar', ['NOMOR_STAN' => $id])->row_array();
    }
    
    // public function getDataById($id){
    //     return $this->db->get_where($this->table, ["id_stan" => $id])->row();
    // }

    public function addStan()
    {
        $data = [
            "NOMOR_STAN" => $this->input->post('nomor_stan', true),
            "ID_CATEGORY" => $this->input->post('ID_CATEGORY', true),
            "KD_KONTRAK" => $this->input->post('KD_KONTRAK', true),
            "NOIP" => $this->input->post('NOIP', true),
            "LOKASI_STAN" => $this->input->post('lokasi_stan', true),
        ];

        $this->db->insert('stan_pasar', $data);
    
    }

    public function ubah(){
        $data = [
            "NOMOR_STAN" => $this->input->post('nomor_stan', true),
            "ID_CATEGORY" => $this->input->post('ID_CATEGORY', true),
            "KD_KONTRAK" => $this->input->post('KD_KONTRAK', true),
            "NOIP" => $this->input->post('NOIP', true),
            "LOKASI_STAN" => $this->input->post('lokasi_stan', true),
        ];

        $this->db->where('NOMOR_STAN', $this->input->post('NOMOR)STAN'));
        $this->db->update('stan_pasar', $data);
    }

    public function hapus($id)
    {
        $this->db->where('NOMOR_STAN', $id);
        $this->db->delete('stan_pasar');
    }

    public function getAllCategory(){
        $query = $this->db->get('category');
        return $query;
    }

    public function getAllBiaya(){
        $query = $this->db->get('biaya_sewa');
        return $query;
    }

}