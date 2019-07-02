<?php
namespace ImgChart;
class ImgStackedBarChart extends ImgBarChart
{
    function __construct($width = 200, $height = 200, $ic_account_id = null, $ic_secret_key = null)
    {
        $this->setChartType('s', 'v');
        $this->setDimensions($width, $height);
        $this->setIcAccountId($ic_account_id);
        $this->setIcSecretKey($ic_secret_key);
    }
    public function setHorizontal($isHorizontal = true)
    {
        if($isHorizontal)
        {
            $this->setChartType('s', 'h');
        }
        else
        {
            $this->setChartType('s', 'v');
        }
    }
}
