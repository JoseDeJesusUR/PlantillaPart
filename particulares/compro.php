<?php
function fixtags($text){
$text = htmlspecialchars($text);
$text = preg_replace("/=/", "=\"\"", $text);
$text = preg_replace("/&quot;/", "&quot;\"", $text);
$tags = "/&lt;(\/|)(\w*)(\ |)(\w*)([\\\=]*)(?|(\")\"&quot;\"|)(?|(.*)?&quot;(\")|)([\ ]?)(\/|)&gt;/i";
$replacement = "<$1$2$3$4$5$6$7$8$9$10>";
$text = preg_replace($tags, $replacement, $text);
$text = preg_replace("/=\"\"/", "=", $text);
return $text;
}
?>
<?php

require('fpdf/fpdf.php');
require('conex.php');
session_start();
header("Cache-control: private"); // IE 6 Fix. 

	
	$cct_cam=$_SESSION['cct_g'];
	$grado_cam=$_SESSION['grado_g'];
	$curp_cam=$_SESSION['curp_g'];
	$paterno_cam=$_SESSION['paterno_g'];
	$materno_cam=$_SESSION['materno_g'];
	$nombre_cam=$_SESSION['nombre_g'];
	
	//////////////////
	
	   $nombre_escuela=$_SESSION['nom_esc'];
	   $domicilio_escuela=$_SESSION['dom_esc'];	


class PDF extends FPDF
{
var $widths;
var $aligns;

function SetWidths($w)
{
	//Set the array of column widths
	$this->widths=$w;
}

function SetAligns($a)
{
	//Set the array of column alignments
	$this->aligns=$a;
}

function Row($data)
{
	//Calculate the height of the row
	$nb=0;
	for($i=0;$i<count($data);$i++)
		$nb=max($nb,$this->NbLines($this->widths[$i],$data[$i]));
	$h=5*$nb;
	//Issue a page break first if needed
	$this->CheckPageBreak($h);
	//Draw the cells of the row
	for($i=0;$i<count($data);$i++)
	{
		$w=$this->widths[$i];
		$a=isset($this->aligns[$i]) ? $this->aligns[$i] : 'L';
		//Save the current position
		$x=$this->GetX();
		$y=$this->GetY();
		//Draw the border
		
		$this->Rect($x,$y,$w,$h);

		$this->MultiCell($w,5,$data[$i],0,$a,'true');
		//Put the position to the right of the cell
		$this->SetXY($x+$w,$y);
	}
	//Go to the next line
	$this->Ln($h);
}

function CheckPageBreak($h)
{
	//If the height h would cause an overflow, add a new page immediately
	if($this->GetY()+$h>$this->PageBreakTrigger)
		$this->AddPage($this->CurOrientation);
}

function NbLines($w,$txt)
{
	//Computes the number of lines a MultiCell of width w will take
	$cw=&$this->CurrentFont['cw'];
	if($w==0)
		$w=$this->w-$this->rMargin-$this->x;
	$wmax=($w-2*$this->cMargin)*1000/$this->FontSize;
	$s=str_replace("\r",'',$txt);
	$nb=strlen($s);
	if($nb>0 and $s[$nb-1]=="\n")
		$nb--;
	$sep=-1;
	$i=0;
	$j=0;
	$l=0;
	$nl=1;
	while($i<$nb)
	{
		$c=$s[$i];
		if($c=="\n")
		{
			$i++;
			$sep=-1;
			$j=$i;
			$l=0;
			$nl++;
			continue;
		}
		if($c==' ')
			$sep=$i;
		$l+=$cw[$c];
		if($l>$wmax)
		{
			if($sep==-1)
			{
				if($i==$j)
					$i++;
			}
			else
				$i=$sep+1;
			$sep=-1;
			$j=$i;
			$l=0;
			$nl++;
		}
		else
			$i++;
	}
	return $nl;
}

function Header()
{


	
}

function Footer()
{
	$this->SetY(-15);
	$this->SetFont('Arial','B',8);
	$this->Cell(100,10,'',0,0,'L');

}

}
/////////////////////////////pagina 1	
	$pdf=new PDF('P','mm','Letter');
	$pdf->Open();
	$pdf->AddPage();
    $pdf->SetFont('Arial','',15);


 $fecha_array=getdate();
if($fecha_array['month']=='January')$fecha_array['month']='Enero';
if($fecha_array['month']=='February')$fecha_array['month']='Febrero';
if($fecha_array['month']=='March')$fecha_array['month']='Marzo';
if($fecha_array['month']=='April')$fecha_array['month']='Abril';
if($fecha_array['month']=='May')$fecha_array['month']='Mayo';
if($fecha_array['month']=='June')$fecha_array['month']='Junio';
if($fecha_array['month']=='July')$fecha_array['month']='Julio';
if($fecha_array['month']=='August')$fecha_array['month']='Agosto';
if($fecha_array['month']=='September')$fecha_array['month']='Setiembre';
if($fecha_array['month']=='October')$fecha_array['month']='Octubre';
if($fecha_array['month']=='Novermber')$fecha_array['month']='Noviembre';
if($fecha_array['month']=='December')$fecha_array['month']='Diciembre';
$fecha=$fecha_array['mday'].'/'.$fecha_array['month'].'/'.$fecha_array['year'];
$hora=$fecha_array['hours'].':'.$fecha_array['minutes'];


 $pdf->SetFont('Arial','',9);
 $pdf->Ln(4);
$pdf->Cell(0,7,'',0,1, 'R');
$pdf->Image('sep.jpg' , 10 ,17, 50 , 15,'JPG');
$pdf->Image('aguila1.jpg' , 15 ,59, 190 , 190,'JPG');


	$pdf->Ln(1);
	 $pdf->SetFont('Arial','B',8.5);
	$pdf->Cell(0,0,'                                       '.utf8_decode(ADMINISTRACIÓN).' FEDERAL DE SERVICIOS EDUCATIVOS EN EL DISTRITO FEDERAL',0,1,'C');
	$pdf->Ln(4);
	$pdf->Cell(0,0,'                                '.utf8_decode(DIRECCIÓN).' GENERAL DE  '.utf8_decode(OPERACIÓN).' DE SERVICIOS EDUCATIVOS',0,1,'C');
	$pdf->Ln(4);
	$pdf->Cell(0,0,'                                '.utf8_decode(COORDINACIÓN).' SECTORIAL DE '.utf8_decode(EDUCACIÓN).' SECUNDARIA',0,1,'C');
	$pdf->Ln(10);


$pdf->SetFillColor(204,204,204);
$pdf->SetDrawColor(204,204,204);
$pdf->SetLineWidth(8);

       
        
$pdf->SetFont('Arial','B',10);
	 $pdf->Cell(0,0,'                       COMPROBANTE DE '.utf8_decode(ASIGNACIÓN).' A 1'.utf8_decode(°).'DE SECUNDARIA',1,1,'C','TRUE');
	$pdf->Ln(10);
	 $pdf->SetFont('Arial','',10);
	$pdf->Cell(0,0,'LA '.utf8_decode(SECRETARÍA).' DE '.utf8_decode(EDUCACIÓN).' '.utf8_decode(PÚBLICA).' INFORMA QUE EL '.utf8_decode(NIÑO).'(A):',0,1, 'L');
	$pdf->Ln(10);
	$pdf->Cell(0,0,$paterno_cam.' '.$materno_cam.' '.$nombre_cam,0,1, 'C');
	$pdf->Ln(1);
    $pdf->Cell(0,0,'____________________________________________________________________________________________________',0,1,'L');
	$pdf->Ln(10);
	$pdf->Cell(0,0,'                 '.'                                                              '.'                                                     '.$curp_cam,15,15);
	$pdf->Cell(0,0,'_______________________                    _______________________                    __________________________________',0,1,'L');
	$pdf->Ln(5);
	$pdf->Cell(0,0,'                  O.P.',0,1,'L');
	

	
	$pdf->Cell(0,0,'                                                                                    FOLIO',0,1,'L');
	$pdf->Cell(0,0,'                                                                                                                                                                CURP',0,1,'L');
	
$pdf->Ln(10	);
	$pdf->Cell(0,0,'FUE ASIGNADO PARA CURSAR EL                             GRADO DE '.utf8_decode('EDUCACIÓN').' SECUNDARIA.',0,1,'L');
	
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(0,0,'                                                                    PRIMER ',0,1,'L');
	$pdf->Ln(0);
	$pdf->Cell(0,0,'                                                                  _________',0,1,'L');
	$pdf->Ln(8);
	$pdf->SetFont('Arial','',10);
	$pdf->Cell(0,0,'EN EL CICLO ESCOLAR',0,1,'L');
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(0,0,'                                            __________',0,1,'L');
	$pdf->Cell(0,0,'                                             2016 -2017',0,1,'L');
	
	$pdf->Ln(8);
	$pdf->SetFont('Arial','',10);
	$pdf->Cell(0,0,'EN LA ESCUELA:               ______________________________________________________________________________',0,1,'L');
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(0,0,'                                             '.$nombre_escuela,15,15);
			$pdf->Ln(8);
			$pdf->SetFont('Arial','',10);
		$pdf->Cell(0,0,'CLAVE DEL PLANTEL:      ______________________________________________________________________________',0,1,'L');
	$pdf->Cell(0,0,'                      '.'                      ',15,15);
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(0,0,'                      '.'                       '.$cct_cam,15,15);
			$pdf->SetFont('Arial','',10);
			$pdf->Ln(8);
		$pdf->Cell(0,0,'TURNO:                              ______________________________________________________________________________',0,1,'L');
		$pdf->SetFont('Arial','B',10);
	$pdf->Cell(0,0,'                      '.'                       '.$turno_escuela,15,15);
			$pdf->Ln(8);
		$pdf->SetFont('Arial','',9);
		$pdf->Cell(0,0,'DOMICILIO DEL PLANTEL:    _______________________________________________________________________________________',0,1,'L');
	$pdf->SetFont('Arial','B',8.5);	
	$pdf->Cell(0,0,'                                                    '.$domicilio_escuela,15,15);
	$pdf->Ln(8);
	$fecha_array=getdate();
if($fecha_array['month']=='January')$fecha_array['month']='ENERO';
if($fecha_array['month']=='February')$fecha_array['month']='FEBRERO';
if($fecha_array['month']=='March')$fecha_array['month']='MARZO';
if($fecha_array['month']=='April')$fecha_array['month']='ABRIL';
if($fecha_array['month']=='May')$fecha_array['month']='MAYO';
if($fecha_array['month']=='June')$fecha_array['month']='JUNIO';
if($fecha_array['month']=='July')$fecha_array['month']='JULIO';
if($fecha_array['month']=='August')$fecha_array['month']='AGOSTO';
if($fecha_array['month']=='September')$fecha_array['month']='SEPTIEMBR';
if($fecha_array['month']=='October')$fecha_array['month']='OCTUBRE';
if($fecha_array['month']=='Novermber')$fecha_array['month']='NOVIEMBRE';
if($fecha_array['month']=='December')$fecha_array['month']='DICIEMBRE';
$fecha=$fecha_array['mday']. ' / '.$fecha_array['month'].' / '.$fecha_array['year'];
$hora=$fecha_array['hours'].':'.$fecha_array['minutes'];
$pdf->SetFont('Arial','',8.5);
$pdf->Cell(0,0,'FECHA DE '.utf8_decode(' IMPRESIÓN: '),0,1,'L');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(0,0,'                                                 '.$fecha.'                                                                           FOLIO:'.$fila1["motivo_camb"].$fila1["folio_cam"],15,15);
$pdf->Ln(10);
$pdf->Cell(0,0,'            '.utf8_decode(COORDINACIÓN).' SECTORIAL DE '.utf8_decode(EDUCACIÓN).' SECUNDARIA',0,1,'C');

$pdf->Ln(30);
$pdf->Cell(0,0,'        _______________________________________________',0,1,'C');
$pdf->Ln(5);
$pdf->SetFont('Arial','B',10);

$pdf->Cell(0,0,'        LIC. '.utf8_decode(RENÉ).' M. FRANCO '.utf8_decode(RODRÍGUEZ),0,1,'C');

$pdf->Ln(10);

$pdf->Cell(0,0,utf8_decode('Después').' de confirmar la '.utf8_decode('aceptación').' de la escuela asignada, '.utf8_decode('deberá ').'presentarse al plantel de manera inmediata',0,1,'L');
$pdf->Ln(5);
$pdf->SetFont('Arial','',9);
$pdf->Cell(0,0,'con la siguiente '.utf8_decode('documentación').' en original* y copia: ',0,1,'L');
$pdf->Ln(8);
$pdf->Cell(0,0,'          - Copia certificada del Acta de Nacimiento o '.utf8_decode('Cédula').' de Identidad personal (emitida por la SEGOB).',0,1,'L');
$pdf->Ln(5);
$pdf->Cell(0,0,'          - Constancia de la CURP.',0,1,'L');
$pdf->Ln(5);
$pdf->Cell(0,0,'          - Examen '.utf8_decode('médico').'.',0,1,'L');
$pdf->Ln(5);
$pdf->Cell(0,0,'          - 4 '.utf8_decode('fotografías ').utf8_decode('tamaño '). 'infantil (a color o blanco y negro).',0,1,'L');
$pdf->Ln(5);
$pdf->Cell(0,0,'          - Certificado de '.utf8_decode('Educación Primaria').'.',0,1,'L');
$pdf->Ln(8);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(0,0,' IMPORTANTE:',0,1,'L');
$pdf->Ln(5);
$pdf->SetFont('Arial','',9);
$pdf->Cell(0,0,' La falta de '.utf8_decode('algún').' documento no es condicionante para realizar la '.utf8_decode('inscripción').',  pero  el padre de familia o tutor '.utf8_decode('firmarán').' una',0,1,'L');
$pdf->Ln(5);
$pdf->Cell(0,0,' Carta-Compromiso Temporal para la posterior entrega de la '.utf8_decode('documentación').' faltante.',0,1,'L');
$pdf->Ln(6);
$pdf->SetFont('Arial','',9);

$pdf->Cell(0,0,' *Los documentos originales, no '.utf8_decode('permanecerán').' en el plantel.',0,1,'L');


$pdf->Ln(12);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(0,0,'LA '.utf8_decode('REALIZACIÓN').' DE ESTE '.utf8_decode('TRÁMITE').' ES GRATUITO',0,1,'C');

$pdf->Output();
	
?>