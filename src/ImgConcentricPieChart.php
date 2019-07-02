<?php
namespace ImgChart;
/**
 * @brief Concentric Pie Chart
 */
class ImgConcentricPieChart extends ImgPieChart
{
    function __construct($width = 350, $height = 200, $ic_account_id = null, $ic_secret_key = null)
    {
        $this->setProperty('cht', 'pc');
        $this->setDimensions($width, $height);
        $this->setIcAccountId($ic_account_id);
        $this->setIcSecretKey($ic_secret_key);
    }
    /**
     * @brief Returns the applicable labels for the chart.
     *
     * This function counts recursively the numeber of values in the $values array.
     * @return Array Applicable labels
     */
    public function getApplicableLabels($labels)
    {
        return array_splice($labels, 0, count($this->values, COUNT_RECURSIVE));
    }
    /**
     * @brief Adds the legend for Concentric Pie Charts
     *
     * Run an instance of this function for each data set.
     *
     * @param $labels Array
     */
    public function addLegend($labels)
    {
        $this->setProperty('chdl', urlencode($this->encodeData($this->getApplicableLabels($labels),"|")), true);
    }
}
