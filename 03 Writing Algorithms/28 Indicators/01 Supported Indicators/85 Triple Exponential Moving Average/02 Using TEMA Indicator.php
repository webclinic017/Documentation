<!-- Code generated by indicator_reference_code_generator.py -->
<? 
include(DOCS_RESOURCES."/qcalgorithm-api/_method_container.html");

$hasAutomaticIndicatorHelper = true;
$helperPrefix = '';
$typeName = 'TripleExponentialMovingAverage';
$helperName = 'TEMA';
$helperArguments = 'symbol, 20';
$properties = array("current","previous","window","item");
$otherProperties = array("is_ready","warm_up_period","name","samples");
$updateParameterType = 'time/number pair, or an <code>IndicatorDataPoint</code>';
$constructorArguments = '20';
$updateParameterValue = 'bar.EndTime, bar.Close';
$hasMovingAverageTypeParameter = False;
$constructorBox = 'triple-exponential-moving-average';
include(DOCS_RESOURCES."/indicators/using-indicator.php");
?>