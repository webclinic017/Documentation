<!-- Code generated by indicator_reference_code_generator.py -->
<? 
include(DOCS_RESOURCES."/qcalgorithm-api/_method_container.html");

$hasAutomaticIndicatorHelper = false;
$helperPrefix = '';
$typeName = 'Delay';
$helperName = 'Delay';
$helperArguments = 'symbol';
$properties = array("current","previous","window","item");
$otherProperties = array("is_ready","warm_up_period","period","name","samples");
$updateParameterType = 'time/number pair, or an <code>IndicatorDataPoint</code>';
$constructorArguments = '';
$updateParameterValue = 'bar.EndTime, bar.Close';
$hasMovingAverageTypeParameter = False;
$constructorBox = 'delay';
include(DOCS_RESOURCES."/indicators/using-indicator.php");
?>