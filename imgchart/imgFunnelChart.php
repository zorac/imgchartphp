<?php
namespace imgchart;
class imgFunnelChart extends imgBarChart
{
    function __construct($width = 200, $height = 200, $ic_account_id = null, $ic_secret_key = null)
    {
        $this->setChartType('s', 'h');
        $this->setDimensions($width, $height);
        $this->setIcAccountId($ic_account_id);
        $this->setIcSecretKey($ic_secret_key);
    }
    
    /**
     * This function creates the funnel effect by calculating the hidden dataset
     * 
     */
    public function addData($data)
    {
        $ghost = array();
        for($i = 0; $i < count($data); $i++) {
            $ghost[$i] = (100 - $data[$i])/2;
        }
        $this->addDataSet($ghost);
        $this->addDataSet($data);
    }
}
