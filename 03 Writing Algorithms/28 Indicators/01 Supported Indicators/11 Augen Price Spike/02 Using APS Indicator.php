<!-- Code generated by indicator_reference_code_generator.py -->
<? 
include(DOCS_RESOURCES."/qcalgorithm-api/_method_container.html");

$hasAutomaticIndicatorHelper = true;
$helperPrefix = '';
$typeName = 'AugenPriceSpike';
$helperName = 'APS';
$helperArguments = 'symbol, 3';
$properties = array("current","previous","window","item");
$otherProperties = array("is_ready","warm_up_period","name","samples");
$updateParameterType = 'time/number pair, or an <code>IndicatorDataPoint</code>';
$constructorArguments = '3';
$updateParameterValue = 'bar.EndTime, bar.Close';
$hasMovingAverageTypeParameter = False;
$constructorBox = 'augen-price-spike';
include(DOCS_RESOURCES."/indicators/using-indicator.php");
?>