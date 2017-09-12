<?php

namespace kevinmurda;

use \FPDF as BaseFPDF;

class FPDF extends BaseFPDF
{
    public function __construct()
    {
        parent::construct();
    }
}
