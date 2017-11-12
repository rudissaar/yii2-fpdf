# yii2-fpdf

FPDF plugin and wrapper for Yii2 framework.

## Getting Started

### FPDF

`FPDF` is copy of [FPDF](http://www.fpdf.org/) class and it has all methods and properties like original one.  
To include FPDF class add following line to your PHP file:

`use rudissaar\fpdf\FPDF;`

After that you can use FPDF class anywhere in your file or inherit another class from it.

#### Basic usage
```
<?php

...

use rudissaar/fpdf/FPDF;

...

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 15);
$pdf->Cell(40, 10, 'Hello World');
$pdf->Output('F', '/tmp/hello.pdf');

...
```

## Reference Manual

http://www.fpdf.org/en/doc/index.php
