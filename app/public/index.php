<?php

require_once ('../vendor/autoload.php');

use FPDF\Fpdf;

echo "Requested URL: " . $_SERVER['REQUEST_URI'];
phpinfo();

$pdf = new PDF();
