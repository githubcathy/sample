<?php

$orderNo = $_GET["orderNo"];
//echo $orderNo;

function float2rat($n, $tolerance = 1.e-6) {
    $h1=1; $h2=0;
    $k1=0; $k2=1;
    $b = 1/$n;
    do {
        $b = 1/$b;
        $a = floor($b);
        $aux = $h1; $h1 = $a*$h1+$h2; $h2 = $aux;
        $aux = $k1; $k1 = $a*$k1+$k2; $k2 = $aux;
        $b = $b-$a;
    } while (abs($n-$h1/$k1) > $n*$tolerance);

    return "$h1/$k1";
}


require("pdf/fpdf.php");
$pdf = new FPDF();

$j = $_GET["j"];
$q = 0;

for ($m = 1; $m <= $j; $m++)
{
	$hh[$m] = $_GET["hh".$m];
	$hhval[$m] = $_GET["hhval".$m];
	$sp[$m] = $_GET["sp".$m];
	$sl[$m] = $_GET["sl".$m];
	$val[$m] = $_GET["val".$m];
	
	//echo "hh=".$hh[$m]." sp=".$sp[$m]." sl=".$sl[$m]." val=".$val[$m]."<br>";
	//echo "hhval=".$hhval[$m]." spval=".$spval[$m]." slval=".$slval[$m]." valval=".$valval[$m]."<br>";
	$labelID = $hhval[$m];
	//echo "labelID=".$labelID;
	include("getValue.php");
	
//echo "qty = ".$qty;

for($n = 1; $n <= $qty; $n++)

{
	$q = $q + 1;
		
if($val[$m] == "true")
{
	//echo "val1=".$val[$m]."<br>";

	$pdf -> Addpage();
	
	$pdf->	SetXY(7,7);
	$pdf -> SetFont("Arial", "", "20");
	$pdf -> Cell(0,10,$sidemark);
	
	$pdf->	SetXY(80,7);
	$pdf -> SetFont("Arial", "", "20");
	$pdf -> Cell(0,10,date("m/d/y"));
	
	$pdf->	SetXY(120,7);
	$pdf -> SetFont("Arial", "", "20");
	$pdf -> Cell(0,10,$PO);
	
	
	$pdf->	SetXY(164,7);
	$pdf -> SetFont("Arial", "", "20");
	$pdf -> Cell(0,10,$orderNo);
	
	$pdf->	SetXY(7,15);
	$pdf -> SetFont("Arial", "", "20");
	$pdf -> Cell(0,10,"Val Width: ".$vwidth);
	
	$pdf->	SetXY(108,15);
	$pdf -> SetFont("Arial", "", "20");
	$pdf -> Cell(0,10,"mt: ");
	
	$pdf->	SetXY(120,15);
	$pdf -> SetFont("Arial", "B", "20");
	$pdf -> Cell(0,10,$mt);
	
	$pdf->	SetXY(7,23);
	$pdf -> SetFont("Arial", "", "20");
	$pdf -> Cell(0,10,$size);
	
	$pdf->	SetXY(78,23);
	$pdf -> SetFont("Arial", "", "20");
	$pdf -> Cell(0,10,$color);
	
	$pdf->	SetXY(130,23);
	$pdf -> SetFont("Arial", "", "20");
	$pdf -> Cell(0,10,"RTN Width:  ".$rtn);
	
	$pdf->	SetXY(7,31);
	$pdf -> SetFont("Arial", "B", "20");
	$pdf -> Cell(0,10,$blinds."       ".$type);
	
	$pdf->	SetXY(7,39);
	$pdf -> SetFont("Arial", "B", "20");
	$pdf -> Cell(0,10,$customer);
	
	$pdf->	SetXY(118,39);
	$pdf -> SetFont("Arial", "", "20");
	$pdf -> Cell(0,10,"Order");
	
	$pdf->	SetXY(145,39);
	$pdf -> SetFont("Arial", "", "20");
	$pdf -> Cell(0,10,$q);
	
	$pdf->	SetXY(159,39);
	$pdf -> SetFont("Arial", "", "20");
	$pdf -> Cell(0,10,"of");
	
	$pdf->	SetXY(175,39);
	$pdf -> SetFont("Arial", "", "20");
	$pdf -> Cell(0,10,$l);
	
	$pdf->	SetXY(191,39);
	$pdf -> SetFont("Arial", "", "20");
	$pdf -> Cell(0,10,"VAL");

	$pdf->	SetXY(195,51);
	$pdf -> SetFont("Arial", "", "20");
	$pdf->Cell(8,8,'',1,1,'C');
	
}

if($sl[$m] == "true")
{
	//echo "sl1=".$sl[$m]."<br>";
	$pdf -> Addpage();

	
	$pdf->	SetXY(7,7);
	$pdf -> SetFont("Arial", "", "20");
	$pdf -> Cell(0,10,$sidemark);
	
	$pdf->	SetXY(80,7);
	$pdf -> SetFont("Arial", "", "20");
	$pdf -> Cell(0,10,date("m/d/y"));
	
	$pdf->	SetXY(120,7);
	$pdf -> SetFont("Arial", "", "20");
	$pdf -> Cell(0,10,$PO);
	
	
	$pdf->	SetXY(164,7);
	$pdf -> SetFont("Arial", "", "20");
	$pdf -> Cell(0,10,$orderNo);
  
	$pdf->	SetXY(7,15);
	$pdf -> SetFont("Arial", "", "20");
	$pdf -> Cell(0,10,"W: ");
  
	$pdf->	SetXY(17,15);
	$pdf -> SetFont("Arial", "", "20");
	$pdf -> Cell(0,10,$valwidth);
  
	$pdf->	SetXY(62,15);
	$pdf -> SetFont("Arial", "", "20");
	$pdf -> Cell(0,10,"H: ");
  
	$pdf->	SetXY(72,15);
	$pdf -> SetFont("Arial", "", "20");
	$pdf -> Cell(0,10,$valheight);
	
	$pdf->	SetXY(107,15);
	$pdf -> SetFont("Arial", "", "20");
	$pdf -> Cell(0,10,"mt: ");
	
	$pdf->	SetXY(118,15);
	$pdf -> SetFont("Arial", "B", "20");
	$pdf -> Cell(0,10,$mt);
	
	$pdf->	SetXY(7,23);
	$pdf -> SetFont("Arial", "", "20");
	$pdf -> Cell(0,10,"Slat: slat#: ".$lab[$indx]["slat"]);
	
	$pdf->	SetXY(107,23);
	$pdf -> SetFont("Arial", "", "20");
	$pdf -> Cell(0,10,$color);
	
	$pdf->	SetXY(7,31);
	$pdf -> SetFont("Arial", "B", "20");
	$pdf -> Cell(0,10,$blinds);
  
	$pdf->	SetXY(7,39);
	$pdf -> SetFont("Arial", "B", "20");
	$pdf -> Cell(0,10,$customer);
	
	$pdf->	SetXY(116,39);
	$pdf -> SetFont("Arial", "", "20");
	$pdf -> Cell(0,10,"Order");
	
	$pdf->	SetXY(142,39);
	$pdf -> SetFont("Arial", "", "20");
	$pdf -> Cell(0,10,$q);
	
	$pdf->	SetXY(157,39);
	$pdf -> SetFont("Arial", "", "20");
	$pdf -> Cell(0,10,"of");
	
	$pdf->	SetXY(173,39);
	$pdf -> SetFont("Arial", "", "20");
	$pdf -> Cell(0,10,$l);
  
	$pdf->	SetXY(191,39);
	$pdf -> SetFont("Arial", "", "20");
	$pdf -> Cell(0,10,"SL");
	
	$pdf->	SetXY(193,50);
	$pdf -> SetFont("Arial", "", "20");
	$pdf->Cell(8,8,'',1,1,'C');

}

if($sp[$m] == "true")
{
	//echo "sp1=".$sp[$m]."<br>";
	$pdf -> Addpage();
	
	$pdf->	SetXY(7,7);
	$pdf -> SetFont("Arial", "", "20");
	$pdf -> Cell(0,10,$sidemark);
	
	$pdf->	SetXY(80,7);
	$pdf -> SetFont("Arial", "", "20");
	$pdf -> Cell(0,10,date("m/d/y"));
	
	$pdf->	SetXY(120,7);
	$pdf -> SetFont("Arial", "", "20");
	$pdf -> Cell(0,10,$PO);
	
	
	$pdf->	SetXY(164,7);
	$pdf -> SetFont("Arial", "", "20");
	$pdf -> Cell(0,10,$orderNo);
	
	$pdf->	SetXY(7,15);
	$pdf -> SetFont("Arial", "", "20");
	$pdf -> Cell(0,10,"W: ");
	
	$pdf->	SetXY(17,15);
	$pdf -> SetFont("Arial", "", "20");
	$pdf -> Cell(0,10,$valwidth);
	
	$pdf->	SetXY(62,15);
	$pdf -> SetFont("Arial", "", "20");
	$pdf -> Cell(0,10,"H: ");
	
	$pdf->	SetXY(72,15);
	$pdf -> SetFont("Arial", "", "20");
	$pdf -> Cell(0,10,$valheight);
	
	$pdf->	SetXY(107,15);
	$pdf -> SetFont("Arial", "", "20");
	$pdf -> Cell(0,10,"mt: ");
	
	$pdf->	SetXY(118,15);
	$pdf -> SetFont("Arial", "B", "20");
	$pdf -> Cell(0,10,$mt);
	
	$pdf->	SetXY(7,23);
	$pdf -> SetFont("Arial", "B", "20");
	$pdf -> Cell(0,10,$blinds);
	
	$pdf->	SetXY(106,23);
	$pdf -> SetFont("Arial", "", "20");
	$pdf -> Cell(0,10,$color);
	
	$pdf->	SetXY(7,31);
	$pdf -> SetFont("Arial", "B", "20");
	$pdf -> Cell(0,10,$customer);
	
	$pdf->	SetXY(116,31);
	$pdf -> SetFont("Arial", "", "20");
	$pdf -> Cell(0,10,"Order");
	
	$pdf->	SetXY(142,31);
	$pdf -> SetFont("Arial", "", "20");
	$pdf -> Cell(0,10,$q);
	
	$pdf->	SetXY(158,31);
	$pdf -> SetFont("Arial", "", "20");
	$pdf -> Cell(0,10,"of");
	
	$pdf->	SetXY(174,31);
	$pdf -> SetFont("Arial", "", "20");
	$pdf -> Cell(0,10,$l);
	
	$pdf->	SetXY(191,31);
	$pdf -> SetFont("Arial", "", "20");
	$pdf -> Cell(0,10,"SP");
	
    $pdf ->	SetXY(193,42);
	$pdf -> SetFont("Arial", "", "20");
	$pdf -> Cell(8,8,'',1,1,'C');

}

if($hh[$m]== "true")
{
	
	//echo "hh1=".$hh[$m]."<br>";
	$pdf -> Addpage();
	
	
	$pdf->	SetXY(7,7);
	$pdf -> SetFont("Arial", "", "20");
	$pdf -> Cell(0,10,$sidemark);
	
	$pdf->	SetXY(80,7);
	$pdf -> SetFont("Arial", "", "20");
	$pdf -> Cell(0,10,date("m/d/y"));
	
	$pdf->	SetXY(120,7);
	$pdf -> SetFont("Arial", "", "20");
	$pdf -> Cell(0,10,$PO);
	
	
	$pdf->	SetXY(164,7);
	$pdf -> SetFont("Arial", "", "20");
	$pdf -> Cell(0,10,$orderNo);
	
	$pdf->	SetXY(7,15);
	$pdf -> SetFont("Arial", "", "20");
	$pdf -> Cell(0,10,"W: ");
	
	$pdf->	SetXY(17,15);
	$pdf -> SetFont("Arial", "", "20");
	$pdf -> Cell(0,10,$valwidth);
	
	$pdf->	SetXY(62,15);
	$pdf -> SetFont("Arial", "", "20");
	$pdf -> Cell(0,10,"H: ");
	
	$pdf->	SetXY(72,15);
	$pdf -> SetFont("Arial", "", "20");
	$pdf -> Cell(0,10,$valheight);
	
	$pdf->	SetXY(107,15);
	$pdf -> SetFont("Arial", "", "20");
	$pdf -> Cell(0,10,"mt: ");
	
	$pdf->	SetXY(118,15);
	$pdf -> SetFont("Arial", "B", "20");
	$pdf -> Cell(0,10,$mt);
	
	$pdf->	SetXY(7,23);
	$pdf -> SetFont("Arial", "", "20");
	$pdf -> Cell(0,10,"Slat: slat#: ".$lab[$indx]["slat"]);
	
	$pdf->	SetXY(107,23);
	$pdf -> SetFont("Arial", "", "20");
	$pdf -> Cell(0,10,$color);
	
	$pdf->	SetXY(7,31);
	$pdf -> SetFont("Arial", "", "20");
	$pdf -> Cell(0,10,"Tilt: ".$tilt1."  ".$lab[$indx]["cordcolor"]);
	
	$pdf->	SetXY(107,31);
	$pdf -> SetFont("Arial", "", "20");
	$pdf -> Cell(0,10,"Headrail: ".$lab[$indx]["headrail"]);
	
	$pdf->	SetXY(7,39);
	$pdf -> SetFont("Arial", "", "20");
	$pdf -> Cell(0,10,"Lilt: ".$lilt1."  ".$lab[$indx]["cordcolor"]);
	
	$pdf->	SetXY(107,39);
	$pdf -> SetFont("Arial", "", "20");
	$pdf -> Cell(0,10,"Ladder:   ".$lab[$indx]["ladder"]);
	
	$pdf->	SetXY(7,47);
	$pdf -> SetFont("Arial", "B", "20");
	$pdf -> Cell(0,10,$blinds."       ".$type);
	
	$pdf->	SetXY(7,55);
	$pdf -> SetFont("Arial", "B", "20");
	$pdf -> Cell(0,10,$customer);
	
	$pdf->	SetXY(117,55);
	$pdf -> SetFont("Arial", "", "20");
	$pdf -> Cell(0,10,"Order");
	
	$pdf->	SetXY(142,55);
	$pdf -> SetFont("Arial", "", "20");
	$pdf -> Cell(0,10,$q);
	
	$pdf->	SetXY(158,55);
	$pdf -> SetFont("Arial", "", "20");
	$pdf -> Cell(0,10,"of");
	
	$pdf->	SetXY(174,55);
	$pdf -> SetFont("Arial", "", "20");
	$pdf -> Cell(0,10,$l);
	
	$pdf->	SetXY(190,55);
	$pdf -> SetFont("Arial", "", "20");
	$pdf -> Cell(0,10,"HH");
	
	$pdf->	SetXY(192,67);
	$pdf -> SetFont("Arial", "", "20");
	$pdf->Cell(8,8,'',1,1,'C');

	
}

}
}
$pdf -> Output();

?>
