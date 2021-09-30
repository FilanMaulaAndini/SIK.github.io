<?php

class M_ketkematian extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->from('data_penduduk')
            ->join('surat', 'surat.NIK_pemohon=data_penduduk.NIK')->where('surat.jenis_surat', 'Surat Keterangan Kematian')
            ->get()
            ->result();
    }
    public function check_database($str)
    {
        $query = $this->db->query("SELECT COUNT(*) AS Jumlah From data_penduduk Where NIK=$str Group by No_KK");

        return $query->result_array();
    }

    public function lihat($No_surat = NULL)
    {
        return $this->db->from('data_penduduk')
            ->join('surat', 'surat.NIK_pemohon=data_penduduk.NIK')->where('surat.No_surat', $No_surat)
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
    public function sunting($where, $table)
    {
        return $this->db->get_where($table, $where);
        // return $this->db->from('data_penduduk')
        //     ->join('surat', 'surat.NIK_pemohon=data_penduduk.NIK')->where('surat.No_surat', $No_surat)
        //     ->get()
        //     ->row();
    }
    public function update($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    public function get_keyword($keyword)
    {
        // $this->db->select('*');
        $this->db->from('data_penduduk')
            ->join('surat', 'surat.NIK_pemohon=data_penduduk.NIK');
        $this->db->like('Nama_Lengkap', $keyword)->where('surat.jenis_surat', 'Surat Keterangan Kematian');
        $this->db->or_like('No_KK', $keyword)->where('surat.jenis_surat', 'Surat Keterangan Kematian');
        $this->db->or_like('No_surat', $keyword)->where('surat.jenis_surat', 'Surat Keterangan Kematian');
        // $this->db->or_like('Tempat_Lahir', $keyword);
        $this->db->or_like('tanggal_pengajuan', $keyword)->where('surat.jenis_surat', 'Surat Keterangan Kematian');
        $this->db->or_like('tanggal_terima', $keyword)->where('surat.jenis_surat', 'Surat Keterangan Kematian');
        $this->db->or_like('Tanggal_kematian', $keyword)->where('surat.jenis_surat', 'Surat Keterangan Kematian');
        $this->db->or_like('NIK_pemohon', $keyword)->where('surat.jenis_surat', 'Surat Keterangan Kematian');
        return $this->db->get()->result();
    }
}
