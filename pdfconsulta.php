
<?php

// Incluye la biblioteca FPDF
require('fpdf186/fpdf.php');

class PDF extends FPDF {
    private $totalPages;

    function setTotalPages($totalPages) {
        $this->totalPages = $totalPages;
    }

    function Footer() {
        $this->SetY(-15);
        $this->SetFont('Arial', 'I', 8);
        $this->Cell(0, 10, utf8_decode('Página ') . $this->PageNo() . ' de ' . $this->totalPages, 0, 0, 'C');
        
    }
    
}


// Crea una instancia de la clase PDF
$pdf = new FPDF();
$pdf->AddPage('P', 'Letter'); //, true, true, 'UTF-8'
$pdf->AliasNbPages(); //mostrar el número total de páginas en el encabezado o pie 
$pdf->SetAutoPageBreak(true, 10);
$pdf->SetFont('Arial', '', 10);



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
$pdf->Cell(34 ,5,'[1234567]',0,1);//end of line

//celda vacia para espacio
//Cell(ancho , alto , text , borde , line final , [align] )
$pdf->Cell(189 ,10,'',0,1);//end of line



// Obtiene el ancho de la página actual
$pageWidth = $pdf->GetPageWidth();

// Ejecuta una consulta SQL para obtener datos desde la base de datos
include ("conexion.php"); // Incluye el archivo de conexión a la base de datos
global $conex;
$sql = mysqli_query($conex, "SELECT * FROM usuario");

// Calcula la posición horizontal para centrar la tabla
$comenzarx = ($pageWidth - (40 * 3)) / 2; // 40 es el ancho de cada celda
// Configura el número total de páginas en la instancia de PDF

// Agrega los datos al PDF
$pdf->SetFont('Arial', '', 10);
while ($row = mysqli_fetch_assoc($sql)) {
    // Establece la posición horizontal para comenzar la tabla
    $pdf->SetX($comenzarx);
    $pdf->Cell(40, 5, utf8_decode($row['nombre']), 1);
    $pdf->Cell(40, 5, utf8_decode($row['apat']), 1);
    $pdf->Cell(40, 5, utf8_decode($row['amat']), 1);
    // Agrega más campos según sea necesario
    $pdf->Ln();
}
$pdf->SetY(-35);
$pdf->Cell(0, 10, utf8_decode('Página ') . $pdf->PageNo(), 0, 0, 'C');
$pdf->Output('reporte.pdf', 'I'); // Esto descarga el PDF como 'reporte.pdf'
mysqli_close($conexion);

?>



