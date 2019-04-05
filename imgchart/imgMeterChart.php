<?php
namespace imgchart;
class imgMeterChart extends imgChart
{
    /**
     * @brief Google-o-Meter Chart constructor.
     *
     * Please see documentation for special usage of functions setVisibleAxes(), addAxisLabel(), and setColors().
     */
    function __construct($width = 200, $height = 200, $ic_account_id = null, $ic_secret_key = null)
    {
        $this->setDimensions($width, $height);
        $this->setProperty('cht','gom');
        $this->setIcAccountId($ic_account_id);
        $this->setIcSecretKey($ic_secret_key);
    }
    public function getApplicableLabels($labels)
    {
        return array_splice($labels, 0, count($this->values[0]));
    }
    /**
     * @brief Sets the labels for each arrow
     *
     * You can obtain the same result of this function by setting visible axis x and adding the labels on that axis.
     */
    public function setLabels($labels)
    {
        $this->setProperty('chl', urlencode($this->encodeData($this->getApplicableLabels($labels),"|")));
    }
}
