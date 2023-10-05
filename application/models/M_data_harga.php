<?php

class M_data_harga extends CI_Model
{
    public function groupData(){

        $d1 = date('Y-m-d', strtotime("-4 days"));
        $d2 = date('Y-m-d', strtotime("-3 days"));
        $d3 = date('Y-m-d', strtotime("-2 days"));
        $d4 = date('Y-m-d', strtotime("-1 days"));
        $d5 = date('Y-m-d');

        $this->db->select("laporan_harian.*, komoditas.NAMA_KOMODITAS, komoditas.SATUAN, SUM(CASE WHEN laporan_harian.TANGGAL_LAPORAN='".$d1."' THEN laporan_harian.HARGA ELSE 0 END) as '".$d1."', SUM(CASE WHEN laporan_harian.TANGGAL_LAPORAN='".$d2."' THEN laporan_harian.HARGA ELSE 0 END) as '".$d2."', SUM(CASE WHEN laporan_harian.TANGGAL_LAPORAN='".$d3."' THEN laporan_harian.HARGA ELSE 0 END) as '".$d3."', SUM(CASE WHEN laporan_harian.TANGGAL_LAPORAN='".$d4."' THEN laporan_harian.HARGA ELSE 0 END) as '".$d4."', SUM(CASE WHEN laporan_harian.TANGGAL_LAPORAN='".$d5."' THEN laporan_harian.HARGA ELSE 0 END) as '".$d5."'");
        $this->db->from('laporan_harian');
        $this->db->group_by('KD_KOMODITAS');
        $this->db->join('komoditas', 'laporan_harian.KD_KOMODITAS = komoditas.KD_KOMODITAS');
        

        // $this->db->select("laporan_harian.id_komoditas FROM laporan_harian", FALSE);
       
        return $this->db->get()->result_array();
    }

    public function getDatanew()
    {
        // $this->db->select("komoditas.NAMA_KOMODITAS, komoditas.SATUAN, GROUP_CONCAT(laporan_harian.HARGA)) as HARGA");
        // $this->db->from("laporan_harian");
        // $this->db->join("komoditas", "laporan_harian.KD_KOMODITAS = komoditas.KD_KOMODITAS");
        // $this->db->where("laporan_harian.TANGGAL_LAPORAN", $id);
        // $this->db->group_by("KD_KOMODITAS");

        $d1 = date('Y-m-d', strtotime("-4 days"));
        $d2 = date('Y-m-d', strtotime("-3 days"));
        $d3 = date('Y-m-d', strtotime("-2 days"));
        $d4 = date('Y-m-d', strtotime("-1 days"));
        $d5 = date('Y-m-d');

        $query = $this->db->query("select b.NAMA_KOMODITAS, b.SATUAN, 
        GROUP_CONCAT(CASE WHEN a.TANGGAL_LAPORAN='".$d1."' THEN a.HARGA END) as '".$d1."',
        GROUP_CONCAT(CASE WHEN a.TANGGAL_LAPORAN='".$d2."' THEN a.HARGA END) as '".$d2."',
        GROUP_CONCAT(CASE WHEN a.TANGGAL_LAPORAN='".$d3."' THEN a.HARGA END) as '".$d3."',
        GROUP_CONCAT(CASE WHEN a.TANGGAL_LAPORAN='".$d4."' THEN a.HARGA END) as '".$d4."',
        GROUP_CONCAT(CASE WHEN a.TANGGAL_LAPORAN='".$d5."' THEN a.HARGA END) as '".$d5."'
        from laporan_harian a join komoditas b on a.KD_KOMODITAS = b.KD_KOMODITAS group by b.NAMA_KOMODITAS");

        // return $this->db->get()->result_array();
        // return $this->db->get_where('laporan_harian', ['KD_KOMODITAS' => $id])->row_array();
        return $query->result_array();
    }

    public function add()
    {
            $data = [
                "ID_LAPORAN" => $this->input->post('id_laporan', true),
                "KD_KOMODITAS" => $this->input->post('id_komoditas', true),
                "HARGA" => $this->input->post('harga', true),
                "TANGGAL_LAPORAN" => $this->input->post('tanggal_laporan', true),
            ];

        $this->db->insert('laporan_harian', $data);
    
    }

    public function hapus($id){
        $this->db->where('ID_LAPORAN', $id);
        $this->db->delete('laporan_harian');
    }

    // public function getData()
    // {
    //     $d1 = date('Y-m-d', strtotime("-5 days"));
    //     $id= null;

    //     $this->db->select('laporan_harian.*, laporan_harian.HARGA, laporan_harian.TANGGAL_LAPORAN, komoditas.NAMA_KOMODITAS, komoditas.SATUAN');
    //     $this->db->from('laporan_harian');
    //     // $this->db->where('laporan_harian.ID_LAPORAN', $id);
    //     $this->db->where('laporan_harian.TANGGAL_LAPORAN', $d1);
    //     $this->db->group_by('ID_LAPORAN');
    //     $this->db->join('komoditas', 'laporan_harian.KD_KOMODITAS = komoditas.KD_KOMODITAS');

    //     return $this->db->get()->result_array();
    // }

}