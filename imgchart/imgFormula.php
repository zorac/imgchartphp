<?php
namespace imgchart;
class imgFormula extends imgChart
{
    /**
     * @param $width Integer It is set by default to 0 because the server will size the png automatically
     * @param $height Integer It is set by default to 0 because the server will size the png automatically
     * @param $ic_account_id String imagecharts enterprise account id
     * @param $ic_secret_key String imagecharts enterprise secret key
     */
    function __construct($width = 0, $height = 0, $ic_account_id = null, $ic_secret_key = null)
    {
        $this->setDimensions($width, $height);
        $this->setProperty('cht','tx');
        $this->setIcAccountId($ic_account_id);
        $this->setIcSecretKey($ic_secret_key);
    }

    public function setLatexCode($latexCode)
    {
        $this->setProperty('chl', urlencode($latexCode));
    }
    public function setTextColor($textColor)
    {
        $this->setProperty('chco', $textColor);
    }

    public function getImgCode()
    {
        $code = '<img src="';
        $code .= $this->getUrl().'"';
        $code .= 'alt="img-chart-php Chart"';
        if($this->getWidth())
            $code .= ' width='.$this->getWidth();
        if($this->getHeight())
            $code .= ' height='.$this->getHeight();
        $code .= '>';
        print($code);
    }
}
