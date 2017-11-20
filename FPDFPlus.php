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
    public function writeLn($height, $text, $link = '')
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
    public function writeHtml($height, $html, $link = '')
    {
        $this->writeLn($height, strip_tags($html), $link);
    }
}
