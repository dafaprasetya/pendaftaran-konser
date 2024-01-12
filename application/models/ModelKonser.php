<?php 
    class ModelKonser extends CI_Model 
    {
        
        const SESSION_KEY = 'user_id';
        public function __construct()
        {
            parent::__construct();
        }
        public function tambahkonser($nama, $tanggal,$lokasi, $platinum, $qt_platinum, $silver, $qt_silver, $bronze, $qt_bronze, $keterangan, $gambar) {
            $data_konser = array(
                'nama_konser' => $nama,
                'tanggal_konser' => $tanggal,
                'lokasi' => $lokasi,
                'platinum' => $platinum,
                'qt_platinum' => $qt_platinum,
                'silver' => $silver,
                'qt_silver' => $qt_silver,
                'bronze' => $bronze,
                'qt_bronze' => $qt_bronze,
                'keterangan' => $keterangan,
                'benner' => $gambar,
            );
            $this->db->insert('konser', $data_konser);
        }
        public function updatekonser($nama, $tanggal,$lokasi, $platinum, $qt_platinum, $silver, $qt_silver, $bronze, $qt_bronze, $keterangan, $gambar, $id) {
            $data_konser = array(
                'nama_konser' => $nama,
                'tanggal_konser' => $tanggal,
                'lokasi' => $lokasi,
                'platinum' => $platinum,
                'qt_platinum' => $qt_platinum,
                'silver' => $silver,
                'qt_silver' => $qt_silver,
                'bronze' => $bronze,
                'qt_bronze' => $qt_bronze,
                'keterangan' => $keterangan,
                'benner' => $gambar,
            );
            $where = array(
                'id' => $id
            );
            $this->db->where($where);
            $this->db->update('konser', $data_konser);
        }
        public function deletekonser($id) {
            $where = array(
                'id' => $id
            );
            $this->db->where($where);
            $this->db->delete('konser');
        }

    }
?>