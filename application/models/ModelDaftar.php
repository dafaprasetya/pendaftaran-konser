<?php 
    class ModelDaftar extends CI_Model 
    {
        
        const SESSION_KEY = 'user_id';
        public function __construct()
        {
            parent::__construct();
        }
        public function tambahdaftar($nama, $nomor_telp, $email, $cat, $konserid, $harga, $tiketid) {
            $data_daftar = array(
                'nama' => $nama,
                'nomor_telp' => $nomor_telp,
                'email' => $email,
                'cat' => $cat,
                'konserid' => $konserid,
                'harga' => $harga,
                'tiketid' => $tiketid,
            );
            $this->db->insert('daftar', $data_daftar);
        }

    }
?>