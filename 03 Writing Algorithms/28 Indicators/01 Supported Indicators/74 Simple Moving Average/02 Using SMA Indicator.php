<!-- Code generated by indicator_reference_code_generator.py -->
<? 
include(DOCS_RESOURCES."/qcalgorithm-api/_method_container.html");

$hasAutomaticIndicatorHelper = true;
$helperPrefix = '';
$typeName = 'SimpleMovingAverage';
$helperName = 'SMA';
$helperArguments = 'symbol, 20';
$properties = array("rolling_sum","current","previous","window","item");
$otherProperties = array("is_ready","warm_up_period","period","name","samples");
$updateParameterType = 'time/number pair, or an <code>IndicatorDataPoint</code>';
$constructorArguments = '20';
$updateParameterValue = 'bar.EndTime, bar.Close';
$hasMovingAverageTypeParameter = False;
$constructorBox = 'simple-moving-average';
include(DOCS_RESOURCES."/indicators/using-indicator.php");
?>