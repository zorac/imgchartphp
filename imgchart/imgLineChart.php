<?php
namespace imgchart;
class imgLineChart extends imgChart
{
    public function __construct($width = 200, $height = 200, $ic_account_id = null, $ic_secret_key = null)
    {
        $this->setProperty('cht', 'lc');
        $this->setDimensions($width, $height);
        $this->setIcAccountId($ic_account_id);
        $this->setIcSecretKey($ic_secret_key);
    }

    public function getUrl()
    {
        $retStr = parent::getUrl();
        return $retStr;
    }
}
