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

use rudissaar\fpdf\FPDF;

...

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 15);
$pdf->Cell(40, 10, 'Hello World');
$pdf->Output('F', '/tmp/hello.pdf');

...
```
### FPDFPlus (enchanted class)

This package comes with extra methods that can be very useful for you.

View source: [FPDFPlus](https://github.com/rudissaar/yii2-fpdf/blob/master/FPDFPlus.php)

#### Basic usage
```
<?php

...

use rudissaar\fpdf\FPDFPlus;

...

$pdf = new FPDFPlus();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 15);
$pdf->WriteLnEncoded(10, 'Apple: £10');
$pdf->Output('F', '/tmp/price.pdf');

...
```


## Reference Manual

http://www.fpdf.org/en/doc/index.php
