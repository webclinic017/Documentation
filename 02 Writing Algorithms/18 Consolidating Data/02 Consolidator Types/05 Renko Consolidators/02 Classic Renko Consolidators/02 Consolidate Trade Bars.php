<?php 
include(DOCS_RESOURCES."/consolidators/manage-consolidators.php");
$output = "<code>RenkoBar</code> objects";
$consolidationHandlerType = "RenkoBar";
$dataFormatInfo = new TradeBarConsolidatorFormatInfo($output, $consolidationHandlerType);

$extraExamples = "
<p>To build the Renko bars with a different property than the <code>Value</code> of the <code>IBaseData</code> object, provide a <code>selector</code> argument. The <code>selector</code> should be a function that receives the <code>IBaseData</code> object and returns a decimal value.</p>

<div class='section-example-container'>
	<pre class='python'>self.consolidator = ClassicRenkoConsolidator(1, selector = lambda data: data.High)</pre>
	<pre class='csharp'>_consolidator = new ClassicRenkoConsolidator(1m, data => (data as TradeBar).High);</pre>
</div>

<p>To add a non-zero <code>Volume</code> property to the Renko bars, provide a <code>volumeSelector</code> argument. The <code>volumeSelector</code> should be a function that receives the <code>IBaseData</code> object and returns a decimal value.</p>

<div class='section-example-container'>
	<pre class='python'>self.consolidator = ClassicRenkoConsolidator(1, volumeSelector = lambda data: data.Volume)</pre>
	<pre class='csharp'>_consolidator = new ClassicRenkoConsolidator(1m, null, data => (data as TradeBar).Volume);</pre>
</div>
";
$consolidatorInfo = new ClassicRenkoConsolidatorInfo($extraExamples);

$getConsolidatorText($dataFormatInfo, $consolidatorInfo);
?>
