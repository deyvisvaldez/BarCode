<?php
require_once __DIR__ . '/../vendor/autoload.php';

use \Milon\Barcode\DNS1D;
use \Milon\Barcode\DNS2D;

error_reporting(E_ALL);
ini_set('display_errors', '1');
ini_set('error_reporting', E_ALL);


$d1 = new DNS1D();
$d1->setStorPath(__DIR__."/cache/");

//echo $d1->getBarcodePNG("4", "C39+");
echo 'DNS1D';
echo '<br>';
echo $d1->getBarcodeSVG("4445645656", "PHARMA2T");
echo '<br>';
echo $d1->getBarcodeHTML("9780691147727", "EAN13");
echo '<br>';
echo $d1->getBarcodeHTML("4445645656", "PHARMA2T");
echo '<br>';
//echo '<img src="data:image/png,' . $d1->getBarcodePNG("4", "C39+") . '" alt="barcode"   />';
//echo $d1->getBarcodePNGPath("4445645656", "PHARMA2T");
echo '<img src="data:image/png;base64,' . $d1->getBarcodePNG("4", "C39+") . '" alt="barcode"   />';
echo '<br>';

echo $d1->getBarcodeSVG("4445645656", "C39");
echo '<br>';
echo 'Width and Height example';
echo '<br>';
echo $d1->getBarcodeSVG("4445645656", "PHARMA2T",3,33);
echo $d1->getBarcodeHTML("4445645656", "PHARMA2T",3,33);
//echo '<img src="' . $d1->getBarcodePNG("4", "C39+",3,33) . '" alt="barcode"   />';
//echo $d1->getBarcodePNGPath("4445645656", "PHARMA2T",3,33);
echo '<img src="data:image/png;base64,' . $d1->getBarcodePNG("4", "C39+",3,33) . '" alt="barcode"   />';

echo '<br>';
echo 'Color';
echo '<br>';
echo $d1->getBarcodeSVG("4445645656", "PHARMA2T",3,33,"green");
echo $d1->getBarcodeHTML("4445645656", "PHARMA2T",3,33,"green");
//echo '<img src="' . $d1->getBarcodePNG("4", "C39+",3,33,array(1,1,1)) . '" alt="barcode"   />';
//echo $d1->getBarcodePNGPath("4445645656", "PHARMA2T",3,33,array(255,255,0));
echo '<img src="data:image/png;base64,' . $d1->getBarcodePNG("4", "C39+",3,33,array(1,1,1)) . '" alt="barcode"   />';
echo '<br>';

echo 'More Examples';
echo $d1->getBarcodeHTML("4445645656", "C39");
echo $d1->getBarcodeHTML("4445645656", "C39+");
echo $d1->getBarcodeHTML("4445645656", "C39E");
echo $d1->getBarcodeHTML("4445645656", "C39E+");
echo $d1->getBarcodeHTML("4445645656", "C93");
echo $d1->getBarcodeHTML("4445645656", "S25");
echo $d1->getBarcodeHTML("4445645656", "S25+");
echo $d1->getBarcodeHTML("4445645656", "I25");
echo $d1->getBarcodeHTML("4445645656", "I25+");
echo $d1->getBarcodeHTML("4445645656", "C128");
echo $d1->getBarcodeHTML("4445645656", "C128A");
echo $d1->getBarcodeHTML("4445645656", "C128B");
echo $d1->getBarcodeHTML("4445645656", "C128C");
echo $d1->getBarcodeHTML("44455656", "EAN2");
echo $d1->getBarcodeHTML("4445656", "EAN5");
echo $d1->getBarcodeHTML("4445", "EAN8");
echo $d1->getBarcodeHTML("4445", "EAN13");
echo $d1->getBarcodeHTML("4445645656", "UPCA");
echo $d1->getBarcodeHTML("4445645656", "UPCE");
echo $d1->getBarcodeHTML("4445645656", "MSI");
echo $d1->getBarcodeHTML("4445645656", "MSI+");
echo $d1->getBarcodeHTML("4445645656", "POSTNET");
echo $d1->getBarcodeHTML("4445645656", "PLANET");
echo $d1->getBarcodeHTML("4445645656", "RMS4CC");
echo $d1->getBarcodeHTML("4445645656", "KIX");
echo $d1->getBarcodeHTML("4445645656", "IMB");
echo $d1->getBarcodeHTML("4445645656", "CODABAR");
echo $d1->getBarcodeHTML("4445645656", "CODE11");
echo $d1->getBarcodeHTML("4445645656", "PHARMA");
echo $d1->getBarcodeHTML("4445645656", "PHARMA2T");
echo '<br>';
echo '<br>';

$d2 = new DNS2D();
$d2->setStorPath(__DIR__."/cache/");

echo 'DNS2D';
echo '<br>';
echo $d2->getBarcodeHTML("4445645656", "QRCODE");
echo '<br>';
//echo $d2->getBarcodePNGPath("4445645656", "PDF417");
echo '<br>';
echo $d2->getBarcodeSVG("4445645656", "DATAMATRIX");
echo '<br>';
echo '<img src="data:image/png;base64,' . $d2->getBarcodePNG("4", "PDF417") . '" alt="barcode"   />';
echo '<br>';


