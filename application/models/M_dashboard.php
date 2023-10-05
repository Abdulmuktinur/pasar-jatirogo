<?php

class M_dashboard extends CI_Model
{
    public function getData(){
        // $this->db->select("AVG (laporan_harian.harga) FROM laporan_harian WHERE laporan_harian.tanggal_laporan LIKE '2020-09-&' AND id_komoditas = 1");
        $this->db->select("komoditas.id_komoditas, komoditas.nama_komoditas");
        $this->db->from('komoditas');
        
        $komo = $this->db->get()->result_array();

        $array_rata_komo = array();

        foreach($komo as $dt){
            
            $cekdt = $this->input->post('tahun', true);

            $temp_array = array();
            $idd = strval($dt['id_komoditas']);
            
            $txt = "AVG (laporan_harian.harga) FROM laporan_harian WHERE laporan_harian.tanggal_laporan LIKE '$cekdt-01-%' AND laporan_harian.id_komoditas = $idd";
            $this->db->select($txt);
            $temp = $this->db->get()->result_array();
            array_push($temp_array, floatval($temp[0]["AVG (laporan_harian.harga)"]));

            $txt = "AVG (laporan_harian.harga) FROM laporan_harian WHERE laporan_harian.tanggal_laporan LIKE '$cekdt-02-%' AND laporan_harian.id_komoditas = $idd";
            $this->db->select($txt);
            $temp = $this->db->get()->result_array();
            array_push($temp_array, floatval($temp[0]["AVG (laporan_harian.harga)"]));

            $txt = "AVG (laporan_harian.harga) FROM laporan_harian WHERE laporan_harian.tanggal_laporan LIKE '$cekdt-03-%' AND laporan_harian.id_komoditas = $idd";
            $this->db->select($txt);
            $temp = $this->db->get()->result_array();
            array_push($temp_array, floatval($temp[0]["AVG (laporan_harian.harga)"]));

            $txt = "AVG (laporan_harian.harga) FROM laporan_harian WHERE laporan_harian.tanggal_laporan LIKE '$cekdt-04-%' AND laporan_harian.id_komoditas = $idd";
            $this->db->select($txt);
            $temp = $this->db->get()->result_array();
            array_push($temp_array, floatval($temp[0]["AVG (laporan_harian.harga)"]));

            $txt = "AVG (laporan_harian.harga) FROM laporan_harian WHERE laporan_harian.tanggal_laporan LIKE '$cekdt-05-%' AND laporan_harian.id_komoditas = $idd";
            $this->db->select($txt);
            $temp = $this->db->get()->result_array();
            array_push($temp_array, floatval($temp[0]["AVG (laporan_harian.harga)"]));

            $txt = "AVG (laporan_harian.harga) FROM laporan_harian WHERE laporan_harian.tanggal_laporan LIKE '$cekdt-06-%' AND laporan_harian.id_komoditas = $idd";
            $this->db->select($txt);
            $temp = $this->db->get()->result_array();
            array_push($temp_array, floatval($temp[0]["AVG (laporan_harian.harga)"]));

            $txt = "AVG (laporan_harian.harga) FROM laporan_harian WHERE laporan_harian.tanggal_laporan LIKE '$cekdt-07-%' AND laporan_harian.id_komoditas = $idd";
            $this->db->select($txt);
            $temp = $this->db->get()->result_array();
            array_push($temp_array, floatval($temp[0]["AVG (laporan_harian.harga)"]));

            $txt = "AVG (laporan_harian.harga) FROM laporan_harian WHERE laporan_harian.tanggal_laporan LIKE '$cekdt-08-%' AND laporan_harian.id_komoditas = $idd";
            $this->db->select($txt);
            $temp = $this->db->get()->result_array();
            array_push($temp_array, floatval($temp[0]["AVG (laporan_harian.harga)"]));

            $txt = "AVG (laporan_harian.harga) FROM laporan_harian WHERE laporan_harian.tanggal_laporan LIKE '$cekdt-09-%' AND laporan_harian.id_komoditas = $idd";
            $this->db->select($txt);
            $temp = $this->db->get()->result_array();
            array_push($temp_array, floatval($temp[0]["AVG (laporan_harian.harga)"]));

            $txt = "AVG (laporan_harian.harga) FROM laporan_harian WHERE laporan_harian.tanggal_laporan LIKE '$cekdt-10-%' AND laporan_harian.id_komoditas = $idd";
            $this->db->select($txt);
            $temp = $this->db->get()->result_array();
            array_push($temp_array, floatval($temp[0]["AVG (laporan_harian.harga)"]));

            $txt = "AVG (laporan_harian.harga) FROM laporan_harian WHERE laporan_harian.tanggal_laporan LIKE '$cekdt-11-%' AND laporan_harian.id_komoditas = $idd";
            $this->db->select($txt);
            $temp = $this->db->get()->result_array();
            array_push($temp_array, floatval($temp[0]["AVG (laporan_harian.harga)"]));

            $txt = "AVG (laporan_harian.harga) FROM laporan_harian WHERE laporan_harian.tanggal_laporan LIKE '$cekdt-12-%' AND laporan_harian.id_komoditas = $idd";
            $this->db->select($txt);
            $temp = $this->db->get()->result_array();
            array_push($temp_array, floatval($temp[0]["AVG (laporan_harian.harga)"]));

            $array_rata_komo[$dt['nama_komoditas']] = $temp_array;
        };
        

        $data_chart = array();

        foreach($array_rata_komo as $key => $dt){
            $temp = array(
                array("y" => $dt[0], "label" => "Januari"),
                array("y" => $dt[1], "label" => "Februari"),
                array("y" => $dt[2], "label" => "Maret"),
                array("y" => $dt[3], "label" => "April"),
                array("y" => $dt[4], "label" => "Mei"),
                array("y" => $dt[5], "label" => "Juni"),
                array("y" => $dt[6], "label" => "Juli"),
                array("y" => $dt[7], "label" => "Agustus"),
                array("y" => $dt[8], "label" => "September"),
                array("y" => $dt[9], "label" => "Oktober"),
                array("y" => $dt[10], "label" => "November"),
                array("y" => $dt[11], "label" => "Desember")
              );
              $data_chart[$key] = $temp;
        }

        // return $this->db->get()->result_array();
        return array($cekdt, $data_chart);
    }

    public function getTanggal(){
        $this->db->select('laporan_harian.tanggal_laporan');
        $this->db->from('laporan_harian');


        $row = array();
        $tgl = $this->db->get()->result_array();
        foreach ($tgl as $dt){
            array_push($row, substr($dt['tanggal_laporan'], 0,4));
        }
        return array_unique($row);
    }
}

// SELECT AVG (harga) FROM laporan_harian WHERE tanggal_laporan LIKE '2020-09-%' AND id_komoditas = 1