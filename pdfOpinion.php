<?php
// Incluye la biblioteca FPDF
require('fpdf186/fpdf.php');

// Crea una instancia de la clase PDF
$pdf = new FPDF();
$pdf->AddPage('P', 'Letter');
$pdf->SetFont('Arial', 'B', 10);
//cabecera del pdf
//Cell(ancho , alto , text , borde , line final , [align x y ] )
$pdf->Cell(130 ,5,utf8_decode('REGISTRO DE USUARIOS.Compañia2295'),0,0);
$pdf->Cell(59 ,5,'REPORTE',0,1);//end of line

//set font to arial, regular, 12pt
$pdf->SetFont('Arial','',12);

$pdf->Cell(130 ,5,'[Calle Murillo]',0,0);
$pdf->Cell(59 ,5,'',0,1);//end of line

$pdf->Cell(130 ,5,'[La paz, Bolivia, 2295]',0,0);

$fecha_actual = date('d/m/Y');
$pdf->Cell(25 ,5,'Fecha',0,0);
$pdf->Cell(34, 5, $fecha_actual, 0, 1);;//end of line

$pdf->Cell(130 ,5,'Cel [62329250]',0,0);
$pdf->Cell(40 ,5,utf8_decode('Número de reporte'),0,0);
$pdf->Cell(34 ,5,'[123]',0,1);//end of line

$pdf->Cell(130 ,5,utf8_decode('Nombre del responsable [Tomás Alvarez Daza]'),0,0);
$pdf->Cell(34 ,5,'ID de reporte:',0,0);
$pdf->Cell(34 ,5,'[1234567]',0,1);//end cabecera

$pdf->SetFont('Arial', 'B', 14);
$pdf->Cell(0, 10, 'Registro de opiniones', 0, 1, 'C'); // 0, 10 es el ancho y alto de la celda
$pdf->SetFont('Arial','',12);

// Agrega una fila de cabecera a la tabla
$pdf->SetFont('Arial', 'B', 14);
$pdf->Cell(40, 10, 'Nombre', 1, 0, 'C');
$pdf->Cell(50, 10, utf8_decode('Correo Electrónico'), 1, 0, 'C');
$pdf->Cell(100, 10, utf8_decode('Opinión'), 1, 0, 'C');
$pdf->SetFont('Arial','',12);
$pdf->Ln();
// Obtén el ancho de la página actual
$pageWidth = $pdf->GetPageWidth();

// Ejecuta una consulta SQL para obtener datos desde la base de datos
include ("conexion.php"); // Incluye el archivo de conexión a la base de datos
global $conex;
$sql = mysqli_query($conex, "SELECT * FROM tablaOpinion");

// Calcula la posición horizontal para centrar la tabla
//$comenzarx = ($pageWidth - (40 * 3)) / 2; // 40 es el ancho de cada celda

// Agrega los datos al PDF
while ($row = mysqli_fetch_assoc($sql)) {
    // Establece la posición horizontal para comenzar la tabla
    //$pdf->SetX($comenzarx);
    $pdf->Cell(40, 5, utf8_decode($row['nombre']), 1);
    $pdf->Cell(50, 5, utf8_decode($row['correo']), 1);
    $pdf->Cell(100, 5, utf8_decode($row['opinion']), 1);
    // Agrega más campos según sea necesario
    $pdf->Ln();
}


$pdf->SetY(-35);
$pdf->SetFont('Arial', 'I', 8);
$pdf->Cell(0, 10, utf8_decode('Página ') . $pdf->PageNo() . ' de ' . $totalPages, 0, 0, 'C');




// Salida del PDF: descarga el archivo en lugar de mostrarlo en el navegador
$pdf->Output('reporte.pdf', 'I'); // Esto descarga el PDF como 'reporte.pdf'
mysqli_close($conexion);
?>



