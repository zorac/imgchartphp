<?php
namespace ImgChart;
class ImgLineChart extends ImgChart
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
     * @param $lineStyle String You can specify line thickness and solid/dashed style with the chls parameter. This
     *                   parameter can only be used to style lines in line or radar charts; you cannot use it to style
     *                   the line in a compound chart lines, unless the base type of the compound chart is a line chart.
     *
     *                    Refer to official documentation at:
     *                    https://documentation.image-charts.com/line-charts/#line-styles
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
