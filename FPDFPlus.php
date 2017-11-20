<?php

namespace rudissaar\fpdf;

use FPDF;

class FPDFPlus extends FPDF
{
    /**
     *
     * @param float|null $height
     * @param string $text
     * @param string $link
     */
    public function WriteLn($height, $text, $link = '')
    {
        $this->Write($height, $text, $link);
        $this->Ln();
    }

    /**
     *
     * @param float|null $height
     * @param string $hmtl
     * @param string $link
     */
    public function WriteHtml($height, $html, $link = '')
    {
        $this->WriteLn($height, strip_tags($html), $link);
    }
}
