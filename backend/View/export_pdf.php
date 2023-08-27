<?php
require_once 'tcpdf/tcpdf.php'; 

$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Your Name');
$pdf->SetTitle('Product List PDF');
$pdf->SetSubject('Product List');
$pdf->SetKeywords('Product, List, PDF');

$pdf->AddPage();

$pdf->Output('product_list.pdf', 'I');
?>