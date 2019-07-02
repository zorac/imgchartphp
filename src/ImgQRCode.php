<?php
namespace ImgChart;
class ImgQRCode extends ImgChart
{

    function __construct($width = 150, $height = 150, $ic_account_id = null, $ic_secret_key = null)
    {
        $this->setDimensions($width, $height);
        $this->setProperty('cht','qr');
        $this->setIcAccountId($ic_account_id);
        $this->setIcSecretKey($ic_secret_key);
    }

    public function setQRCode($QRCode)
    {
        $this->setProperty('chl', urlencode($QRCode));
    }
    /**
     * @param $newOutputEncoding String Please refer to the documentation for the acceptable values
     */
    public function setOutputEncoding($newOutputEncoding)
    {
        $this->setProperty('choe', $newOutputEncoding);
    }
    /**
     * @param $newErrorCorrectionLevel String Please refer to the documentation for the acceptable values
     * @param $newMargin Integer Please refer to the documentation for the acceptable values
     */
    public function setErrorCorrectionLevel($newErrorCorrectionLevel, $newMargin)
    {
        $this->setProperty('chld', $newErrorCorrectionLevel.'|'.$newMargin);
    }
}
