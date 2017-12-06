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
     * @param string $html
     * @param string $link
     */
    public function WriteHtml($height, $html, $link = '')
    {
        $this->WriteLn($height, strip_tags($html), $link);
    }

    /**
     *
     * @return float
     */
    public function GetPageHeight()
    {
        $height = $this->h;
        $topMargin = $this->tMargin;
        $bottomMargin = $this->bMargin;

        return (float) ($height - $topMargin - $bottomMargin);
    }

    /**
     *
     * @return float
     */
    public function GetPageWidth()
    {
        $width = $this->w;
        $leftMargin = $this->lMargin;
        $rightMargin = $this->rMargin;

        return (float) ($width - $rightMargin - $leftMargin);
    }
}
