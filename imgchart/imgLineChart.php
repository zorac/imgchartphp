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

    /**
     * @brief Specifies chart line styles.
     *
     * @param $lineStyle String A string value to apply to a slice or bar. Labels are applied consecutively to the data
     *                    points in chd. If you have multiple series (for a concentric pie chart, for example), labels
     *                    are applied to all points in all sequences, in the order specified in chd. Use a pipe
     *                    delimiter ( | ) between each label. Specify a missing intervening value by using two
     *                    consecutive pipe characters with no space between them: || . You do not need to label all
     *                    slices.
     *
     *                    Refer to official documentation at:
     *                    https://documentation.image-charts.com/reference/chart-label/
     */
    public function addChartLineStyle($lineStyle)
    {
        $this->setProperty('chls', $this->encodeData($lineStyle, '|'), true);
    }

    public function getUrl()
    {
        $retStr = parent::getUrl();
        return $retStr;
    }
}
