<?php
session_start();
    if($_SESSION['logged_in']==false){
        header("Location: ../../login.php");
        die();
    }
require_once('../constants.php');
require('fpdf.php');

if(( substr_count($_SESSION['prog'], "c") == $_css )){
$pdf = new FPDF('l', 'cm', 'letter');
$pdf->AddPage();
$pdf->Image('CSScertificate.jpg', 0.5, 0);
$pdf->SetFont('Arial', 'B', 40);
$pdf->SetXY(8.2, 8.5);
$pdf->Cell(12, 4, $_SESSION['fname'].' '.$_SESSION['lname'], 0, 0, 'C');
$pdf->Output();
}else{
	echo '<h1>Certificate not available!</h1>';
}
?>