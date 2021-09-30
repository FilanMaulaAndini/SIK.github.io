<?php

class M_penduduk extends CI_Model
{
    public function tampil_data($limit, $start)
    {
        //        $this->db->order_by('NIK');
        return $this->db->get('data_penduduk', $limit, $start)
            ->result();
        // return $this->db->get('data_penduduk')->result();
    }
    public function jumlah_data()
    {
        return $this->db->from('data_penduduk')->get()->num_rows();
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
    public function sunting($NIK = NULL)
    {
        // $table= $this->db->from('data_penduduk')
        // ->join('kategori_miskin', 'kategori_miskin.NIK=data_penduduk.NIK')
        // ->get()
        // ->row();

        // return $this->db->get_where($table, $where);
        return $this->db->from('data_penduduk')
            ->join('kategori_miskin', 'kategori_miskin.NIK=data_penduduk.NIK')->where('kategori_miskin.NIK', $NIK)
            ->get()
            ->row();
    }
    public function update($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    public function lihat($NIK = NULL)
    {
        return $this->db->from('data_penduduk')
            ->join('kategori_miskin', 'kategori_miskin.NIK=data_penduduk.NIK')->where('kategori_miskin.NIK', $NIK)
            ->get()
            ->row();

        // return $query ;
    }
    public function get_keyword($keyword)
    {
        // $this->db->select('*');
        $this->db->from('data_penduduk');
        $this->db->like('NIK', $keyword);
        $this->db->or_like('NO_KK', $keyword);
        $this->db->or_like('Nama_Lengkap', $keyword);
        $this->db->or_like('Jenis_Kelamin', $keyword);
        return $this->db->get();
    }
}
