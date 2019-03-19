<?php
namespace imgchart;
/**
 * @brief 3-dimensional Pie Chart
 */
class imgPie3DChart extends imgPieChart
{
    function __construct($width = 500, $height = 200, $ic_account_id = null, $ic_secret_key = null)
    {
        $this->setProperty('cht', 'p3');
        $this->setDimensions($width, $height);
        $this->setIcAccountId($ic_account_id);
        $this->setIcSecretKey($ic_secret_key);
    }
}
