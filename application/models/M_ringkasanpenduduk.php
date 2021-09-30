<?php
class M_ringkasanpenduduk extends CI_Model
{

    function get_data()
    {
        $query = $this->db->query("SELECT Jenis_Kelamin,COUNT(*) AS Jumlah FROM data_penduduk GROUP BY Jenis_Kelamin");

        return $query->result();
    }
    function get_agama()
    {
        $query = $this->db->query("SELECT Agama, COUNT(*) AS Jumlah_Agama From data_penduduk Group by Agama ");

        return $query->result();
    }
    function get_pekerjaan()
    {
        $query = $this->db->query("SELECT Pekerjaan, COUNT(*) AS Jumlah_Pekerjaan From data_penduduk Group by Pekerjaan ");

        return $query->result();
    }
    function get_pendidikan()
    {
        $query = $this->db->query("SELECT Pendidikan, COUNT(*) AS Jumlah_Pendidikan From data_penduduk Group by Pendidikan ");

        return $query->result();
    }
    function get_jumlahKK($limit, $start)
    {
        $query = $this->db->query("SELECT No_KK, COUNT(*) AS Jumlah_KK, Nama_Lengkap As Nama_KepalaKeluarga From data_penduduk Group by No_KK LIMIT $start, $limit");

        return $query->result();
    }
    function get_KK()
    {
        $query = $this->db->query("SELECT COUNT(No_KK) AS Jumlah_KK From data_penduduk Group by No_KK ");

        return $query->num_rows();
    }
    function get_penduduk()
    {
        $query = $this->db->query("SELECT COUNT(*) AS Jumlah_Penduduk FROM data_penduduk");

        return $query->row();
    }
    function get_kat_miskin()
    {
        $query = $this->db->query("SELECT COUNT(*) AS Jumlah_Pendudukmiskin From kategori_miskin 
        WHERE (Fasilitas_buang_air ='Tidak Memiliki' or Fasilitas_buang_air ='Bersama sama RT lain') 
        AND Luas_lantai='Kurang dari 8 meter persegi' 
        AND (Jenis_Lantai='Tanah' or Jenis_Lantai='Bambu' or Jenis_Lantai='Kayu Murahan') 
        AND (Sumber_air_minum='Sumur/Mata Air tidak terlindung' or Sumber_air_minum='Sungai' or Sumber_air_minum='Air Hujan') 
        AND (Jenis_dinding='Bambu' or Jenis_dinding='Rumbia' or Jenis_dinding='Kayu Berkualitas Rendah' or Jenis_dinding='Tembok Tanpa Diplester') 
        AND Sumber_penerangan='Tanpa LIstrik'
        AND (BB_Memasak='Kayu Bakar' or BB_Memasak='Arang' or BB_Memasak='Minyak Tanah')
        AND Konsumsi_daging='Ya' 
        AND Satu_pakaian_pertahun='Ya' 
        AND Satudua_kali_makan='Ya' 
        AND Bayar_pengobatan='Ya'
        AND (Sumber_penghasilan_Kepala_RT='Petani dengan Luas Lahan 500 m2' or Sumber_penghasilan_Kepala_RT='Buruh Tani/Nelayan' or Sumber_penghasilan_Kepala_RT='Buruh Bangunan/Perkebunan' or Sumber_penghasilan_Kepala_RT='Pendapatan dibawah Rp. 600.000,- per Bulan') 
        AND (Pendidikan_tertinggi_Kepala_RT='Tidak Tamat SD/Sederajat' or Pendidikan_tertinggi_Kepala_RT='Tidak Sekolah') 
        AND TabunganBarang_Jual='Ya'");
        // $query = $this->db->query("SELECT COUNT(Fasilitas_buang_air) AS J_Fasilitas_buang_air, COUNT(Luas_lantai) AS J_Luas_lantai,COUNT(Jenis_lantai) AS J_Jenis_lantai, COUNT(Sumber_air_minum) AS J_Sumber_air_minum From kategori_miskin WHERE Fasilitas_buang_air ='Tidak Memiliki' or Fasilitas_buang_air ='Bersama sama RT lain' and Luas_lantai='Kurang dari 8 meter persegi'");
        //    $query2 = $this->db->query("SELECT COUNT(Pekerjaan) AS Jumlah_Penduduk From data_penduduk WHERE Pekerjaan ='Pelajar' and pekerjaan='RT'");

        return $query->row();
    }
    public function lihat($No_KK = NULL)
    {

        return $this->db->from('data_penduduk')
            ->where('No_KK', $No_KK)
            ->get()
            ->result();
    }
}
