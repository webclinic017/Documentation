<!-- Code generated by indicator_reference_code_generator.py -->
<? 
include(DOCS_RESOURCES."/qcalgorithm-api/_method_container.html");

$hasAutomaticIndicatorHelper = true;
$helperPrefix = '';
$typeName = 'AwesomeOscillator';
$helperName = 'AO';
$helperArguments = 'symbol, 10, 20, MovingAverageType.Simple';
$properties = array("slow_ao","fast_ao","current","previous","window","item");
$otherProperties = array("is_ready","warm_up_period","name","samples");
$updateParameterType = 'a <code>TradeBar</code>, or <code>QuoteBar</code>';
$constructorArguments = '10, 20, MovingAverageType.Simple';
$updateParameterValue = 'bar';
$hasMovingAverageTypeParameter = False;
$constructorBox = 'awesome-oscillator';
include(DOCS_RESOURCES."/indicators/using-indicator.php");
?>