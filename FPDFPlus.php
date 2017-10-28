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
    public function write($height, $text, $link = '')
    {
        $this->Write($height, $text, $link);
    }

    /**
     *
     * @param float|null $height
     */
    public function ln($height = null)
    {
        $this->Ln($height);
    }

    /**
     *
     * @param float|null $height
     * @param string $text
     * @param string $link
     */
    public function writeLn($height, $text, $link = '')
    {
        $this->write($height, $text, $link);
        $this->ln();
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
