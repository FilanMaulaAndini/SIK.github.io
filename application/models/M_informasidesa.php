<?php

class M_informasidesa extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->from('informasi_desa')->get()->result();
    }
    public function lihat($id_info = NULL)
    {
        return $this->db->from('informasi_desa')
            ->where('id_info', $id_info)
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
        $this->db->from('informasi_desa');
        $this->db->like('Judul', $keyword);
        $this->db->or_like('Isi', $keyword);
        return $this->db->get()->result();
    }
}
