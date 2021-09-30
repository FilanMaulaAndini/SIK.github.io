<?php

class M_permohonankk extends CI_Model
{
    public function tampil_data()
    {
        //        $this->db->order_by('NIK');
        return $this->db->from('surat')
            ->where('jenis_surat', 'Surat Permohonan KK Baru')
            ->or_where('jenis_surat', 'Surat Permohonan Menumpang KK')
            ->get()
            ->result();
        // return $this->db->get('data_penduduk')->result();
    }
    public function check_database($str)
    {
        $query = $this->db->query("SELECT COUNT(*) AS Jumlah From data_penduduk Where NIK=$str Group by No_KK");

        return $query->result_array();
    }

    public function lihat($No_surat = NULL)
    {
        return $this->db->from('surat')->where('surat.No_surat', $No_surat)
            ->join('daftar_keluarga', 'daftar_keluarga.KK_Lama=surat.KK_Lama')
            ->get()
            ->result_array();
        // return $query ;
    }
    public function lihat2($No_surat = NULL)
    {
        return $this->db->from('surat')->where('surat.No_surat', $No_surat)
            ->join('daftar_keluarga', 'daftar_keluarga.KK_Lama=surat.KK_Lama')
            //            ->join('data_penduduk', 'surat.NIK_KK_')
            ->get()
            ->row();
    }
    public function cetak($No_surat = NULL)
    {
        // $query = $this->db->get_where('data_penduduk', array('NIK' => $NIK))->row();
        // $query2 = $this->db->get_where('kategori_miskin', array('NIK' => $NIK))->row();
        //$query2 = $this->db->get_where('kategori_miskin', array('NIK' => $NIK))->row();
        return $this->db->from('data_penduduk')
            ->join('surat', 'surat.NIK_KK_Lama=data_penduduk.NIK')->where('surat.No_surat', $No_surat)
            ->get()
            ->row();

        // return $query ;
    }
    public function tambah($data, $table)
    {
        $this->db->insert($table, $data);
    }
    public function hapus($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function sunting($No_surat = NULL)
    {
        return $this->db->from('surat')->where('surat.No_surat', $No_surat)
            ->join('daftar_keluarga', 'daftar_keluarga.KK_Lama=surat.KK_Lama')
            ->get()->result_array();
    }
    public function sunting2($No_surat = NULL)
    {
        return $this->db->from('surat')->where('surat.No_surat', $No_surat)
            ->join('daftar_keluarga', 'daftar_keluarga.KK_Lama=surat.KK_Lama')
            ->get()->row();
    }
    public function update2($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    public function update($result = array())
    {
        $total_array = count($result);
        if ($total_array != 0) {
            $this->db->update_batch('daftar_keluarga', $result, 'KK_Lama');
        }
    }
    public function get_keyword($keyword)
    {
        $this->db->from('surat');
        $this->db->like('No_surat', $keyword)->where('jenis_surat', 'Surat Permohonan KK Baru');
        $this->db->or_like('No_surat', $keyword)->where('jenis_surat', 'Surat Permohonan Menumpang KK');
        $this->db->or_like('jenis_surat', $keyword)->where('jenis_surat', 'Surat Permohonan KK Baru');
        $this->db->or_like('jenis_surat', $keyword)->where('jenis_surat', 'Surat Permohonan Menumpang KK');
        $this->db->or_like('KK_Lama', $keyword)->where('jenis_surat', 'Surat Permohonan KK Baru');
        $this->db->or_like('KK_Lama', $keyword)->where('jenis_surat', 'Surat Permohonan Menumpang KK');
        $this->db->or_like('NIK_KK_Lama', $keyword)->where('jenis_surat', 'Surat Permohonan KK Baru');
        $this->db->or_like('NIK_KK_Lama', $keyword)->where('jenis_surat', 'Surat Permohonan Menumpang KK');
        $this->db->or_like('KK_ditempati', $keyword)->where('jenis_surat', 'Surat Permohonan KK Baru');
        $this->db->or_like('KK_ditempati', $keyword)->where('jenis_surat', 'Surat Permohonan Menumpang KK');
        $this->db->or_like('NIK_KK_ditempati', $keyword)->where('jenis_surat', 'Surat Permohonan KK Baru');
        $this->db->or_like('NIK_KK_ditempati', $keyword)->where('jenis_surat', 'Surat Permohonan Menumpang KK');
        $this->db->or_like('Alasan', $keyword)->where('jenis_surat', 'Surat Permohonan KK Baru');
        $this->db->or_like('Alasan', $keyword)->where('jenis_surat', 'Surat Permohonan Menumpang KK');

        return $this->db->get()->result();
    }
    public function save_batch($data)
    {
        return $this->db->insert_batch('daftar_keluarga', $data);
    }
}
