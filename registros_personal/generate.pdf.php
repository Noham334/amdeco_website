<?php
$idpersonal="";
$fecha_hoy=obtenerFechaEnLetra(date('d-m-Y'));
require('fpdf/fpdf.php');
include ("php/personal.php");
$genero = '';
function obtenerFechaEnLetra($fecha){
    $dia= conocerDiaSemanaFecha($fecha);
    $num = date("j", strtotime($fecha));
    $anno = date("Y", strtotime($fecha));
    $mes = array('enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'agosto', 'septiembre', 'octubre', 'noviembre', 'diciembre');
    $mes = $mes[(date('m', strtotime($fecha))*1)-1];
    return $dia.' '.$num.' de '.$mes.' del '.$anno;
}
function conocerDiaSemanaFecha($fecha) {
    $dias = array('Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado');
    $dia = $dias[date('w', strtotime($fecha))];
    return $dia;
}
if (!empty($_GET['idpersonal'])) {
    $idpersonal = $_GET['idpersonal'];
    $datos = personal::generate_pdf($idpersonal);
    $nombre = $datos['nombre'];
    $ci = $datos['ci'];
    $fecha_ini = obtenerFechaEnLetra($datos['fecha_ini']);
    $fecha_fin = obtenerFechaEnLetra($datos['fecha_fin']);
    $cargo = $datos['cargo'];
	$descripcion = $datos['descripcion_trabajo'];
	$genero = $datos['genero'];
	$terminacion_ci = $datos['terminacion_ci'];
}
class PDF extends FPDF
{
    function Header(){
		//QR
		$this->Image('image/qr_img.png' , 165 ,250, 35 , 38,'PNG');
		//ARIAL BOLD 15
		$this->SetFont('Arial','UB',18);
		//Movernos a la Derecha
		$this->Cell(80);
		//titulo
		
		$this->Cell(50,100,utf8_decode('CERTIFICADO DE TRABAJO'),0,0,'C');
		//Salto de Linea
		$this->Ln(20);
		//subtitulo
		$this->SetFont('Arial','B',13);
		//Movernos a la Derecha
		$this->Cell(15);
		//titulo
		$this->SetLeftMargin(50);
		$this->Cell(0,100,utf8_decode('A quien corresponda'),0,0,'L');
		//Salto de Linea
		$this->Ln(20);
		
	}
	
}
 
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',11);
$pdf-> ln(40);
$pdf->SetLeftMargin(50);
$pdf->SetRightMargin(15);
$pdf->Write(6,utf8_decode('La Asociación de Gobiernos Autónomos Municipales de Cochabamba a solicitud del interesado se certifica que '.$nombre.', con C.I. '.$ci.' '.$terminacion_ci.', trabajó desde el '.$fecha_ini.' hasta el '.$fecha_fin.' como: '.$cargo.'.'));
$pdf-> ln(10);
if($genero == "Masculino"):
$pdf->Write(6,utf8_decode('Él suscrito ha desarrollado las actividades: '.$descripcion));
else:
$pdf->Write(6,utf8_decode('La suscrita ha desarrollado las actividades: '.$descripcion));
endif;
$pdf->Write(6,utf8_decode(', habiendo desempeñado su labor de acuerdo a lo requerido.'));
$pdf-> ln(10);
$pdf->SetLeftMargin(50);
$pdf->SetRightMargin(15);
$pdf->Write(6,utf8_decode('Es cuanto certifico en honor a la verdad para fines que convengan al interesado.'));
$pdf-> ln(12);
$pdf->SetFont('Arial','B',11);
$pdf->Cell(0,6,utf8_decode('Cochabamba, '.$fecha_hoy.''),0,0,'C');



#Establecemos el margen inferior: 
$pdf->SetAutoPageBreak(true,4);
 
// Segunda página
 
$pdf->SetFontSize(14);
ob_clean();
$pdf->Output();
?>