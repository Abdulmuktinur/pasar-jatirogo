<?php

class M_pedagang extends CI_Model
{
    public function getData()
    {
        return $this->db->get('pedagang')->result_array();
    }

    public function getPedagangById($id)
    {
        return $this->db->get_where('pedagang', ['NOIP' => $id])->row_array();
    }

    public function getAllPedagang(){
        $query = $this->db->get('pedagang');
        return $query;
    }

    public function addDataPedagang()
    {
    
        $data = [
            "NOIP" => $this->input->post('noip', true),
            "NAMA_PDG" => $this->input->post('nama', true),
            "JENIS_KELAMIN_PDG" => $this->input->post('jenis_kelamin', true),
            "TEMPAT_LAHIR_PDG" => $this->input->post('tempat_lahir', true),
            "TANGGAL_LAHIR_PDG" => $this->input->post('tanggal_lahir', true),
            "ALAMAT_PDG" => $this->input->post('alamat', true),
            
        ];
        $this->db->insert('pedagang', $data);
    }


    public function ubahDataPedagang()
    {
    
        $data = [
            "NOIP" => $this->input->post('noip', true),
            "NAMA_PDG" => $this->input->post('nama', true),
            "JENIS_KELAMIN_PDG" => $this->input->post('jenis_kelamin', true),
            "TEMPAT_LAHIR_PDG" => $this->input->post('tempat_lahir', true),
            "TANGGAL_LAHIR_PDG" => $this->input->post('tanggal_lahir', true),
            "ALAMAT_PDG" => $this->input->post('alamat', true),
        ];

        $this->db->where('NOIP', $this->input->post('NOIP'));
        $this->db->update('pedagang', $data);
    }

    public function hapusDataPedagang($id)
    {
        // $this->db->where('id_pegawai', $id);
        $this->db->delete('pedagang', ['NOIP' => $id]);
    }

    public function details($id){
        $this->db->select('pedagang.*, stan_pasar.*, category.*');
        $this->db->from('pedagang');
        $this->db->join('stan_pasar', 'pedagang.NOIP = stan_pasar.NOIP');
        $this->db->join('category', 'category.ID_CATEGORY = stan_pasar.ID_CATEGORY');
        $this->db->where('pedagang.NOIP', $id);
        
        return $this->db->get()->result_array();
    }
}