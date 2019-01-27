<?php
$this->fpdf= new FPDF('P','cm','A4');

$this->fpdf->AddPage();
$this->fpdf->Ln();
$date = date('d-m-Y');
$this->fpdf->setFont('Arial','B',15);//jenis_font,tebalmiring,ukuran font
$this->fpdf->Text(6.3,1,'ABSEN SELURUH PESERTA');//posisi,ukuran 1 paling besar selebihnya makin kecil
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
$this->fpdf->Cell(3,0.6,'NAMA',1,0,'C');
$this->fpdf->Cell(3,0.6,'KEMAMPUAN',1,0,'C');
$this->fpdf->Cell(2,0.6,'TUGAS',1,0,'C');
$this->fpdf->Cell(2,0.6,'UTS',1,0,'C');
$this->fpdf->Cell(2,0.6,'UAS',1,0,'C');
$this->fpdf->Cell(2,0.6,'NA',1,0,'C');
$this->fpdf->Cell(3,0.6,'ABSEN',1,0,'C');
$this->fpdf->Ln();
$query=$this->model_pegawai->absenpeserta();
foreach ($query->result() as $row)
{
$this->fpdf->setFont('Times','',11);
$this->fpdf->setFillColor(224,235,255);
$this->fpdf->setDrawColor(128,199,0);
$this->fpdf->Cell(3,0.6,$row->nm_peserta,1,0,'C');
$this->fpdf->Cell(3,0.6,$row->kemampuan,1,0,'C');
$this->fpdf->Cell(2,0.6,$row->tugas,1,0,'C');
$this->fpdf->Cell(2,0.6,$row->uts,1,0,'C');
$this->fpdf->Cell(2,0.6,$row->uas,1,0,'C');
$this->fpdf->Cell(2,0.6,$row->na,1,0,'C');
$this->fpdf->Cell(3,0.6,$row->absen,1,0,'C');
$this->fpdf->Ln();
}
$this->fpdf->Output('Absen_Peserta','I');

?>