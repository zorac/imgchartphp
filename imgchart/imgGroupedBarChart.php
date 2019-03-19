<?php
namespace imgchart;
class imgGroupedBarChart extends imgBarChart
{
    function __construct($width = 200, $height = 200, $ic_account_id = null, $ic_secret_key = null)
    {
        $this->setChartType('g', 'v');
        $this->setDimensions($width, $height);
        $this->setIcAccountId($ic_account_id);
        $this->setIcSecretKey($ic_secret_key);
    }
    public function setHorizontal($isHorizontal = true)
    {
        if($isHorizontal)
        {
            $this->setChartType('g', 'h');
        } else
        {
            $this->setChartType('g', 'v');
        }
    }
}
