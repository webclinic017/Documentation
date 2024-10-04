<!-- Code generated by indicator_reference_code_generator.py -->
<? 
include(DOCS_RESOURCES."/qcalgorithm-api/_method_container.html");

$hasAutomaticIndicatorHelper = true;
$helperPrefix = '';
$typeName = 'LinearWeightedMovingAverage';
$helperName = 'LWMA';
$helperArguments = 'symbol, 20';
$properties = array("current","previous","window","item");
$otherProperties = array("warm_up_period","period","is_ready","name","samples");
$updateParameterType = 'time/number pair, or an <code>IndicatorDataPoint</code>';
$constructorArguments = '20';
$updateParameterValue = 'bar.EndTime, bar.Close';
$hasMovingAverageTypeParameter = False;
$constructorBox = 'linear-weighted-moving-average';
include(DOCS_RESOURCES."/indicators/using-indicator.php");
?>