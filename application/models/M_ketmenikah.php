<?php

class M_ketmenikah extends CI_Model
{
    public function tampil_data()
    {
        //        $this->db->order_by('NIK');
        return $this->db->from('data_penduduk')
            ->join('surat', 'surat.NIK_suami=data_penduduk.NIK')->where('surat.jenis_surat', 'Surat Keterangan Menikah')
            ->get()
            ->result();
        // return $this->db->get('data_penduduk')->result();
    }
    public function check_database($str)
    {
        $query = $this->db->query("SELECT COUNT(*) AS Jumlah From data_penduduk Where NIK=$str Group by No_KK");

        return $query->result_array();
    }

    public function tampil_data2()
    {
        return $this->db->from('data_penduduk')
            ->join('surat', 'surat.NIK_istri=data_penduduk.NIK')->where('surat.jenis_surat', 'Surat Keterangan Menikah')
            ->get()
            ->result();
    }
    public function lihat($No_surat = NULL)
    {
        return $this->db->from('data_penduduk')
            ->join('surat', 'surat.NIK_suami=data_penduduk.NIK')->where('surat.No_surat', $No_surat)
            ->get()
            ->row();
    }
    public function lihat2($No_surat = NULL)
    {
        return $this->db->from('data_penduduk')
            ->join('surat', 'surat.NIK_istri=data_penduduk.NIK')->where('surat.No_surat', $No_surat)
            ->get()
            ->row();
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
            ->join('surat', 'surat.NIK_suami=data_penduduk.NIK');
        // ->join('surat', 'surat.NIK_suami=data_penduduk.NIK');
        $this->db->like('Nama_Lengkap', $keyword)->where('surat.jenis_surat', 'Surat Keterangan Menikah');
        $this->db->or_like('NIK_istri', $keyword)->where('surat.jenis_surat', 'Surat Keterangan Menikah');
        $this->db->or_like('No_KK', $keyword)->where('surat.jenis_surat', 'Surat Keterangan Menikah');
        $this->db->or_like('No_surat', $keyword)->where('surat.jenis_surat', 'Surat Keterangan Menikah');
        // $this->db->or_like('Tempat_Lahir', $keyword);
        $this->db->or_like('tanggal_pengajuan', $keyword)->where('surat.jenis_surat', 'Surat Keterangan Menikah');
        $this->db->or_like('tanggal_terima ', $keyword)->where('surat.jenis_surat', 'Surat Keterangan Menikah');
        return $this->db->get()->result();
    }
    public function get_keyword2($keyword)
    {
        // $this->db->select('*');
        $this->db->from('data_penduduk')
            ->join('surat', 'surat.NIK_istri=data_penduduk.NIK');
        $this->db->like('Nama_Lengkap', $keyword)->where('surat.jenis_surat', 'Surat Keterangan Menikah');
        $this->db->or_like('NIK_istri', $keyword)->where('surat.jenis_surat', 'Surat Keterangan Menikah');
        $this->db->or_like('No_KK', $keyword)->where('surat.jenis_surat', 'Surat Keterangan Menikah');
        $this->db->or_like('No_surat', $keyword)->where('surat.jenis_surat', 'Surat Keterangan Menikah');
        // $this->db->or_like('Tempat_Lahir', $keyword);
        $this->db->or_like('tanggal_pengajuan', $keyword)->where('surat.jenis_surat', 'Surat Keterangan Menikah');
        $this->db->or_like('tanggal_terima ', $keyword)->where('surat.jenis_surat', 'Surat Keterangan Menikah');
        return $this->db->get()->result();
    }
}
