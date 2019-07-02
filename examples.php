<?php
namespace ImgChart;
#ini_set('display_errors','1');
?>
<html>
<head>
<title>PHP Wrapper for Google Chart API Examples - 0.5</title>

<style type="text/css">
img { display:block; }
</style>
</head>
<body>
<h1>PHP Wrapper for Google Chart API Examples - 0.5</h1>
<h1>Quick examples.</h1>

<?php
require_once(__DIR__ . "/vendor/autoload.php")
?>
<h2>Pie Chart</h2>
<?php
$piChart = new ImgPieChart();
$piChart->addDataSet(array(112,315,66,40));
$piChart->setLegend(array("first", "second", "third","fourth"));
$piChart->setLabels(array("first", "second", "third","fourth"));
$piChart->setColors(array("ff3344", "11ff11", "22aacc", "3333aa"));
?>
<img src="<?php print $piChart->getUrl();  ?>" /> <br> pie chart using the ImgPieChart class.
<p>
<em>code:</em><br>
<code>
$piChart = new ImgPieChar();<br>
$piChart->addDataSet(array(112,315,66,40));<br>
$piChart->setLegend(array("first", "second", "third","fourth"));<br>
$piChart->setLabels(array("first", "second", "third","fourth"));<br>
$piChart->setColors(array("ff3344", "11ff11", "22aacc", "3333aa"));<br>
</code>
</p>
<h2>3D Pie Chart</h2>
<?php
$pie3dChart = new ImgPie3DChart();
$pie3dChart->addDataSet(array(112,315,66,40));
$pie3dChart->setLegend(array("first", "second", "third","fourth"));
$pie3dChart->setLabels(array("first", "second", "third","fourth"));
$pie3dChart->setColors(array("ff3344", "11ff11", "22aacc", "3333aa"));
?>
<img src="<?php print $pie3dChart->getUrl();  ?>" /> <br> 3D pie chart using the ImgPieChart class.
<p>
<em>code:</em><br>
<code>
$pie3dChart = new ImgPie3DChart();<br>
$pie3dChart->addDataSet(array(112,315,66,40));<br>
$pie3dChart->setLegend(array("first", "second", "third","fourth"));<br>
$pie3dChart->setLabels(array("first", "second", "third","fourth"));<br>
$pie3dChart->setColors(array("ff3344", "11ff11", "22aacc", "3333aa"));<br>
</code>
</p>
<h2>Concentric Pie Chart</h2>
<?php
$CPChart = new ImgConcentricPieChart();
$CPChart->addDataSet(array(112,315,66,40));
$CPChart->addDataSet(array(100,235,346,50));
$CPChart->addColors(array("008800", "880000"));
$CPChart->addColors(array("000088", "888800"));
$CPChart->addLegend(array('1', '2', '3', '4'));
$CPChart->addLegend(array('1a', '2a', '3a', '4a'));

?>
<img src="<?php print $CPChart->getUrl();  ?>" /> <br> pie chart using the ImgPieChart class.
<p>
<em>code:</em><br>
<code>
$CPChart = new ImgConcentricPieChart();<br>
$CPChart->addDataSet(array(112,315,66,40));<br>
$CPChart->addDataSet(array(100,235,346,50));<br>
$CPChart->addColors(array("008800", "880000"));<br>
$CPChart->addColors(array("000088", "888800"));<br>
$CPChart->addLegend(array('1', '2', '3', '4'));<br>
$CPChart->addLegend(array('1a', '2a', '3a', '4a'));<br>
</code>
</p>
<h2>Line Chart</h2>
<?php
$lineChart = new ImgLineChart(300,300);
$lineChart->addDataSet(array(112,315,66,40));
$lineChart->addDataSet(array(212,115,366,140));
$lineChart->addDataSet(array(112,95,116,140));
$lineChart->setLegend(array("first", "second", "third","fourth"));
$lineChart->setColors(array("ff3344", "11ff11", "22aacc", "3333aa"));
$lineChart->setVisibleAxes(array('x','y'));
$lineChart->setDataRange(30,400);
$lineChart->addAxisRange(0, 1, 4, 1);
$lineChart->addAxisRange(1, 30, 400);
$lineChart->addBackgroundFill('bg', 'EFEFEF');
$lineChart->addBackgroundFill('c', '000000');
?>
<img src="<?php print $lineChart->getUrl();  ?>" /> <br> line chart using the ImgLineChart class.
<p>
<em>code:</em><br>
<code>
$lineChart = new ImgLineChart(300,300);<br>
$lineChart->addDataSet(array(112,315,66,40));<br>
$lineChart->addDataSet(array(212,115,366,140));<br>
$lineChart->addDataSet(array(112,95,116,140));<br>
$lineChart->setLegend(array("first", "second", "third","fourth"));<br>
$lineChart->setColors(array("ff3344", "11ff11", "22aacc", "3333aa"));<br>
$lineChart->setVisibleAxes(array('x','y'));<br>
$lineChart->setDataRange(30,400);<br>
$lineChart->addAxisRange(0, 1, 4, 1);<br>
$lineChart->addAxisRange(1, 30, 400);<br>
$lineChart->addBackgroundFill('bg', 'EFEFEF');<br>
$lineChart->addBackgroundFill('c', '000000');<br>
</code>
</p>
<h2>Line Chart with Strip Fill</h2>
<?php
$lineChart = new ImgLineChart(300,300);
$lineChart->addDataSet(array(112,315,66,40));
$lineChart->addDataSet(array(212,115,366,140));
$lineChart->addDataSet(array(112,95,116,140));
$lineChart->setLegend(array("first", "second", "third","fourth"));
$lineChart->setColors(array("ff3344", "11ff11", "22aacc", "3333aa"));
$lineChart->setVisibleAxes(array('x','y'));
$lineChart->setDataRange(30,400);
$lineChart->addAxisLabel(0, array("This", "axis", "has", "labels!"));
$lineChart->addAxisRange(1, 30, 400);
$lineChart->setStripFill('bg',0,array('CCCCCC',0.15,'FFFFFF',0.1));
?>
<img src="<?php print $lineChart->getUrl();  ?>" /> <br> line chart using the ImgLineChart class.
<p>
<em>code:</em><br>
<code>
$lineChart = new ImgLineChart(300,300);<br>
$lineChart->addDataSet(array(112,315,66,40));<br>
$lineChart->addDataSet(array(212,115,366,140));<br>
$lineChart->addDataSet(array(112,95,116,140));<br>
$lineChart->setLegend(array("first", "second", "third","fourth"));<br>
$lineChart->setColors(array("ff3344", "11ff11", "22aacc", "3333aa"));<br>
$lineChart->setVisibleAxes(array('x','y'));<br>
$lineChart->setDataRange(30,400);<br>
$lineChart->addAxisLabel(0, array("This", "axis", "has", "labels!"));<br>
$lineChart->addAxisRange(1, 30, 400);<br>
$lineChart->setStripFill('bg',0,array('CCCCCC',0.15,'FFFFFF',0.1);<br>
</code>
</p>
<h2>Line Chart with Line Fill</h2>
<?php
$lineChart = new ImgLineChart(300,300);
$lineChart->addDataSet(array(112,125,66,40));
$lineChart->setLegend(array("first"));
$lineChart->setColors(array("ff3344"));
$lineChart->setVisibleAxes(array('x','y'));
$lineChart->setDataRange(30,130);
$lineChart->addAxisRange(0, 1, 4, 1);
$lineChart->addAxisRange(1, 30, 130);
$lineChart->addLineFill('B','76A4FB',0,0);
?>
<img src="<?php print $lineChart->getUrl();  ?>" /> <br> line chart using the ImgLineChart class.
<p>
<em>code:</em><br>
<code>
$lineChart = new ImgLineChart(300,300);<br>
$lineChart->addDataSet(array(112,125,66,40));<br>
$lineChart->setLegend(array("first"));<br>
$lineChart->setColors(array("ff3344"));<br>
$lineChart->setVisibleAxes(array('x','y'));<br>
$lineChart->setDataRange(30,130);<br>
$lineChart->addAxisRange(0, 1, 4, 1);<br>
$lineChart->addAxisRange(1, 30, 130);<br>
$lineChart->addLineFill('B','76A4FB',0,0);<br>
</code>
</p>
<h2>Line Chart with Grid Lines</h2>
<?php
$lineChart = new ImgLineChart(300,300);
$lineChart->addDataSet(array(112,315,66,40));
$lineChart->addDataSet(array(212,115,366,140));
$lineChart->addDataSet(array(112,95,116,140));
$lineChart->setLegend(array("first", "second", "third","fourth"));
$lineChart->setColors(array("ff3344", "11ff11", "22aacc", "3333aa"));
$lineChart->setVisibleAxes(array('x','y'));
$lineChart->setDataRange(0,400);
$lineChart->addAxisRange(0, 1, 4, 1);
$lineChart->addAxisRange(1, 0, 400);
$lineChart->setGridLines(33,10);
?>
<img src="<?php print $lineChart->getUrl();  ?>" /> <br> line chart using the ImgLineChart class.
<p>
<em>code:</em><br>
<code>
$lineChart = new ImgLineChart(300,300);<br>
$lineChart->addDataSet(array(112,315,66,40));<br>
$lineChart->addDataSet(array(212,115,366,140));<br>
$lineChart->addDataSet(array(112,95,116,140));<br>
$lineChart->setLegend(array("first", "second", "third","fourth"));<br>
$lineChart->setColors(array("ff3344", "11ff11", "22aacc", "3333aa"));<br>
$lineChart->setVisibleAxes(array('x','y'));<br>
$lineChart->setDataRange(0,400);<br>
$lineChart->addAxisRange(0, 1, 4, 1);<br>
$lineChart->addAxisRange(1, 0, 400);<br>
$lineChart->setGridLines(33,10);<br>
</code>
</p>
<h2>Grouped Bar Chart</h2>
<?php
$barChart = new ImgBarChart(500,150,'g');
$barChart->addDataSet(array(112,315,66,40));
$barChart->addDataSet(array(212,115,366,140));
$barChart->addDataSet(array(112,95,116,140));
$barChart->setColors(array("ff3344", "11ff11", "22aacc"));
$barChart->setLegend(array("first", "second", "third"));
$barChart->setGradientFill('c',0,array('FFE7C6',0,'76A4FB',1));
$barChart->setAutoBarWidth();
?>
<img src="<?php print $barChart->getUrl();  ?>" /> <br> grouped bar chart using the ImgGroupedBarChart class.
<p>
<em>code:</em><br>
<code>
$barChart = new ImgBarChart(500,150,'g');<br>
$barChart->addDataSet(array(112,315,66,40));<br>
$barChart->addDataSet(array(212,115,366,140));<br>
$barChart->addDataSet(array(112,95,116,140));<br>
$barChart->setColors(array("ff3344", "11ff11", "22aacc"));<br>
$barChart->setLegend(array("first", "second", "third"));<br>
$barChart->setGradientFill('c',0,array('FFE7C6',0,'76A4FB',1));<br>
$barChart->setAutoBarWidth();<br>
</code>
</p>
<h2>Horizontal Grouped Bar Chart</h2>
<?php
$barChart = new ImgBarChart(150,500,'g','h');
$barChart->addDataSet(array(112,315,66,40));
$barChart->addDataSet(array(212,115,366,140));
$barChart->addDataSet(array(112,95,116,140));
$barChart->setColors(array("ff3344", "11ff11", "22aacc"));
$barChart->setLegend(array("first", "second", "third"));
$barChart->setGradientFill('c',0,array('FFE7C6',0,'76A4FB',1));
$barChart->setLegend(array("This", "is", "different"));
?>
<img src="<?php print $barChart->getUrl();  ?>" /> <br> horizontal grouped bar chart using the ImgGroupedBarChart class.
<p>
<em>code:</em><br>
<code>
$barChart = new ImgBarChart(150,500,'g','h');<br>
$barChart->addDataSet(array(112,315,66,40));<br>
$barChart->addDataSet(array(212,115,366,140));<br>
$barChart->addDataSet(array(112,95,116,140));<br>
$barChart->setColors(array("ff3344", "11ff11", "22aacc"));<br>
$barChart->setLegend(array("first", "second", "third"));<br>
$barChart->setGradientFill('c',0,array('FFE7C6',0,'76A4FB',1));<br>
$barChart->setLegend(array("This", "is", "different"));<br>
</code>
</p>
<h2>Stacked Bar Chart</h2>
<?php
$barChart = new ImgStackedBarChart(450,350);
$barChart->addDataSet(array(112,315,66,40));
$barChart->addDataSet(array(212,115,366,140));
$barChart->addDataSet(array(112,95,116,140));
$barChart->setLegend(array("first", "second", "third","fourth"));
$barChart->setColors(array("ff3344", "11ff11", "22aacc", "3333aa"));
$barChart->setTitle("A multiline\r\nA Title");
?>
<img src="<?php print $barChart->getUrl();  ?>" /> <br> stacked bar chart using the ImgStackedBarChart class.
<p>
<em>code:</em><br>
<code>
$barChart = new ImgStackedBarChart(450,350);<br>
$barChart->addDataSet(array(112,315,66,40));<br>
$barChart->addDataSet(array(212,115,366,140));<br>
$barChart->addDataSet(array(112,95,116,140));<br>
$barChart->setLegend(array("first", "second", "third","fourth"));<br>
$barChart->setColors(array("ff3344", "11ff11", "22aacc", "3333aa"));<br>
$barChart->setTitle("A multiline\r\nA Title");<br>
</code>
</p>
<h2>Horizontal Stacked Bar Chart</h2>
<?php
$barChart->setHorizontal(true);
$barChart->groupSpacerWidth = 10;
?>
<img src="<?php print $barChart->getUrl();  ?>" /> <br> horizontal stacked bar chart using the ImgStackedBarChart class.
<p>
<em>code:</em><br>
<code>
$barChart->setHorizontal(true);<br>
$barChart->groupSpacerWidth = 10;
</code>
</p>
<h2>Funnel Bar Chart</h2>
<?php
$funnelChart = new ImgFunnelChart(800,230);
$funnelChart->addData(array(100, 75, 44, 42, 29, 3));
$funnelChart->setColors(array("ffffff", "FF9900"));
$funnelChart->setVisibleAxes(array('x','y'));
$funnelChart->addAxisRange(0, 0, 100, 10);
$funnelChart->addAxisLabel(0, array("0%", "10%", "20%", "30%","40%", "50%", "60%", "70%","80%", "90%", "100%"));
$funnelChart->addAxisLabel(1, array("Step6", "Step5", "Step4", "Step3", "Step2", "Step1"));
$funnelChart->addValueMarkers('N%2a%2a%','000000',1,-1,11,'','c');
?>
<img src="<?php print $funnelChart->getUrl();  ?>" /> <br> stacked bar chart using the ImgStackedBarChart class.
<p>
<em>code:</em><br>
<code>
$funnelChart = new ImgFunnelChart(800,230);<br>
$funnelChart->addData(array(100, 75, 44, 42, 29, 3));<br>
$funnelChart->setColors(array("ffffff", "FF9900"));<br>
$funnelChart->setVisibleAxes(array('x','y'));<br>
$funnelChart->addAxisRange(0, 0, 100, 10);<br>
$funnelChart->addAxisLabel(0, array("0%", "10%", "20%", "30%","40%", "50%", "60%", "70%","80%", "90%", "100%"));<br>
$funnelChart->addAxisLabel(1, array("Step6", "Step5", "Step4", "Step3", "Step2", "Step1"));<br>
$funnelChart->addValueMarkers('N%2a%2a%','000000',1,-1,11,'','c');<br>
</code>
</p>
<h2>Venn Diagram</h2>
<?php
$vennDiagram = new ImgVennDiagram();
$vennDiagram->setSizes(1120,3150);
$vennDiagram->setIntersections(220, 320);
$vennDiagram->setEncodingType('s');
$vennDiagram->setColors(array("ff3344", "11ff11", "22aacc", "3333aa"));
?>
<img src="<?php print $vennDiagram->getUrl();  ?>" /> <br> venn diagram using the ImgVennDiagram class.
<p>
<em>code:</em><br>
<code>
$vennDiagram = new ImgVennDiagram();<br>
$vennDiagram->setSizes(1120,3150);<br>
$vennDiagram->setIntersections(220, 320);<br>
$vennDiagram->setEncodingType('s');<br>
$vennDiagram->setColors(array("ff3344", "11ff11", "22aacc", "3333aa"));<br>
</code>
</p>
<h2>Venn Diagram</h2>
<?php
$vennDiagram = new ImgVennDiagram();
$vennDiagram->setSizes(20, 20, 20);
$vennDiagram->setIntersections(0, 4, 6, 2);
$vennDiagram->setColors(array("ff3344", "11ff11", "22aacc", "3333aa"));
?>
<img src="<?php print $vennDiagram->getUrl();  ?>" /> <br> venn diagram using the ImgVennDiagram class.
<p>
<em>code:</em><br>
<code>
$vennDiagram = new ImgVennDiagram();<br>
$vennDiagram->setSizes(10, 10, 10);<br>
$vennDiagram->setIntersections(2, 2, 2, 1);<br>
$vennDiagram->setColors(array("ff3344", "11ff11", "22aacc", "3333aa"));<br>
</code>
</p>
<h2>Latex Formula</h2>
<?php
$latex = new ImgFormula();
$latex -> setLatexCode('\cos(x)^2+\sin(x)^2=1');
?>
<img src="<?php print $latex->getUrl();  ?>" /> <br> latex formula using the ImgFormula class.
<p>
<em>code:</em><br>
<code>
$latex = new ImgFormula();<br>
$latex -> setLatexCode('\cos(x)^2+\sin(x)^2=1');<br>
</code>
</p>
<h2>QR Code</h2>
<?php
$qr = new ImgQRCode();
$qr -> setQRCode('imgChartPhp is awesome!');
?>
<img src="<?php print $qr->getUrl();  ?>" /> <br> QR Code using the ImgQRCode class.
<p>
<em>code:</em><br>
<code>
$qr = new ImgQRCode();<br>
$qr -> setQRCode('imgChartPhp is awesome!');<br>
</code>
</p>
<h2>Google-o-Meter</h2>
<?php
$meter = new ImgMeterChart();
$meter -> addDataSet(array(10, 50, 90));
$meter -> setColors(array('FFFFFF','000000'));
?>
<img src="<?php print $meter->getUrl();  ?>" /> <br> Goole-o-Meter Chart using the ImgMeterChart class.
<p>
<em>code:</em><br>
<code>
$meter = new ImgMeterChart();<br>
$meter -> addDataSet(array(10, 50, 90));<br>
$meter -> setColors('FFFFFF','000000');<br>
</code>
</p>
<h2>Map Chart</h2>
<?php
$map = new ImgMapChart();
$map -> setZoomArea('usa');
$map -> setStateCodes(array('CA', 'TX', 'NY', 'UT', 'NV'));
$map -> addDataSet(array(23, 32, 12, 54, 23));
$map -> setColors('342544', array('BE3481','34BE12'));
?>
<img src="<?php print $map->getUrl();  ?>" /> <br> Map Chart using the ImgMapChart class.
<p>
<em>code:</em><br>
<code>
$map = new ImgMapChart();<br>
$map -> setZoomArea('usa');<br>
$map -> setStateCodes(array('CA', 'TX', 'NY', 'UT', 'NV'));<br>
$map -> addDataSet(array(23, 32, 12, 54, 23));<br>
$map -> setColors('342544', array('BE3481','34BE12'));<br>
</code>
</p>
<h2>Scatter Chart</h2>
<?php
$scatter = new ImgScatterChart();
$scatter -> addDataSet(array(12,87,75,41,23,96,68,71,34,9));
$scatter -> addDataSet(array(98,60,27,34,56,79,58,74,18,76));
$scatter -> addValueMarkers('d','FF0000',0,-1,15);
$scatter -> setVisibleAxes(array('x','y'));
$scatter -> addAxisRange(0, 0, 100);
$scatter -> addAxisRange(1, 0, 100);
?>
<img src="<?php print $scatter->getUrl();  ?>" /> <br> Map Chart using the ImgMapChart class.
<p>
<em>code:</em><br>
<code>
$scatter = new ImgScatterChart();<br>
$scatter -> addDataSet(array(12,87,75,41,23,96,68,71,34,9));<br>
$scatter -> addDataSet(array(98,60,27,34,56,79,58,74,18,76));<br>
$scatter -> addValueMarkers('d','FF0000',0,-1,15);<br>
$scatter -> setVisibleAxes(array('x','y'));<br>
$scatter -> addAxisRange(0, 0, 100);<br>
$scatter -> addAxisRange(1, 0, 100);<br>
</code>
</p>
<h2>Grouped Bar Chart</h2>
<?php
$barChart = new ImgBarChart(250,250,'s');
$barChart->addDataSet(array(0,10,20,30,20,70,80));
$barChart->addDataSet(array(0,20,10,5,20,30,10));
$barChart->addHiddenDataSet(array(10,0,20,15,60,40,30));
$barChart->addValueMarkers('D','76A4FB',2,0,3);
$barChart->setAutoBarWidth();
?>
<img src="<?php print $barChart->getUrl();  ?>" /> <br> compound bar chart using the ImgGroupedBarChart class and addValueMarkers().
<p>
<em>code:</em><br>
<code>
$barChart = new ImgBarChart(250,250,'s');<br>
$barChart->addDataSet(array(0,10,20,30,20,70,80));<br>
$barChart->addDataSet(array(0,20,10,5,20,30,10));<br>
$barChart->addHiddenDataSet(array(10,0,20,15,60,40,30));<br>
$barChart->addValueMarkers('D','76A4FB',2,0,3);<br>
$barChart->setAutoBarWidth();<br>
</code>
</p>
<h2>Candlestick Chart</h2>
<?php
$candlestick = new ImgLineChart(200,125);
$candlestick -> addDataSet(array(90,80,70,50,40,30,20,10));
$candlestick -> addHiddenDataSet(array(0,5,10,0,5,10,0));
$candlestick -> addHiddenDataSet(array(2,15,20,5,15,40,0));
$candlestick -> addHiddenDataSet(array(5,35,20,2,35,20,0));
$candlestick -> addHiddenDataSet(array(15,40,30,15,40,50,0));
$candlestick -> addValueMarkers('F','000000',1,'1:-2',20);
$candlestick -> setVisibleAxes(array('y'));
$candlestick -> addAxisRange(0, 0, 100);
?>
<img src="<?php print $candlestick->getUrl();  ?>" /> <br> compound bar chart using the ImgGroupedBarChart class and addValueMarkers().
<p>
<em>code:</em><br>
<code>
$candlestick = new ImgLineChart(200,125);<br>
$candlestick -> addDataSet(array(90,80,70,50,40,30,20,10));<br>
$candlestick -> addHiddenDataSet(array(0,5,10,0,5,10,0));<br>
$candlestick -> addHiddenDataSet(array(2,15,20,5,15,40,0));<br>
$candlestick -> addHiddenDataSet(array(5,35,20,2,35,20,0));<br>
$candlestick -> addHiddenDataSet(array(15,40,30,15,40,50,0));<br>
$candlestick -> addValueMarkers('F','000000',1,'1:-2',20);<br>
$candlestick -> setVisibleAxes(array('y'));<br>
$candlestick -> addAxisRange(0, 0, 100);<br>
</code>
</p>
</body>
</html>
