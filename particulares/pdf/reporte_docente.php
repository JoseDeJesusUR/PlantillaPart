<?php header('Content-Type: text/html; charset=UTF-8'); 


  // $string = htmlentities($string, ENT_QUOTES,'UTF-8'); // así de sencillo

   //también podrías usar 
  // $string = htmlentities($string, ENT_QUOTES | ENT_HTML401, 'UTF-8')  // 

?>
<?php


require('fpdf/fpdf.php');
require('conexion.php');
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
// Logo
$this->Image('sep.jpg',10,12,50);
$this->Image('sep2.jpg',155,0,100);


// Arial bold 15
$this->SetFont('Arial','B',15);
// Move to the right
$this->Cell(80);
// Title
//$this->Cell(30,10,'Title',0,0,'C');
// Line break
$this->Ln(20);
	
}

function Footer()
{
    // Go to 1.5 cm from bottom
    $this->SetY(-15);
    // Select Arial italic 8
    $this->SetFont('Arial','I',8);
    // Print current and total page numbers
    $this->Cell(0,10,'P'.utf8_decode(á).'gina. '.$this->PageNo().'/{nb}',0,0,'C');
}
}

/////////////////////////////pagina 1	
	

	
	$paciente= $_GET['id'];
	$con = new DB;
	$pacientes = $con->conectar();	
	$pdf=new PDF('L','mm','Letter');
	$pdf->Open();
	$pdf->AddPage();
    $pdf->SetFont('Arial','',15);
	
	

	
	/////////////////////////////	
	//	$pdf->AddPage();
    $usuario_doc= $_GET['rfc_do'];
	$con = new DB;
	$pacientes = $con->conectar();	
	
	$strConsulta = "SELECT * from datos_ where cct = '$usuario_doc'";
	
	$pacientes = mysql_query($strConsulta);
	
	//$fila = mysql_fetch_array($pacientes);
	
    $pdf->SetFont('Arial','',10);
    $pdf->Cell(0,25,'PLANTILLA DE PERSONAL DOC'.utf8_decode(É).'NTE CCT: '."$usuario_doc" ,0,1,"C");
	$pdf->Ln(0);

	$pdf->SetWidths(array(30,35,50, 34, 34, 60));
	$pdf->SetFont('Arial','B',10);

		for($i=0;$i<1;$i++)
			{
				$pdf->SetFillColor(200);
				$pdf->Row(array('RFC','ACTUALIZACI'.utf8_decode(Ó).'N', 'NOMBRE', 'PATERNO', 'MATERNO', 'TIPO DOCENTE'));
				
			}
	
	$historial = $con->conectar();	
	$strConsulta = "SELECT * FROM datos_per
	    WHERE cct = '$usuario_doc' and tipo_personal='DOCENTE' AND status_captura='1' order by rfc";
	
	$historial = mysql_query($strConsulta);
	$numfilas = mysql_num_rows($historial);
	
	for ($i=0; $i<$numfilas; $i++)
		{
			$fila = mysql_fetch_array($historial);
			$pdf->SetFont('Arial','',8);
			
			if($i%2 == 1)
			{
				$pdf->SetFillColor(300);
    			$pdf->SetTextColor(0);
		        $pdf->Row(array($fila['rfc'],$fila['actualizacion'],$fila['nombre'],utf8_decode($fila['ap_pat']), 
				                $fila['ap_mat'], $fila['tipo_docente'])); 	
			
			}
			else
			{
				$pdf->SetFillColor(300);
    			$pdf->SetTextColor(0);
				$pdf->Row(array($fila['rfc'],$fila['actualizacion'],$fila['nombre'],utf8_decode($fila['ap_pat']), 
				$fila['ap_mat'] ,$fila['tipo_docente']));
			}
		}
/*		
// Set font
$pdf->Ln(5);
$pdf->SetFont('Arial','B',12);
// Move to 8 cm to the right
$pdf->Cell(50);
$pdf->Cell(50,40,'',1,1,'C');

$pdf->Cell(50);
$pdf->Cell(50,10,'Sello Escuela',0,1,'C');

		//$pdf->Image('sep.jpg',100,50,40);
*/
/////////////////////////////////////////////
$pdf->Ln(10);
$pdf->SetFont('Arial','',10);
$pdf->Cell(50);
$pdf->Cell(50,35,'',1,0,'C');
$pdf->Cell(50,35,'',0,0,'C');
$pdf->Cell(50,35,'',1,1,'C');

$pdf->Cell(50);
$pdf->Cell(50,5,'Sello Escuela',0,0,'C');
$pdf->Cell(50,5,'',0,0,'C');
$pdf->Cell(50,5,'Sello Zona Escolar',0,1,'C');
/////////////////////////////////////////////


		
$pdf->AliasNbPages();
$pdf->Output();
?>