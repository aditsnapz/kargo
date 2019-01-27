<?php
$this->fpdf= new FPDF('P','cm','A4');

$this->fpdf->AddPage();
$this->fpdf->Ln();
$date = date('d-m-Y');
$this->fpdf->setFont('Arial','B',15);//jenis_font,tebalmiring,ukuran font
$this->fpdf->Text(6.3,1,'ABSEN SELURUH PENDIDIK');//posisi,ukuran 1 paling besar selebihnya makin kecil
$this->fpdf->setFont('Arial','B',9);
$this->fpdf->Text(8.5,1.5,'LEMBAGA BELVA');
$this->fpdf->setFont('Arial','B',7);
$this->fpdf->Text(8.4,1.9,'Jl.KENDAL RAYA NO 23 ');
$this->fpdf->Line(1,3.1,20.5,3.1);
$this->fpdf->setLineWidth(0.1);
$this->fpdf->ln(2.6);
$this->fpdf->write(0,'Date print :' .$date);
$this->fpdf->ln(0.3);
$this->fpdf->setFont('Arial','B',11);
$this->fpdf->setFillColor(139,69,19);
$this->fpdf->setDrawColor(128,199,0);
$this->fpdf->Cell(3,0.6,'ID',1,0,'C');//panjang sel,tinggi,isi sel,keterangan border,berapa spasi,margin(center,right,left)
$this->fpdf->Cell(3,0.6,'NAMA',1,0,'C');

$this->fpdf->Cell(3,0.6,'AGAMA',1,0,'C');
$this->fpdf->Cell(3,0.6,'KOTA',1,0,'C');
$this->fpdf->Cell(3,0.6,'LULUSAN',1,0,'C');
$this->fpdf->Cell(3,0.6,'ABSEN',1,0,'C');
$this->fpdf->Ln();
$query=$this->model_pegawai->absenpendidik();
foreach ($query->result() as $row)
{
$this->fpdf->setFont('Times','',11);
$this->fpdf->setFillColor(224,235,255);
$this->fpdf->setDrawColor(128,199,0);
$this->fpdf->Cell(3,0.6,$row->kd_jabatan,1,0,'C');
$this->fpdf->Cell(3,0.6,$row->nama_p,1,0,'C');

$this->fpdf->Cell(3,0.6,$row->agama,1,0,'C');
$this->fpdf->Cell(3,0.6,$row->kota,1,0,'C');
$this->fpdf->Cell(3,0.6,$row->lulusan,1,0,'C');
$this->fpdf->Cell(3,0.6,$row->absen,1,0,'C');
$this->fpdf->Ln();
}
$this->fpdf->Output('Absen_Pendidik','I');

?>