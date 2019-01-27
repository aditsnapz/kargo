<?php

$this->fpdf= new fpdf('P','cm','A4');

$this->fpdf->AddPage();
$this->fpdf->Ln();
$date = date('d-m-Y');
$this->fpdf->setFont('Arial','B',15);//jenis_font,tebalmiring,ukuran font
$this->fpdf->Text(7,1,'LAPORAN PENJUALAN');//posisi,ukuran 1 paling besar selebihnya makin kecil
$this->fpdf->setFont('Arial','B',9);
$this->fpdf->Text(8.7,1.5,'PT DACARGO');
$this->fpdf->setFont('Arial','B',7);
$this->fpdf->Text(9.2,1.9,'Jl.YUK 23 ');
$this->fpdf->Line(1,3.1,20.5,3.1);
$this->fpdf->setLineWidth(0.1);
$this->fpdf->ln(2.6);
$this->fpdf->write(0,'Date print :' .$date);
$this->fpdf->ln(0.3);
$this->fpdf->setFont('Arial','B',11);
$this->fpdf->setFillColor(139,69,19);
$this->fpdf->setDrawColor(128,0,0);
$this->fpdf->Cell(3,0.6,'NO NOTA',1,0,'C');
$this->fpdf->Cell(3,0.6,'NAMA BARANG',1,0,'C');
$this->fpdf->Cell(3,0.6,'SATUAN',1,0,'C');
$this->fpdf->Cell(3,0.6,'HARGA',1,0,'C');
$this->fpdf->Cell(3,0.6,'JUMLAH',1,0,'C');
$this->fpdf->Cell(3,0.6,'TOTAL',1,0,'C');

$this->fpdf->Ln();
$query=$this->model_peserta->tampilkeuangan();
foreach ($query->result() as $row)
{
$this->fpdf->setFont('Times','',11);
$this->fpdf->SetFillColor(224,235,255); 
$this->fpdf->setDrawColor(128,0,0);
$this->fpdf->Cell(3,0.6,$row->id_nota,1,0,'C');
$this->fpdf->Cell(3,0.6,$row->nama_barang,1,0,'C');
$this->fpdf->Cell(3,0.6,$row->satuan,1,0,'C');
$this->fpdf->Cell(3,0.6,$row->harga_barang,1,0,'C');
$this->fpdf->Cell(3,0.6,$row->jumlah_barang,1,0,'C');
$this->fpdf->Cell(3,0.6,$row->total_harga,1,0,'C');
$this->fpdf->Ln();
}
$query1= $this->model_peserta->tampilgaji();
$this->fpdf->Cell(15,0.6,'Total',1,0,'C');
foreach ($query1->result() as $key) {
	$this->fpdf->Cell(3,0.6,$key->total,1,0,'C');
}
ob_clean();
$this->fpdf->Output('LPK','I');

?>