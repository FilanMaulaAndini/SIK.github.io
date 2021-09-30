<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
	if($_POST['NIK_Pemohon']==""){
?>
	<script language="javascript">
		//alert("Maaf, isi dengan nomor ujian nasional anda dengan Format Ketikan No.UN XX-XXX-XXX-X Tanpa Spasi !!!");
		//document.location="index.php";
	</script>
<?php
	}
}
//include master file
require('fpdf.php');

//instance objek db
$db = new database();

//koneksi ke database
$db->konek();

//ambil data
$nomor=$_POST['NIK_Pemohon'];
$tabel=$_POST['kelas'];

//mencari data
$cari = mysql_query("SELECT * FROM ".$tabel." WHERE noPeserta = '$nomor'");
$hasil = mysql_fetch_array($cari);
$nama = $hasil['nama'];
$id = $hasil['noPeserta'];
$kelas = $hasil['kelas'];
//extending class fpdf
class suratpdf extends FPDF{
	function letak($gambar){
		//memasukkan gambar untuk header
		$this->Image($gambar,10,10,20,25);
		//menggeser posisi sekarang
	}
	function judul($teks1, $teks2, $teks3, $teks4, $teks5){
		$this->Cell(25);
		$this->SetFont('Times','B','12');
		$this->Cell(0,5,$teks1,0,1,'C');
		$this->Cell(25);
		$this->Cell(0,5,$teks2,0,1,'C');
		$this->Cell(25);
		$this->SetFont('Times','B','15');
		$this->Cell(0,5,$teks3,0,1,'C');
		$this->Cell(25);
		$this->SetFont('Times','I','8');
		$this->Cell(0,5,$teks4,0,1,'C');
		$this->Cell(25);
		$this->Cell(0,2,$teks5,0,1,'C');
	}
	function garis(){
		$this->SetLineWidth(1);
		$this->Line(10,36,200,36);
		$this->SetLineWidth(0);
		$this->Line(10,37,200,37);
	}
	function surat($nomor, $berkas, $hal){
		$this->Ln(5);
		$this->SetFont('Times','',12);
		$this->Cell(0,5,'Pagar Alam, 07 Mei 2016',0,1,'R');
		$this->SetFont('Times','',12);
		$this->Cell(10,5,'Nama',0,0,'L');
		$this->Cell(15);
		$this->Cell(2,5,':',0,0,'L');
		$this->Cell(5);
		$this->Cell(1,5,$nomor,0,1,'L');
		$this->Cell(10,5,'Lampiran',0,0,'L');
		$this->Cell(15);
		$this->Cell(2,5,':',0,0,'L');
		$this->Cell(5);
		$this->Cell(1,5,$berkas,0,1,'L');
		$this->Cell(10,5,'Perihal',0,0,'L');
		$this->Cell(15);
		$this->Cell(2,5,':',0,0,'L');
		$this->Cell(5);
		$this->Cell(1,5,$hal,0,1,'L');
		$this->SetFont('Times','',12);
	}
	function tujuan(){
		$this->Ln(2);
		$this->SetFont('Times','',12);
		$this->Cell(25);
		$this->Cell(10,5,'Kepada Yang Terhormat',0,1,'L');
		$this->Cell(25);
		$this->Cell(10,5,'Saudara/i',0,1,'L');
		$this->Cell(25);
		$this->Cell(10,5,'____________________________',0,1,'L');
		$this->Cell(25);
		$this->Cell(10,5,'Ditempat',0,1,'L');
	}
	function body1($teks){
		$this->Ln(8);
		$this->Cell(25);
		$this->SetFont('Times','',12);
		for ($i=0;$i < count($teks);$i++)
		$this->MultiCell(0,5,$teks[$i]);
	}
	function idSiswa($nama, $id, $kelas){
		$this->Ln(2);
		$this->Cell(25);
		$this->SetFont('Times','',12);
		$this->Cell(15);
		$this->Cell(10,5,'Nama',0,0,'L');
		$this->Cell(15);
		$this->Cell(2,5,':',0,0,'L');
		$this->Cell(5);
		$this->Cell(1,5,$nama,0,1,'L');
		$this->Cell(25);
		$this->Cell(15);
		$this->Cell(10,5,'No. Ujian',0,0,'L');
		$this->Cell(15);
		$this->Cell(2,5,':',0,0,'L');
		$this->Cell(5);
		$this->Cell(1,5,$id,0,1,'L');
		$this->Cell(15);
		$this->Cell(25);
		$this->Cell(10,5,'Kelas',0,0,'L');
		$this->Cell(15);
		$this->Cell(2,5,':',0,0,'L');
		$this->Cell(5);
		$this->Cell(1,5,$kelas,0,1,'L');
	}
	function lulus($kpts){
		$this->Ln(1);
		$this->Cell(25);
		$this->SetFont('Times','',12);
		$this->Cell(0, 5, 'Dinyatakan:',0,1);
		$this->SetFont('Times','',15);
		$this->Cell(10);
		$this->Ln(5);
		$this->Cell(0, 5, $kpts,0,1,'C');
	}
	function body2($tutup){
		$this->Ln(2);
		$this->Cell(25);
		$this->SetFont('Times','',12);
		for ($i=0;$i < count($tutup);$i++)
		$this->MultiCell(0,5,$tutup[$i]);
	}
	function kepsek(){
		$this->Ln(5);
		$this->Cell(130);
		$this->Cell(0,5,'Kepala,',0,1,'L');	
	}
	function cap($tangan){
		$this->Ln(5);
		$this->Image($tangan,120,145,55,35);
	}
	function kepsek2(){
		$this->Ln(10);
		$this->Cell(130);
		$this->SetFont('Times','B',12);
		$this->Cell(0,5,'AMRULLAH, S.Ag.,M.Pd.I',0,1,'L');
		$this->SetFont('Times','',12);
		$this->Cell(130);
		$this->Cell(0,5,'NIP.197308172002121002,',0,1,'L');
	}
	function catatan($ctt){
		$this->Ln(0);
		$this->SetFont('Times','B',11);
		$this->Cell(0,5,'Catatan',0,1,'L');
		$this->SetFont('Times','I',10);
		for ($i=0;$i < count($ctt);$i++)
		$this->MultiCell(0,3,$ctt[$i]);
	}
	function legalitas($legal){
		$this->Ln(10);
		$this->SetFont('Arial','I',8);
		$this->Cell(0,3,$legal,0,1,'L');
	}
}

//instantisasi objek
$pdf=new pdf();

//properti dokumen
$pdf->SetAuthor('SAFANAH_03115 | http://ica03.wordpress.com | hamidah_18@yahoo.co.id');
$pdf->SetTitle('Hasil UN SMAN 4 PGA');
//Mulai dokumen
$pdf->AddPage('P', 'A4');
//meletakkan gambar
$pdf->letak('image/man.png');
//meletakkan judul disamping logo diatas
$pdf->judul('KEMENTERIAN  AGAMA REPUBLIK INDONESIA', 'KANTOR KEMENTERIAN AGAMA KOTA PAGARALAM','MADRASAH ALIYAH NEGERI PAGARALAM','Alamat :Jl.letjen R. Suprapto Telpon (0730) 621920 KODE POS 31527', 'E-Mail: man. pagaralam@kemenag .go.id NSM 311160402005');
//membuat garis ganda tebal dan tipis
$pdf->garis();
//membuat header surat dan penomoran
$pdf->surat('166 / KK.06.11/1/MAN/PP.01/5/2016', '1 Berkas', 'Pemberitahuan Kelulusan MAN Kota Pagaralam Tp.2016/2017');
//bodi surat 1
$pdf->tujuan();
$teks = file('umum.txt');
$pdf->body1($teks);
$pdf->idSiswa($nama, $id, $kelas);
$pdf->lulus('LULUS');
//bodi surat 2
$teks2 = file('umum2.txt');
$pdf->body2($teks2);
//tanda tangan kepsek
$pdf->kepsek();
$pdf->cap('image/ttdcap.png');
$pdf->kepsek2();
//$teks3 = file('umum3.txt');
//catatan bagi siswa
//$pdf->catatan($teks3);
$date = date('d-M-Y  h:i:s');
$pdf->legalitas('printed on: '.$date.' by '.$nama.' '.$id );
$pdf->Output($nama.'.pdf','D');
?>