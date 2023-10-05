<?php

class M_pegawai extends CI_Model
{
    private $table= "pegawai";

    public function getData($id = null)
    {
        $this->db->from('pegawai');
        if($id != null){
            $this->db->where('NIP', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function addPegawai()
    {
        $data = [
                    "NIP" => $this->input->post('NIP', true),
                    "NIK" => $this->input->post('NIK', true),
                    "NPWP" => $this->input->post('NPWP', true),
                    "NAMA_PGW" => $this->input->post('nama', true),
                    "JENIS_KELAMIN_PGW" => $this->input->post('jenis_kelamin', true),
                    "TEMPAT_LAHIR_PGW" => $this->input->post('tempat_lahir', true),
                    "TANGGAL_LAHIR_PGW" => $this->input->post('tanggal_lahir', true),
                    "ALAMAT_PGW" => $this->input->post('alamat', true),
                    "NO_TELEPONE" => $this->input->post('no_telepone', true),
            ];
        $this->db->insert('pegawai', $data);
    }

    public function getDatabyId($id)
    {
        // $this->db->select('*');
        // $this->db->from('pegawai');
        // $this->db->where('id_pegawai', $id);
   
       return $this->db->get_where($this->table, ["NIP" => $id])->row();
        
        // return $query;

    }

    public function ubah(){
        $data = [
            "NIP" => $this->input->post('NIP', true),
            "NIK" => $this->input->post('NIK', true),
            "NPWP" => $this->input->post('NPWP', true),
            "NAMA_PGW" => $this->input->post('nama', true),
            "JENIS_KELAMIN_PGW" => $this->input->post('jenis_kelamin', true),
            "TEMPAT_LAHIR_PGW" => $this->input->post('tempat_lahir', true),
            "TANGGAL_LAHIR_PGW" => $this->input->post('tanggal_lahir', true),
            "ALAMAT_PGW" => $this->input->post('alamat', true),
            "NO_TELEPONE" => $this->input->post('no_telepone', true),
            ];
        $this->db->where('NIP', $this->input->post('NIP'));
        $this->db->update('pegawai', $data);
    }


    public function hapus($id)
    {
        $this->db->where('NIP', $id);
        $this->db->delete('pegawai');
    }

}